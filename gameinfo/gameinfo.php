<?php session_start(); ?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/origin.css">
    <link rel="stylesheet" href="../css/hover.css">

    <script src="https://kit.fontawesome.com/0c26b5d8a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>VR Community : Game Info</title>

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
                    <a class="blog-header-logo text-dark" href="../index.php">VR COMMUNITY</a>
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
                    <?php } elseif(isset($_SESSION['id'])&&$_SESSION['admin']=='y') { ?>
                    <a class="btn btn-sm btn-outline-secondary" href="gameinsert_f.php" style="margin-right : 10px;">Posting</a>
                    <a class="btn btn-sm btn-outline-secondary" href="gameshow.php" style="margin-right : 10px;">Manage</a>
                    <a class="btn btn-sm btn-outline-secondary" href="../user/signout.php">Logout</a>
                    <?php } else { ?>
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
                <a class="p-2 text-muted" href="gameinfo.php">GameInfo</a>
                <a class="p-2 text-muted" href="../board/community.php">Community</a>
                <a class="p-2 text-muted" href="../portfolio.php">About</a>
            </nav>
        </div>
    </div>
    <?php
        include_once('../dbconn.php');
        $sql = "select * from game order by no desc limit 3";
        
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
    ?>
    <main role="main" class="container">
        <!--포스팅 게시글-->
        <div class="row">
            <div class="col blog-main">
                <div class="pb-4 pt-md-5 mb-4 text-center">
                    <h2 class="font-italic">VR Game Info</h2>
                    <p>We can play vivid games using VR. Choose it!</p>
                </div>
                <div class="pt-md-3 border-top">
                    <h3 class="pb-4" style="display:inline-block">
                        TOP3 GAME
                    </h3>
                    <p style="display:inline">VR New Games Get the information and news first in VCS!</p>
                    <div class="blog-post">
                        <div class="row mb-2">
                            <div class="card-deck">
                                <!--카드 최신 3순위 표시-->
                                <?php while($row = $result->fetch_assoc()){?>

                                <div class="card mb-4 shadow-sm">
                                    <!--img here-->
                                    <img class="card-img-top" src="<?=$row['url'];?>">
                                    <div class="card-body">
                                        <!--title here-->
                                        <h5 class="card-title"><?=$row['title'];?></h5>
                                        <!--note here-->
                                        <p class="card-text"><?=$row['note']?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" onclick="window.open('<?=$row['targeturl']?>')" class="btn btn-sm btn-outline-secondary">View</button>
                                                <?php if(isset($_SESSION['id'])&&isset($_SESSION['admin'])&&$admin == 'y'){ ?>
                                                <form action="gamemod_f.php" method="post">
                                                    <input type="text" name="no" value="<?=$row['no']?>" hidden>
                                                    <input type="text" name="title" value="<?=$row['title']?>" hidden>
                                                    <input type="text" name="note" value="<?=$row['note']?>" hidden>
                                                    <input type="text" name="url" value="<?=$row['targeturl']?>" hidden>
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </form>
                                                <?php } ?>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>

                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include_once('../dbconn.php');
                $sql = "select * from game order by no desc limit 3,15";

                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                ?>
                <div class="pt-md-3 border-top">
                    <h3 class="pb-4">
                        GAME LIST
                    </h3>
                    <div class="blog-post">
                        <div class="row mb-2">
                            <!--반복 리스트 시작점-->
                            <?php while($row = $result->fetch_assoc()){?>
                            <div class="col-md-4">
                                <figure class="snip1384">
                                    <img src="<?=$row['url']?>" alt="sample83" style="height:225px;">
                                    <figcaption>
                                        <h3><?=$row['title']?></h3>
                                        <p><?=$row['note']?></p><i class="ion-ios-arrow-right"></i>
                                    </figcaption>
                                    <a href="<?=$row['targeturl']?>" target="_blank"></a>
                                </figure>
                            </div>
                            <?php } } ?>
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
<script>
    $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");


        $(".card").hover(
            function() {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            },
            function() {
                $(this).removeClass('shadow-lg');
            }
        );

        // document ready  
    });

    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );

</script>

</html>
