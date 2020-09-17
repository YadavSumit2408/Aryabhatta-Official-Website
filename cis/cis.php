
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="description" content>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>IEEE PSIT STB</title>
    <link rel="shortcut icon" type="image/png" href="IEEE Activities/favicon.png">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css?family=Basic' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
    #navbar-navigation {
        background-color: black;
    }

    .navbar-toggler {
        border-color: rgb(47, 79, 79);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(9,55,244, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .navbar-nav #flex ul li a {
        color: #FFFFFF;
    }

    .navbar-brand a {
        text-decoration: none;
        font-size-adjust: 12%;
    }

    nav {
        background-color: #4682B4;
    }

    #navbar {
        box-shadow: 10px 10px 40px black, 5px 10px 20px grey, 0 0 2px grey;
        z-index: 5000;
    }

    .navbar-brand a {
        color: #FFFFFF;
        font-family: "Lato", sans-serif;
        font-size: 1.5em;
        /*Verdana, Helvetica, sans-serif;*/
    }

    .navbar-nav .nav-item .nav-link {
        text-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
        color: #FFFFFF;
        transition-delay: 2ms;
        transition: 1s;
    }

    .navbar-nav .nav-item:hover .nav-link {
        text-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
        box-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
        color: #FFFFFF;
        transition: 1s;
    }

    .nav-item:hover .dropdown-menu {
        display: block;
        box-shadow: 12px 12px 44px black, 5px 10px 25px grey, 0 0 5px grey;
        transition: 1s;
    }

    .carousel-inner {
        background-color: #FFFFFF;
        width: 100%;
        height: 50%;
        border-radius: 4px;
    }

    .carousel-caption {
        color: black;
    }

    .headingChange {
        font-size: 200%;
        font-weight: 500;
    }

    .content {
        margin-left: 5%;
        text-justify: inter-word;
        font-size: 90%;
    }


    .changesizeImg {
        width: : 60%;
        height: 60%;
    }

    #footer {
        background: #007b5e !important;
    }

    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        margin-top: 2%;
        color: #ffffff;
    }

    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    #footer ul.social li {
        padding: 3px 0;
    }

    #footer ul.social li a i {
        margin-right: 5px;
        font-size: 25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
        font-size: 30px;
        margin-top: -10px;
    }

    #footer ul.social li a,
    #footer ul.quick-links li a {
        color: #ffffff;
    }

    #footer ul.social li a:hover {
        color: #eeeeee;
    }

    #footer ul.quick-links li {
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.quick-links li:hover {
        padding: 3px 0;
        font-weight: 700;
        margin-left: 5px;
    }

    #footer ul.quick-links li a i {
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
    .prev,
    .next {
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
    .prev:hover,
    .next:hover {
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
    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Add an italic font style to all quotes */
    #flex li a {
        margin-left: 1rem;
    }

    q {
        font-style: italic;
    }

    /* Add a blue color to the author */

    .list-unstyled li {
        color: #ffffff;
    }

    .fas,
    .fab,
        {
        font-size: 24px;
    }

    #topspace .col-sm-6,
    .col-sm-4 {
        margin-top: 4%;
    }

    #differ img {
        margin-top: 6%;
        opacity: .5;
        filter: alpha(opacity=50);
    }

    #differ img:hover {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .stikcy+.navbar {
        padding-top: 60px;
    }
	.centre_content { 
	position: relative;
	margin-top: 2%;
	width: 100%;
	height: auto;
	}

.column_one { text-align: left; padding-left: 50px; padding-right: 20px;  }

.column_one span { 
	padding-top: 5px;
	padding-bottom: 5px;
	font-family: 'Roboto Slab', Helvetica, sans-serif, Arial;
	font-size: 16pt;
	font-weight: 400;
	display: inline;
	line-height: 33pt;
	color: #fff;
	box-decoration-break: clone;
	box-shadow: 10px 0 0 rgba(30,115,155,0.8), -10px 0 0 rgba(30,115,155,0.8);
	background-color: rgba(30,115,155,0.8);
	}

.column_two { height: auto; vertical-align: middle; }
.carousel-inner img {
width: 100%;
height: 100%;}
.body_text { 
	font-family: 'Roboto Slab', Helvetica, sans-serif;
	font-size: 10pt;
	font-weight: 400;
	color: #000;
	text-align: left;
	line-height: 16pt;
}

.body_text a:hover { color:#1d719a; text-decoration: underline; }

.body_text a { color:#1d719a; text-decoration: none; }
    </style>
</head>

<body data-spy="scroll" data-target="navbar" data-offset="60" style="font-family: Basic;">
    <!-- header start-->
    <div id="navbar-navigation" class="navbar navbar-expand-lg navbar-fixed-top justify-content-between">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-one"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown-one">
                <ul class="navbar-nav">
                    <li class="nav-item" id="1"><a class="nav-link" href="http://www.ieee.org/index.html">IEEE</a></li>
                    <li class="nav-item" id="2"><a class="nav-link"
                            href="https://www.ieee.org/Loginforms/myIEEE/login.html">My IEEE</a></li>
                    <li class="nav-item" id="3"><a class="nav-link" href="http://www.ieeeup.org/">IEEE Uttar Pradesh
                            Section</a></li>
                    <li class="nav-item" id="4"><a class="nav-link" href="http://www.ieeer10.org/">IEEE Region10</a>
                    </li>
                    <li class="nav-item" id="5"><a class="nav-link"
                            href="http://ieeexplore.ieee.org/Xplore/home.jsp">IEEE Xplore Digital Library</a></li>
                    <li class="nav-item" id="one"><a class="nav-link" href="http://spectrum.ieee.org/">IEEE Spectrum</a>
                    </li>
                    <li class="nav-item" id="onew"><a class="nav-link" href="http://standards.ieee.org/">IEEE
                            Standards</a></li>
                    <li class="nav-item" id="oneww"><a class="nav-link"
                            href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap">More Sites</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--header ends-->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="index.php"><img src="IEEE Activities/iEEE-logo.png" class="img_1" width="60%" height="90%">
                </a>
            </div>
            <div class="col-4" align="center" id="social-icons" style="list-style: none;margin:auto;">
                <div class="d-inline-flex">
                    <li>
                        <a class="social" href="https://www.facebook.com/IEEEStudents/" data-toggle="tooltip"
                            data-placement="auto" title="facebook">
                            <img width="50" height="36" src="social-icons/facebookcolor.svg"></a>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="dropdown-item" href="About PSIT.php">About PSIT</a>
                            <a class="dropdown-item" href="About IEEEPSIT.php">IEEE PSIT Student Branch</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#">
                            CHAPTERS & AFFINITY GROUPS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="WIE.php">Women in Engineering</a>
                            <a class="dropdown-item" href="IAS.php">Industry Application Society</a>
                            <a class="dropdown-item" href="cis.php">Computational Intelligence Society</a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#">
                            OUR TEAM
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="Mentorsnew.php">Mentors</a>
                            <a class="dropdown-item" href="Team.php">Executive Committee</a>
                            <a class="dropdown-item" href="WIECommitte.php">WIE Committee</a>
                            <a class="dropdown-item" href="IASCommittee.php">IAS Committee</a>
                            <a class="dropdown-item" href="Activemember.php">Active Members</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navi" href="Contact.php">
                            CONTACT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navi1"
                            href="https://www.ieee.org/membership/join/index.html?WT.mc_id=hc_join">
                            JOIN IEEE
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

</style>
 <link href='https://fonts.googleapis.com/css?family=Basic' rel='stylesheet'>


<div class="container-fluid">
  <img src="IEEE Activities/CISLOGO.jpg" class="about  mx-auto d-block changesizeImg">
    <div class="text-capitalize">
      <ol class="breadcrumb no-border-radius">
        <li class="single"><a href="index.php" class="color-grey"><i class="fa fa-home"></i>Home</a></li>
        <li class="">/CHAPTERS & AFFINITY GROUPS</li>
        <li class="">/Computational Intelligence Society</li>
      </ol>
    </div>
</div>



<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>About</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
      <p class="content">Computational Intelligence (CI) is the theory, design, application and development of biologically and linguistically motivated computational paradigms. Traditionally the three main pillars of CI have been Neural Networks, Fuzzy Systems and Evolutionary Computation. However, in time many nature inspired computing paradigms have evolved. Thus CI is an evolving field and at present in addition to the three main constituents, it encompasses computing paradigms like ambient intelligence, artificial life, cultural learning, artificial endocrine networks, social reasoning, and artificial hormone networks.</p>
      <p class="content">CI plays a major role in developing successful intelligent systems, including games and cognitive developmental systems. Over the last few years there has been an explosion of research on Deep Learning, in particular deep convolutional neural networks. Nowadays, deep learning has become the core method for artificial intelligence. In fact, some of the most successful AI systems are based on CI.</p>
      <a href="https://cis.ieee.org/about" style="text-decoration: none;"> <h5>Learn more about CIS<i class="fas fa-external-link-alt" style="font-size:24px;"></i></h5></a>
      </div>
</div>
</div>

<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>Mission & Vision Statement</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
      <p class="content">
        <div class="content">
        <li>
         Advancing nature-inspired computational paradigms in science and engineering.
        </li>
        <li>
         Be the international leader in innovative interdisciplinary research, technology transfer, real-world
         applications, and education in Computational Intelligence.
        </li>
      </div>
      </p>
  </div>
</div> 
</div>
<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>Field of Interest</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
    <p class="content">
      The Field of Interest of the Computational Intelligence Society (CIS) shall be the theory, design,
      application, and development of biologically and linguistically motivated computational paradigms
      emphasizing neural networks, connectionist systems, genetic algorithms, evolutionary programming,
      fuzzy systems, and hybrid intelligent systems in which these paradigms are contained.
    </p>
  </div>
</div>
</div>
<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>Publications Under CIS</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
   <p class="content">
    <div class="content">
    <li>
      <strong>IEEE Computational Intelligence Magazine</strong> - publishes research and general interest articles covering the entire scope of CIS.
    </li>
  </div>
  <div class="content">
  <h5>Three Main Transactions under CIS are:</h5>
  <ul>
    <li><p class="text-primary">
      IEEE Transactions on Neural Networks and Learning Systems</p>
    </li>
    <li><p class="text-primary">
      IEEE Transactions on Evolutionary Computation</p>
    </li>
    <li><p class="text-primary">
      IEEE Transactions on Fuzzy Systems</p>
    </li>
  </ul>
  <h5>Other Publications under CIS:</h5>
  <ul>
    <li>
      IEEE Transactions on Emerging Topics in Computational Intelligence
    </li>
    <li>
      IEEE Transactions on Cognitive and Developmental Systems
    </li>
    <li>
      IEEE Transactions on Games
    </li>
    <li>
      IEEE Press Book Series
    </li>
    <li>
      Other Co-Sponsored Journals
    </li>
  </ul>
</div>
   </p>
  </div>
</div>
</div>
<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>Conference organised by CIS</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
   <p class="content">
    The IEEE CIS organizes several conferences every year. The main conferences where the Society
    is a financial sponsor are listed below. The Society also is a technical sponsor of many conferences.
    The Society organizes other events such as Competitions, Tech Challenges, Summer
    Schools, Webinars, and Distinguished Lecturers. For more information please visit the conferences
    & eventswebpage.
   </p>
   <p class="content">
    <div class="content">
  <h5>Conferences</h5>
  <ul>
    <li>
      IEEE World Congress on Computational Intelligence* (WCCI)
    </li>
    <li>
      IEEE Symposium Series on Computational Intelligence (SSCI)
    </li>
    <li>
     International Joint Conference on Neural Networks** (IJCNN)
    </li>
    <li>
      IEEE Congress on Evolutionary Computation (CEC)
    </li>
    <li>
      IEEE International Conference on Fuzzy Systems (FUZZ-IEEE)
    </li>
    <li>
      IEEE Conference on Computational Intelligence and Games (CIG)
    </li>
    <li>
      IEEE International Conference on Data Science and Advanced Analytics (DSAA)
    </li>
    <li>
      IEEE Conference on Evolving and Adaptive Intelligent Systems (EAIS)
    </li>
    <li>
      IEEE Conference on Computational Intelligence in Bioinformatics and Computational Biology
(CIBCB)
    </li>
    <li>
      IEEE International Conference on Computational Intelligence and Virtual Environments for
Measurement Systems and Applications (CIVEMSA)
    </li>
    <li>
      Joint IEEE International Conference on Development and Learning and Epigenetic Robotics (ICDLEpiRob)
    </li>
    <li>
      IEEE Latin American Conference on Computational Intelligence (LA-CCI)
    </li>
    <li style="list-style: none;">
      *Note: WCCI is organized on even numbered years
      **Note: IJCNN is jointly organized by IEEE CIS and the International Neural Networks Society
    </li>
  </ul>
</div>
   </p>
  </div>
</div>
</div>
<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>PSIT Student Branch</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
    <p class="content">
      CIS has a variety of programs which include: social activities held within CIS-sponsored conferences, a
      webinar series, summer research grants for students, job opportunities, a Distinguished Lecturers
      Program that allows local CIS chapters to have lectures from world class computational intelligence
      researchers, as well as travel grants to present papers at CIS-sponsored conferences
    </p>
  </div>
</div>
</div>
<div class="p-5 container-fluid">
  <div class="row">
  <div class="col" style="background: transparent ">
      <div class="heading-block text-left">
          <h1 class="headingChange"><u>Student Activity</u></h1>
        </div>
      </div>
    </div>
      <div class="row">
    <div class="col">
      <div class="content">
    <h3>Shivam Tripathi</h3>
  </div>
    <p class="content">
    During the winters, I,Shivam Tripathi, did a research internship under the guidance of Prof. Nikhil R. Pal (President of CIS-IEEE). The research work focused on Manifold Learning for Data Visualization. During the period of two months I implemented a couple of data visualization algorithms and tried to improve upon them. Moreover, I worked on autoencoder, a type of neural network, to solve the similar problem. In future, we hope to publish a paper on the same.
    </p>
    <p class="content"><a href="CIS Intern/CIS Research Intern.pdf" target="_blank">View PDF1</a></p>
	<p class="content"><a href="CIS Intern/Shivam letter-2.pdf" target="_blank">View PDF2</a></p>
  </div>
</div>
</div>
<br>
 <section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-sm-4">
                <h5>ABOUT US</h5>
                <ul class="list-unstyled">
                    <li>IEEE Pranveer Singh Institute of Technology (PSIT) Student Branch was established in Kanpur,
                        INDIA and is registered under the Institute of Electrical and Electronics Engineers (IEEE) in
                        Piscataway, New Jersey, USA.</li>
                    <li><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Kanpur - Agra - Delhi National Highway - 2 ,
                        Bhauti, Kanpur, Uttar Pradesh 209305, INDIA</li>
                    <li><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;+91-7905573494</li>
                    <li><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;ieeepsit@gmail.com</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>RECENT ACTIVITIES</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/IEEEPsit/"><i
                                class="fab fa-facebook-f"></i>&nbsp;&nbsp;Connect @ facebook</a></li>
                </ul>
            </div>
            <div class="col-sm-4" style="margin: auto">
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><img src="IEEE Activities/f.png" class="img_2" width="100%"
                                height="100%"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/IEEEPsit/"><i
                                class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <p class="h6">All rights Reversed.<a class="text-green ml-2" href="" target="_blank">IEEESTBPSIT</a></p>
            </div>
        </div>
    </div>
</section>

<!--Footer Ends-->

<script>
window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.0.min.js"><\/script>');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!--jquery scripts starts-->
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
<!--simple text carousel-->
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>
<!-- ENd of carousel-->
<!--<script type="text/javascript">
      $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
    -->
</body>
</html>