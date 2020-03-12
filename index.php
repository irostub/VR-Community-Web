<?php session_start();?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/origin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/0c26b5d8a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>VR Community</title>

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
        <div class="nav-scroller py-1 mb-2">
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
        <!--카루셀-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/maxresdefault%20(1).jpg" alt="">
                </div>

                <div class="carousel-item">
                   <img src="img/maxresdefault%20(2).jpg" alt="">
                </div>

                <div class="carousel-item">
                   <img src="img/maxresdefault%20(3).jpg" alt="">
                </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--포스팅 게시글-->
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    VR News
                </h3>
                <div class="blog-post">
                    <div class="row mb-2">
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_star-wars-vader-immortal-4-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">Star Wars Vader Immortal’ Launches</h5>
                                    <p class="card-text">Star Wars Vader Immortal – Episode 1 arrived on Oculus Quest late last month as a key launch title for the standalone headset.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/star-wars-vader-immortal-is-coming-to-rift-june-20th/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_vive-cosmos-new-design-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">HTC Unveils New Cosmos Design</h5>
                                    <p class="card-text">HTC today unveiled a new design for Cosmos, the company’s upcoming inside-out tracked PC VR headset slated for release in Q3 2019.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/htc-vive-cosmos-redesign/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_htc-vive-cosmos-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">HTC Strikes Down Vive Cosmos Price Rumor</h5>
                                    <p class="card-text">“trusted industryinsider.”Responding to the rumor, HTC tells Road to VR that the price is “incorrect (and high).”</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('hhttps://www.roadtovr.com/htc-vive-cosmos-price-release-date-rumor/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_logitech-vr-ink-pilot-edition-5-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">Hands-on: Logitech is Building the SteamVR</h5>
                                    <p class="card-text">Logitech today revealed the VR Ink ‘Pilot Edition’, a stylus built for art and design in VR. Built with SteamVR Tracking tech.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/logitech-vr-ink-stylus-hands-on-steamvr-tracking/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_hp-reverb-11-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">HP’s Pixel-packed ‘Reverb’ Sets</h5>
                                    <p class="card-text">HP today announced Reverb (formerly codenamed Copper), its new VR headset which aims to deliver enhanced resolution and comfort.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/hp-rever-hands-on-impressions-pixel-packed-new-bar-for-windows-vr-headsets/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_htc-vive-5g-hub-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">‘5G Hub’ Demonstrates VR Cloud</h5>
                                    <p class="card-text">HTC announced a new product out of left field here at Mobile World Congress (MWC) this week, the 5G Hub mobile hotspot that includes a media streaming device.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/hands-htcs-5g-hub-demonstrates-vr-cloud-rendering-horizon/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_letinar-optics-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">LetinAR Brings a Larger FOV &amp; Depth</h5>
                                    <p class="card-text">The company’s latest product demo, which they call PinMR “8K”, sources imagery from two 5-inch 4K LCD displays held within a fixed viewing frame.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/letinar-pinhole-effect-optics-larger-fov-mwc-2019/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-deck">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="img/%EC%88%98%EC%A0%95%EB%90%A8_pimax-ces-2019-5-1021x580.jpg" alt="">
                                <div class="card-body">
                                   <h5 class="card-title">Pimax’s Ultrawide “8K” &amp; “5K”</h5>
                                    <p class="card-text">Pimax has made big steps forward with their “8K” headset, and even announced a new variant. the “5K” Plus ,which replaces the former “5K”</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" onclick="window.open('https://www.roadtovr.com/pimax-8k-5k-plus-big-improvements-hands-on-ces-2019/')" class="btn btn-sm btn-outline-secondary" >View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Virtual World Broadcast</strong>
                        <h3 class="mb-0">Youtube와<br>함께하는 방송!</h3>
                        <div class="mb-1 text-muted">매주 화/수 2:00PM-4:00PM</div>
                        <button onclick="window.open('https://www.youtube.com/channel/UCzuqhhs6NWbgTzMuM09WKDQ')"  class="btn btn-outline-danger">시청하기</button>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/%EC%88%98%EC%A0%95%EB%90%A8_vrbroadcastingsm.jpg" alt="">
                    </div>
                </div>
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Buy HTC Vive</strong>
                        <h3 class="mb-0">HTC vive Buy Here!</h3>
                        <p class="card-text mb-auto">VR 미래의 비전, 새로운 프리미엄 PC VR 시스템 VIVE 코스모스 출시!</p>
                        <button onclick="window.open('https://www.vive.com/kr/')"  class="btn btn-outline-danger">구매하기</button>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/%EC%88%98%EC%A0%95%EB%90%A8_cosmos-meta.jpg" alt="">
                    </div>
                </div>
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Buy Oculus VR</strong>
                        <h3 class="mb-0">Oculus VR Buy Here!</h3>
                        <p class="card-text mb-auto">There’s an Oculus headset for everyone.</p>
                        <button onclick="window.open('https://www.oculus.com/')"  class="btn btn-outline-danger">구매하기</button>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/%EC%88%98%EC%A0%95%EB%90%A8_58959025_2288013164622742_5109440567318675456_n.jpg" alt="">
                    </div>
                </div>
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Buy Pimax</strong>
                        <h3 class="mb-0">Pimax VR Buy Here!</h3>
                        <p class="card-text mb-auto">Not a headset , Just your eyes.</p>
                        <button onclick="window.open('https://pimaxvr.com/')"  class="btn btn-outline-danger">구매하기</button>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/%EC%88%98%EC%A0%95%EB%90%A8_%EB%8B%A4%EC%9A%B4%EB%A1%9C%EB%93%9C.jpg" alt="">
                    </div>
                </div>
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Sibling site</strong>
                        <h3 class="mb-0">Our Support Site is Here</h3>
                        <p class="card-text mb-auto">Look at our Sibling site! Fresh materials and information!</p>
                        <button onclick="window.open('https://www.roadtovr.com/')"  class="btn btn-outline-danger">방문하기</button>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/수정됨_road-to-vr-logo-lighter.jpg" alt="">
                    </div>
                </div>
            </aside>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    
    <script>
    $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  

  $( ".card" ).hover(
  function() {
    $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg');
  }
);
  
// document ready  
});
    </script>
</body>

</html>
