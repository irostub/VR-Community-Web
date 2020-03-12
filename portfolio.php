<?php session_start(); ?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/origin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/origin.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/hover.css">

    <script src="https://kit.fontawesome.com/0c26b5d8a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>VR Community : Portfolio</title>

</head>

<body>
   <?php
    $count = 0;
    include_once('dbconn.php');    
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
                    <a class="btn btn-sm btn-outline-secondary" href="user/signin.html">Login</a>
                    <?php } else { ?>
                    <a class="btn mr-2 btn-sm btn-outline-secondary" href="user/signmod_f.php" >Modify</a>
                    <a class="btn btn-sm btn-outline-secondary" href="user/signout.php">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </header>

        <!--메뉴바-->
        <div class="nav-scroller py-1 mb-2 border-bottom">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="index.php">VR News</a>
                <a class="p-2 text-muted" href="movie/movie.php">Video</a>
                <a class="p-2 text-muted" href="gameinfo/gameinfo.php">GameInfo</a>
                <a class="p-2 text-muted" href="board/community.php">Community</a>
                <a class="p-2 text-muted" href="portfolio.php">About</a>
            </nav>
        </div>
    </div>

    <main role="main" class="container">
        <!--포스팅 게시글-->
        <div class="row">
            <div class="col blog-main">
                <div class="pb-4 pt-md-5 mb-2 text-white text-center" style="background-image: url(img/foiloBack.jpg)">
                    <h1 class="font-italic">Portfolio</h1>
                    <p>What we have done so far, and contact us</p>
                </div>

                <div class="pt-md-3 border-top">
                    <h3 class="pb-4">
                        Portfolio
                    </h3>
                    <div class="blog-post">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <figure class="snip1384">
                                    <img src="img/portfolio_OpenVR.jpg" alt="sample83" height="225px">
                                    <figcaption>
                                        <h3>Openvr Github</h3>
                                        <p>OpenVR SDK. Contribute to ValveSoftware/openvr development by creating an account on GitHub.</p><i class="ion-ios-arrow-right"></i>
                                    </figcaption>
                                    <a href="https://github.com/ValveSoftware/openvr" target="_blank"></a>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="snip1384">
                                    <img src="img/portfolio_images.jpg" alt="sample83" height="225px">
                                    <figcaption>
                                        <h3>End Space VR</h3>
                                        <p>cus we support game group. End space VR, Developer Orange Bridge Studios! if u wanna something info click this card!</p><i class="ion-ios-arrow-right"></i>
                                    </figcaption>
                                    <a href="https://www.facebook.com/orangebridgestudios/" target="_blank"></a>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="snip1384">
                                    <img src="img/portfolio_End-Space-VRGame.jpg" alt="sample83" height="225px">
                                    <figcaption>
                                        <h3>VR conference</h3>
                                        <p>We opened the VR expo at the VR conference booth! </p><i class="ion-ios-arrow-right"></i>
                                    </figcaption>
                                    <a href="http://seoulvrar.com/" target="_blank"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="pt-md-3 border-top">
                    <h3 class="pb-4">
                        Location
                    </h3>
                    <h5>서울특별시 강서구 내발산동 공항대로42길 61</h5>
                    <div class="blog-post">
                        <div class="row mb-2">


                            <div class="col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9900574993426!2d126.84066641564779!3d37.555298032528796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9c6b8bd61bf3%3A0x9d2743a437b5271d!2z7ISc7Jq47Yq567OE7IucIOqwleyEnOq1rCDrgrTrsJzsgrDrj5kg6rO17ZWt64yA66GcNDLquLggNjE!5e0!3m2!1sko!2skr!4v1561018888709!5m2!1sko!2skr" width="1105" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>

                <div class="pt-md-3 border-top">

                    <div class="blog-post">
                        <div class="row mb-2">
                            <div class="col-md">
                                <h3 class="pb-4">
                                    Contact
                                </h3>
                                
                                <ul>
                                    <li>뉴스/기사 문의|news@vcs.com</li>
                                    <li>광고문의|advertise@vcs.com</li>
                                    <li>업무제휴|biz@vcs.com</li>
                                    <li>영상제작문의|movie@vcs.com</li>
                                </ul>
                            </div>

                            <div class="col-md">
                                <h3 class="pb-4">
                                    Channels
                                </h3>
                                <ul>
                                    <li>커뮤니티|www.vcs.com</li>
                                    <li>트위치 방송|twitch.tv/vcs</li>
                                    <li>유튜브|youtube.com/c/vcs</li>
                                    <li>페이스북|facebook.com/vcs</li>
                                </ul>
                            </div>

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
</body></html>
