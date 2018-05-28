
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ITS Foreign Language Society</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
<link rel="shortcut icon" href="http://ifls.lmb.its.ac.id/images/favicon-ifls.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-expand-md ">
    <div class="navbar-header">
            <a href="#" class="navbar-logo"> <img src="assets/images/ifls2.png" width="100px" height="auto"></a>
            <span data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" >
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </span>
        </div>

     <div
    id="navbarCollapse" class="collapse navbar-collapse ">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a href="/laravel_ifls/public_html" class="nav-link">Home</a>
            </li>
            <li class="nav-item"><a href="/laravel_ifls/public_html/profile" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <div class="formSearch">
                    <form action="/laravel_ifls/public_html/cari" autocomplete="on">
                        <input id="search" class="hideSearch" name="search" type="text" placeholder="Search">
                        <div class="searchExpand">
                            <button id="search_submit" type="submit"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
        </div>

</nav>
    <!-- Carousel==================================================-->

<div id="iflsCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#iflsCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#iflsCarousel" data-slide-to="1"></li>
        <li data-target="#iflsCarousel" data-slide-to="2"></li>
        <li data-target="#iflsCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item carousel-item active">
            <img src="http://thesuperslice.com/wp-content/uploads/2013/08/Random-aka-Mega-Ran-03.jpg">
                <div class="carousel-caption">
                     <h1>Bootstrap 3 Carousel Layout</h1>
            </div>
        </div>
        <div class="item carousel-item">
            <img src="https://www.howtogeek.com/wp-content/uploads/2014/02/xdice-random-numbers.jpg.pagespeed.gp+jp+jw+pj+ws+js+rj+rp+rw+ri+cp+md.ic.qxPbqilJ59.jpg">
            <div class="carousel-caption">
                 <h1>Changes to the Grid</h1>
                <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class
                    names have completely changed.</p>
                <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
                </p>
            </div>
        </div>
        <div class="item carousel-item">
            <img src="https://www.newton.ac.uk/files/covers/968361.jpg">
            <div class="carousel-caption">
                 <h1>Changes to the Grid</h1>
                <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class
                    names have completely changed.</p>
                <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
                </p>
            </div>
        </div>
        <div class="item carousel-item">
            <img src="http://ifls.lmb.its.ac.id/images/chion1.png">
            <div class="carousel-caption">
                 <h1><a href="">Coba Carousel Ya Dicoba Dulu Ya Mau Coba Dulu Aja</a></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry&apos;s standard dummy text ever since
                    the 1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into... <a href="xyz">Read More</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="carousel-control carousel-control-prev" href="#iflsCarousel" data-slide="prev">

        <span class="iconCarousel fa fa-caret-left"> </span>

    </a>
 <a class="carousel-control carousel-control-next" href="#iflsCarousel" data-slide="next">

        <span class="iconCarousel fa fa-caret-right" ></span>

    </a>
    </div>
    <!-- /.carousel -->
    <div class="aboutUs">
        <div class="row">
            <div class="col-md-6 naration">
                 <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a
                href="/laravel_ifls/public_html/profile" class="btnProfile btn btn-outlined btn-success">Profile</a>
            </div>
                <div class="col-md-6 yt" code="m3HDcb1thkk" style="background-image: url('https://i3.ytimg.com/vi/m3HDcb1thkk/maxresdefault.jpg'); background-position: center center; width: 100%; height: 312px; background-size:cover;      background-clip: padding-box;"><div class="yt-icon">
                    <img src="assets/images/youtube-play.png" width="70px" height="auto"></div></div>
        </div>
    </div>
    <div class="divisions">
         <h1>Divisions</h1>
        <div class="divisions2">
            <div class="division fade-down">
                <div class="divisionPanel">
                    <div class="divisionLogo ">
                        <img src="http://flagpedia.net/data/flags/ultra/jp.png">
                    </div>
                    <div class="divisionName ">Japan</div>
                </div>
            </div>
            <div class="division fade-down">
                <div class="divisionPanel">
                    <div class="divisionLogo ">
                        <img src="http://flags.fmcdn.net/data/flags/w580/kr.png">
                    </div>
                    <div class="divisionName">Korea</div>
                </div>
            </div>
            <div class="division fade-down">
                <div class="divisionPanel">
                    <div class="divisionLogo ">
                        <img src="http://flags.fmcdn.net/data/flags/w580/gb.png">
                    </div>
                    <div class="divisionName">ITS Debate Society</div>
                </div>
            </div>
            <div class="division fade-down">
                <div class="divisionPanel">
                    <div class="divisionLogo ">
                        <img src="https://www.hastings.edu/sites/default/files/media/Departments/PoliticalScience/Images/model-un_grahpic.png">
                    </div>
                    <div class="divisionName">Model United Nations</div>
                </div>
            </div>
            <div class="division fade-down">
                <div class="divisionPanel">
                    <div class="divisionLogo ">
                        <img src="http://flags.fmcdn.net/data/flags/w580/kr.png">
                    </div>
                    <div class="divisionName">IFLS Culture</div>
                </div>
            </div>
            <div class="division fade-down">
                <div class="divisionPanel">
                    <div class="divisionLogo ">
                        <img src="http://flags.fmcdn.net/data/flags/w580/gb.png">
                    </div>
                    <div class="divisionName">Dueling Cards ITS</div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
<div class="latestPostDiv row">
    <div class="latestPost col-md-9" id="latestPostSlide">
        <div class="latestPostHeader">Latest Post <span class="latestPostNav"><a class="btn latestPostNavLeft fa fa-chevron-left"></a><a class="btn latestPostNavRight fa fa-chevron-right" aria-label="Next"></a></span></div>
   <div class="owl-carousel owl-theme">
        <div class="item"><img src="http://kb4images.com/images/random-image/37670495-random-image.jpg" class="img-fluid" alt="12"><div class="latestPostTitle">Bla Bla Bla</div></div>
        <div class="item"><img src="https://vignette.wikia.nocookie.net/blogclan-2/images/4/45/Random-turtle.gif" class="img-fluid"><div class="latestPostTitle">Digital Image Watermaking Pada Mobile Device</div></div>
        <div class="item"><img src="http://www.qygjxz.com/data/out/193/4094485-random-picture.gif" class="img-fluid"><div class="latestPostTitle">Analisa Struktur Kalimat Bahasa Indonesia dengan Menggunakan Pengurai Kalimat Berbasis Linguistic</div></div>
        <div class="item"><img src="https://www.popville.com/wp-content/uploads/2018/03/dc_neighborhood_news-13.jpg" class="img-fluid"><div class="latestPostTitle">Aplikasi Text To Speech (TTS) Berbahasa Indonesia Sebagai Pembaca SMS</div></div>
        <div class="item"><img src="https://www.funpics86.ru/albums/userpics/10001/abissinskij-kot-plavaet-v-bassejne.jpg" class="img-fluid"><div class="latestPostTitle">Monitoring Ruangan Menggunakan Kamera IP Dengan Bahasa Personal Home Page ( PHP )</div></div>
        <div class="item"><img src="https://blog.teacherspayteachers.com/wp-content/uploads/2016/01/Screen-Shot-2016-01-05-at-11.49.43-AM.png" class="img-fluid"><div class="latestPostTitle">Laporan Kerja Praktek Perangkat Lunak Pengelolaan Data Counter Di V Comm Cell</div></div>
        <div class="item"><img src="http://rkvc.net/wp-content/uploads/2014/01/dog-in-paper-bag-so-many-crazy-things-RKVC.jpg" class="img-fluid"><div class="latestPostTitle">Implementasi Algoritma Enkripsi Rijndael Dalam OpenSSL-0.9.7</div></div>
        <div class="item"><img src="https://avatarfiles.alphacoders.com/949/94919.png" class="img-fluid"><div class="latestPostTitle">Nekopara Nyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa!!!!!!!!!!</div></div>
   </div>     
   </div>
   <div class="col-md-3 sideLatestPost">Hayo ini diisi apa???</div>
      </div>
   </div>
   <div class="container-fluid">
<div class="footer row">
    <div class="col-sm-2 footerGreen" >
    <ul class="socmed">
        <li class='facebook'><a href="https://www.facebook.com/IFLS.ITS/"><img src="assets/images/facebook-black.svg" ></a></li>
        <li class='twitter'><a href="https://twitter.com/ifls_its"><img src="assets/images/twitter-black.svg" ></a></li>
        <li class='youtube'><a href="https://www.youtube.com/channel/UCZQwvpzZhZ7n54D1PtGNcCg"><img src="assets/images/youtube-black.svg" ></a></li>
        <li class='instagram'><a href=" https://www.instagram.com/ifls_its/"><img src="assets/images/instagram-black.svg" ></a></li>
    </ul>
    </div>
     <div class="col-sm-10 footerContent">
        <div class="contactUs">
            <h1>Contact Us</h1>
            <p style="padding-top: 10px">ITS Foreign Language Society<br>SCC ITS 3<sup>rd</sup> Floor<br>Keputih, Mulyorejo, Surabaya City, East Java<br>60115<br>Indonesia</p><p><i class="fa fa-envelope"></i><span style="padding-left: 7px;">foreignlanguageits@gmail.com </span><span style="padding-left: 7px;"><img src="assets/images/line-white.svg" width="15px"> <span style="padding-left: 3px;">@atc9575r</span></span></p> 
        </div>
        <div class="copyright">  Copyright <i class="fa fa-copyright"></i> 2018 ITS Foreign Language Society </div>
        <div class="footerLogo" ><img src="assets/images/ifls-grey.png"></div></div>

</div>
</div>

<div class="toTop">
    <i class="fa fa-chevron-circle-up"></i>
</div>

<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/home.ifls.js"></script>
</body>
</html>