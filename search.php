<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Search results</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="css/fonts.css" type="text/css" media="all"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">


    <script src="js/jquery.js"></script>
	<script src="search/search.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>


     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/scroll_to_top.js"></script>
     <script src="js/script.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/touchTouch.jquery.js"></script>

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!--button back top-->
  <div id="back-top"></div>    
<div class="main">
  <div class="div-content">    
<!--==============================header=================================-->
    <header>
      <div class="container_12">
        
          <nav>
            <ul class="sf-menu header_menu">
              <li class="first"><a href="index.html"><img src="images/home_icon.png" alt=""><span class="menu_first_txt">Home</span><strong></strong></a></li>
              <li><a href="index-1.html"><span></span>About<strong></strong></a>
                <ul class='submenu'>
                  <li class='sub-menu'><a href="#">News</a>
                    <ul class='submenu2'>
                      <li><a href="#">Fresh</a></li>
                      <li><a href="#">Our Blogs</a></li>
                      <li><a href="#">Testimonials</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </li>

              <li><a href="index-2.html">Featured<strong></strong></a></li>
              <li><a href="index-3.html">News<strong></strong></a></li>
              <li><a href="index-4.html">Gallery<strong></strong></a></li>
              <li class="last-li"><a href="index-5.html">Contacts<strong></strong></a></li>
            </ul>
          </nav>

          <div class="social">
            <a href="#"><img src="images/soc_1.png" alt=""></a>
            <a href="#"><img src="images/soc_2.png" alt=""></a>
            <a href="#"><img src="images/soc_3.png" alt=""></a>
          </div>
          <div class="clear"></div>
        
      </div>
    </header>
    
    <div class="container_12">
      <div class="grid_12">
        <div class="wrapper">
          <h1><a href="index.html"><img src="images/logo.png" alt="Sports"></a></h1>
          <div class="fright">
            <div class="box-1">
              <p>Search</p>
              <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                <input type="text" name="s" value="" onfocus="myFocus(this);" onblur="myBlur(this);"/>
                <a onclick="document.getElementById('search').submit()"></a>
               </form>
               <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container_12">
      <div class="grid_12">
        <div class="box-2 v2 gradient_1">
          <ul class="header_list">
            <li><a href="#">NFL<span class="over_line"></span></a></li>
            <li><a href="#">MLB<span class="over_line"></span></a></li>
            <li><a href="#">NBA<span class="over_line"></span></a></li>
            <li><a href="#">NHL<span class="over_line"></span></a></li>
            <li><a href="#">NCAA FB<span class="over_line"></span></a></li>
            <li><a href="#">NCAA BB<span class="over_line"></span></a></li>
            <li class="last"><a href="#">NASCAR<span class="over_line"></span></a></li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
    </div>
	
        <div class="container_12">
            <div class="grid_12">
            
              <div class="box-3">
                <div class="gradient_1"><h2>Search result:</h2></div>
                <div class="box-3_pad">
                  <div id="search-results"></div>
                </div>
              </div>

                
            </div>
        </div>





<!--=======footer=================================-->
        <footer>
          <div class="main-footer">
          <div class="container_12">
            <div class="grid_12">
            
              <div class="box-4">
                <nav>
                  <ul class="sf-menu">
                    <li class="first"><a href="index.html"><img src="images/home_icon.png" alt=""><strong></strong></a></li>
                    <li><a href="index-1.html"><span></span>About<strong></strong></a></li>
                    <li><a href="index-2.html">Featured<strong></strong></a></li>
                    <li><a href="index-3.html">News<strong></strong></a></li>
                    <li><a href="index-4.html">Gallery<strong></strong></a></li>
                    <li class="last-li"><a href="index-5.html">Contacts<strong></strong></a></li>
                  </ul>
                </nav>
                <div class="clear"></div>
                <div class="hline3">
                  <p><span class="color5">Sports</span> &copy; 2013 <a href="index-6.html">Privacy Policy</a></p>
                </div>
              </div>
              
            </div>
          </div>
          </div>
        </footer>

    </div>
  </div>
<script type="text/javascript">
 
    function myFocus(element){
           if (element.value == element.defaultValue){
               element.focus();
               element.value = '';
           }
        }
        function myBlur(element){
           if (element.value == ''){
               element.blur();
               element.value = element.defaultValue;
           }
        }
</script>					
</body>
</html>