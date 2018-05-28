
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search - ITS Foreign Language Society</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
<link rel="shortcut icon" href="http://ifls.lmb.its.ac.id/images/favicon-ifls.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
<style type="text/css">
  .searchResult{
    background-color: #EBEDEF;
    border-left: 5px solid #3DBE24;
    padding: 1rem;
    margin: 20px;
  }

  .searchResult a{
    color: #3DBE24;
    text-decoration: none;
  }

  .searchResult a:hover{
    color: #30971c;
  }
</style>
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
                    <form action="/localhost/laravel_ifls/public_html/cari" autocomplete="on">
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
   <div class="container-fluid">
    <br>
      <h1>Search Result : Welcome to IFLS</h1>
      <br>
      <div class="container">
         <div class="searchResult">
           <h3><a href="article/100001">Welcome to IFLS</a></h3>
           Lorem ipsum dolor sit amet, pri ad ferri posse, ea quo dolore placerat. Sint libris omittam sea et, affert ullamcorper philosophia eum id, id eos quas mentitum. Ea elit mundi adipiscing pri. Cu eos mutat quaeque scriptorem. Pro cu...
         </div>
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