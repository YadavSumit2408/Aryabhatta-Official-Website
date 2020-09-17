<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta name="description" content>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>IEEE R10</title>
  <link rel="shortcut icon" type="image/png" href="IEEE Activities/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href='https://fonts.googleapis.com/css?family=Basic' rel='stylesheet'>
  <!--<link rel="stylesheet" type="text/css" href="index.css">-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
#navbar-navigation{
  background-color: black;
}
.navbar-toggler {
    border-color:   rgb(47,79,79);
}
.navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(9,55,244, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
.navbar-nav #flex ul li a{
  color: #FFFFFF;
}
.navbar-brand a{
  text-decoration: none;
  font-size-adjust: 12%;
}
nav{
  background-color: #4682B4;
}
#navbar{
  box-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
  z-index: 5000;
}
.navbar-brand a{
  color: #FFFFFF;
  font-family: "Lato",sans-serif; 
  font-size: 1.5em; /*Verdana, Helvetica, sans-serif;*/
}
.navbar-nav .nav-item .nav-link{
  text-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
  color: #FFFFFF;
  transition-delay: 2ms;
  transition: 1s;
}
.navbar-nav .nav-item:hover .nav-link{
  text-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
  box-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
  color: #FFFFFF;
  transition: 1s;
}
.nav-item:hover .dropdown-menu{
  display: block;
  box-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
  transition: 1s;
}

.carousel-inner{
  background-color: #FFFFFF;
  width:100%;
  height: 50%;
  border-radius: 4px;
}
.carousel-caption{
  color: black;
}

.headingChange{
     font-size: 200%; 
     font-weight: 500;
}
 .content {
  margin-left: 5%;
  text-justify: inter-word;
  font-size: 90%;
}


.changesizeImg{
  width: : 60%;
  height: 60%;
}

#footer {
    background: #007b5e !important;
}
#footer h5{
    padding-left: 10px;
    border-left: 3px solid #eeeeee;
    margin-top: 2%;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}
#footer ul.social li a i {
  margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  font-weight:700;
  margin-left:5px;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: transparent;
}

/* Slides */
.mySlides {
  display: none;
  align-items: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: transparent;
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    background: transparent;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}
/* Add an italic font style to all quotes */
#flex li a{
  margin-left: 1rem;
}
q {font-style: italic;}

/* Add a blue color to the author */

.list-unstyled li{
  color: #ffffff;
}
.fas, .fab, {
  font-size: 24px;
}
#topspace .col-sm-6, .col-sm-4{
  margin-top: 4%;
}
#differ img{
  margin-top: 6%;
  opacity: .5;
  filter: alpha(opacity=50);
}
#differ img:hover{
  opacity: 1;
  filter: alpha(opacity=100);
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.stikcy + .navbar{
	padding-top: 60px;
}

  </style>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="60" style="font-family: Basic;">
			<!-- header start-->
<div id="navbar-navigation" class="navbar navbar-expand-lg navbar-fixed-top justify-content-between">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-one" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown-one"> 
        <ul class="navbar-nav">
          <li class="nav-item" id="1"><a class="nav-link" href="http://www.ieee.org/index.html">IEEE</a></li>
          <li class="nav-item" id="2"><a class="nav-link" href="https://www.ieee.org/Loginforms/myIEEE/login.html">My IEEE</a></li>
          <li class="nav-item" id="3"><a class="nav-link" href="http://www.ieeeup.org/">IEEE Uttar Pradesh Section</a></li>
          <li class="nav-item" id="4"><a class="nav-link" href="http://www.ieeer10.org/">IEEE Region10</a></li>
          <li class="nav-item" id="5"><a class="nav-link" href="http://ieeexplore.ieee.org/Xplore/home.jsp">IEEE Xplore Digital Library</a></li>
          <li class="nav-item" id="one"><a class="nav-link" href="http://spectrum.ieee.org/">IEEE Spectrum</a></li>
          <li class="nav-item" id="onew"><a class="nav-link" href="http://standards.ieee.org/">IEEE Standards</a></li>
          <li class="nav-item" id="oneww"><a class="nav-link" href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap">More Sites</a></li>
      </ul>
    </div>
  </div>
</div>
      <!--header ends-->
     <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="IEEE Activities/iEEE-logo1.png" class="img_1" width="60%" height="90%">
        </div>
           <div class="col-4" align="center"  id="social-icons" style="list-style: none;margin-top: 4%;">
            <div class="d-inline-flex" >
          <li>
            <a class="social" href="https://www.facebook.com/IEEEStudents/" data-toggle="tooltip" data-placement="auto" title="facebook">
            <img width="50" height="36" src="social-icons/facebookcolor.svg"></a>
          </li>
          <li>
            <a class="social" href="#" data-toggle="tooltip" data-placement="auto" title="instagram">
            <img width="50" height="36" src="social-icons/instagram.svg"></a>
          </li>
          <li>
            <a class="social" href="#" data-toggle="tooltip" data-placement="auto" title="google-plus">
            <img width="50" height="36" src="social-icons/google-plus.svg"></a>
          </li>
            </div> 
           </div>
        </div>
      </div>
      <!-- Navbar start-->	
<nav id="navbar" class="navbar navbar-expand-lg navbar-light navbar-fixed-top justify-content-between">
    <div class="container">
        <li class="navbar-brand">
        	<a href="http://www.ieee.org/index.html">
        	IEEE
            </a>
        </li>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">  
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                    HOME
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#">
                    ABOUT
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="About IEEE.php">About IEEE</a>
                        <a class="dropdown-item" href="About IEEER10.php">IEEE Region10</a>
                        <a class="dropdown-item" href="About IEEEUP.php">IEEE UP Section</a>
                        <a class="dropdown-item" href="About IEEEPSIT.php">IEEE PSIT Student Branch</a>
                    </div>
                </li>
                <li  class="nav-item dropdown">
                    <a class="nav-link dropdown"  href="#">
                    CHAPTERS & AFFINITY GROUPS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="WIE.php">Women in Engineering</a>
                        <a class="dropdown-item" href="IAS.php">Industry Application Society</a>
                        <a class="dropdown-item" href="CS.php">Computational Intelligence Society</a>
                    </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#">
                    EVENTS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Event.php">Our Events</a>
                        <a class="dropdown-item" href="Gallery.php">Gallery</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#">
                    ARTICLES
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Articles.php">Trending Articles</a>
                        <a class="dropdown-item" href="Technology.php">Enhancing Technology</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style="width: 6.5rem">
                    <a class="nav-link dropdown" href="#">
                    OUR TEAM
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="Mentorsnew.php">Mentors</a>
                        <a class="dropdown-item" href="Team.php">Exexutive Committee</a>
                        <a class="dropdown-item" href="Activemember.php">Active Members</a>
                        <a class="dropdown-item" href="WIECommitte.php">WIE Committee</a>
                        <a class="dropdown-item" href="IASCommittee.php">IAS Committee</a>
                    </div>
                </li>
                <li class="nav-item" style="width: 8rem">
                	<a class="nav-link navi" href="Contact.php">
                	CONTACT US
                    </a>
                </li>
                <li class="nav-item" >
                	<a class="nav-link navi1" href="https://www.ieee.org/membership/join/index.html?WT.mc_id=hc_join">
                	JOIN IEEE
                    </a>
                    </li>
            </ul>
        </div>
    </div>
</nav>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>