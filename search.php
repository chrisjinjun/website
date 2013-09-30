<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">    
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>	

<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
  <![endif]-->
</head>

<body>
  <!--============================== header =================================-->
<header>
  <div class="container">
    <div class="navbar navbar_ clearfix extra">
      <h1 class="brand"><a href="index.html"><img alt="M4" src="img/logo.gif"></a></h1>
      <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
        <div class="clearfix">
          <input type="text" onFocus="if(this.value =='Search' ) this.value=''" onBlur="if(this.value=='') this.value='Search'" value="Search" name="s">
          <a href="#" onClick="document.getElementById('search').submit()" ></a> </div>
      </form>
      <div class="nav-collapse nav-collapse_  collapse">
        <ul class="nav sf-menu">
          <li><a href="index.html">About us</a></li>
          <li><a href="index-1.html">Services</a>
            <ul>
              <li><a href="#">Small business <span>Custom Trainings</span></a></li>
              <li><a href="#">Modern tools <span>On-Demand Administration</span></a>
                <ul>
                  <li><a href="#">Software <span>Applying technologies</span></a></li>
                  <li><a href="#">Technology <span>Linking Employees &amp; Strategy</span></a></li>
                  <li><a href="#">FAQ <span>Feedback &amp; Appraisals</span></a></li>
                </ul>
              </li>
              <li><a href="#">Case studies <span>Integration and Consulting</span></a></li>
            </ul>
          </li>
          <li><a href="index-2.html">Products</a></li>
          <li><a href="index-3.html">Contacts</a></li>
          <li><a href="index-4.html">Blog</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--============================== content =================================-->
<section id="content">
  <div class="container">
    <div class="row">
    	<div class="span12">           
             <h3>Search result:</h3>
            <div id="search-results"></div>
		</div>       
   </div>
  </div>
</section>

<!--============================== footer =================================-->
<footer>
  <div class="container clearfix">
    <div class="privacy">Consectetur industrial theme &copy; 2013 <a href="index-5.html">Privacy policy</a></div>
    <img src="img/logo-footer.png" alt="" class="logo-footer"/> </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>