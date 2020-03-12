<?php session_start(); ?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/origin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/origin.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/0c26b5d8a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>VR Community : Community</title>

</head>

<body>
    <?php
    $count = 0;
    include_once('../dbconn.php');    
    if(isset($_SESSION['id'])) 
    {  // 로그인했을 때 실행
        $id = $_SESSION['id'];
        $admin = $_SESSION['admin'];
        //$sql = "select count(*) rowcnt from cart where email = '$email'";
        //$result = $conn->query($sql);
        //if($result->num_rows > 0) {
        //    $row = $result->fetch_assoc();
        //    $count = $row['rowcnt'];
     }

    ?>
    <div class="container">
        <!--헤드라인-->
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="index.php">VR COMMUNITY</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <?php if(!isset($_SESSION['id'])) { ?>
                    <a class="btn btn-sm btn-outline-secondary" href="../user/signin.html">Login</a>
                    <?php } else { ?>
                    <a class="btn btn-sm btn-outline-secondary mr-2" href="boardinsert_f.php">Post</a>
                    <a class="btn mr-2 btn-sm btn-outline-secondary" href="../user/signmod_f.php" >Modify</a>
                    <a class="btn btn-sm btn-outline-secondary" href="../user/signout.php">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </header>

        <!--메뉴바-->
        <div class="nav-scroller py-1 mb-2 border-bottom">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="../index.php">VR News</a>
                <a class="p-2 text-muted" href="../movie/movie.php">Video</a>
                <a class="p-2 text-muted" href="../gameinfo/gameinfo.php">GameInfo</a>
                <a class="p-2 text-muted" href="community.php">Community</a>
                <a class="p-2 text-muted" href="../portfolio.php">About</a>
            </nav>
        </div>
    </div>

    <main role="main" class="container">
        <!--포스팅 게시글-->
        <div class="row">
            <div class="col blog-main">
                <div class="pb-4 pt-md-5 mb-4 text-center">
                    <h2 class="font-italic">Community</h2>
                    <p>Communicate with other users!</p>
                </div>

                <div class="pt-md-3 border-top">
                    <h3 class="pb-4">
                        Free Board
                    </h3>
                    <div class="blog-post">
                        <div class="row mb-2">
                            <div class="col">
                                <form class="form-inline mt-2 mb-md-3 mt-md-0" action="<?= $_SERVER['PHP_SELF']?>" method="get">
                                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search keyword,..">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">검색</button>
                                    <!--페이지가 자기가 자기 자신을 호출 ?= $_SERVER['PHP_SELF']?>  이넘이 폼의 액션에 들어가면 자기 자신한테 전달함-->
                                </form>
                                <?php
                        if(isset($_GET['keyword']) && strpos($_GET['keyword'],"%")===false){//strpos의 매개변수 1의 값이 매개변수 2의 값과 같을 때 true를 반환
                        $keyword = $_GET['keyword'];
                        $keyword = '%'.$keyword.'%';
                        }elseif(!isset($_GET['keyword'])){
                        $keyword = '%';
                        }else{ $keyword = $_GET['keyword'];}

                        include_once('../dbconn.php');

                        //페이징을 위한 코딩
                        $list_size = 6; //한페이지의 레코드 수
                        $more_page = 3;//현재 페이지 이전과 이후에 나올 페이지수
                        $page = 0;//현재 페이지 번호
                        $page = (isset($_GET['page']))? intval($_GET['page']) : 1;//현재 페이지 번호가 눌려서 설정되어있으면 해당 값을 페이지로 가져오고. 아니라면 1페이지로 표시

                        $sql = "select count(*) cnt from board";//board의 의 모든 레코드의 숫자를 반환해라.
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $rowcnt = $row['cnt'];
                        $page_count = (int)($rowcnt / $list_size);//페이지의 개수
                        if($rowcnt % $list_size > 0)
                        {
                            $page_count++;//리스트 사이즈로 나눴는데 정확히 안나눠떨어지면 페이지를 더 늘려줘~
                        }
                        //현재 페이지 이전에 나올 페이지들의 시작번호
                        $start_page = max($page- $more_page, 1); //현재 선택한 페이지의 수 - 앞에 나와야하는 페이지 수를 뺏을 때 0이면 시작페이지수가 0이 되어버리므로 max를 걸어서 최소 1부터 시작하게함.
                        $end_page = min($page + $more_page, $page_count);//뒤에 나와야하는 페이지수를 계산
                        $offset = ($page - 1)* $list_size;//앞으로 건너가야할 오프셋을 설정




                        $sql = "select * from board where title like '$keyword' order by no desc limit $offset, $list_size";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                        ?>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="pull-right action-buttons">
                                                    <div class="btn-group pull-right">
                                                        <ul class="dropdown-menu slidedown">
                                                            <i class="fas fa-pen"></i>
                                                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
                                                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-trash"></span>Delete</a></li>
                                                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-flag"></span>Flag</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <form action="boardmod_f.php" method="post">
                                                    <ul class="list-group">
                                                        <?php while($row = $result->fetch_assoc()) { ?>

                                                        <li class="list-group-item">
                                                            <div class="checkbox">
                                                                
                                                                <label for="checkbox">
                                                                    Writer : <?=$row['id']?>
                                                                </label>
                                                                <br>
                                                                <hr>
                                                                <label for="checkbox">
                                                                    Title : <?=$row['title']?>
                                                                </label>
                                                            </div>
                                                            <div class="pull-right action-buttons">
                                                                <input type="text" name="no" value="<?=$row['no']?>" hidden>
                                                                <input type="text" name="id" value="<?=$row['id']?>" hidden>
                                                                <input type="text" name="title" value="<?=$row['title']?>" hidden>
                                                                <input type="text" name="note" value="<?=$row['note']?>" hidden>
                                                                <button type="button" onclick="location.href='showitem.php?no=<?=$row['no']?>'"><span class="fas fa-search-plus"></span></button>
                                                                <?php if(isset($_SESSION['id'])){ 
                                                                
                                                                        if($_SESSION['id']==$row['id']||$_SESSION['admin']=='y'){
                                                                ?>
                                                                <button type="submit"><span class="fas fa-pen"></span></button>
                                                                
                                                                <button type="button" onclick="location.href='boarddel.php?no=<?=$row['no']?>'"><span class="fas fa-trash-alt"></span></button>
                                                                <?php }}else{} ?>
                                                            </div>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                </form>
                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6>
                                                            Total Count <span class="label label-info"><?=$rowcnt?></span></h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="paging_area">
                                                            <?php
                                                    //현재 페이지 이전으로 가도록 prev링크를 만듬.
                                                        if($page > 1)
                                                        { ?>
                                                            <a href="community.php?page=<?=($page-1)?>&keyword=<?=$keyword?>">PREV</a>
                                                            <?php } else { ?>
                                                            <span>PREV</span>
                                                            <?php } ?>
                                                            <?php
                                                        //현재 페이지를 중심으로 이전 이후에 페이지번호 나열
                                                        for($p=$start_page; $p<=$end_page; $p++)
                                                        {
                                                            if($p == $page)
                                                            {
                                                                echo "<a class = 'active' href='#'>$p</a>";
                                                            }
                                                            else{
                                                        ?>
                                                            <a href="community.php?page=<?=$p?>&keyword=<?=$keyword?>"><?=$p?></a>
                                                            <?php }} ?>
                                                            <?php
                                                        //현재 페이지 다음에 next 표시하기
                                                        if($page < $end_page)
                                                        { ?>
                                                            <a href="community.php?page=<?=($page+1)?>&keyword=<?=$keyword?>">NEXT</a>
                                                            <?php } else { ?>
                                                            <span>NEXT</span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <?php } else { echo "게시글이 없습니다."; } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--게시판 출력 및 페이징 작성공간-->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <!--<a href="" style="position:fixed; right: 15%; bottom: 3%;"><img src="pageup1.png" alt=""></a>-->
    <footer class="blog-footer">
        <h4>Contact us : SNS</h4>
        <div class="text-center center-block">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://mail.naver.com/"><i class="fas fa-envelope"></i></a>
        </div>
        <hr>
        <p>Copyright 2019. <a href="https://raijiko.tistory.com/">Shindongmin</a> All pictures cannot be copied without permission</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
</body>

</html>
