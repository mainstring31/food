
<?php
session_start();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Malvino's Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
    <link href="css/material2.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>
<style>
body {margin:0;}

.parallax{
    /* The image used */
    background-image: url("images/burgerbg.jpg");
    /* Set a specific height */
    min-height: 400px;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    back  ground-size: cover;
}

html{
    height: 100%
}

.navbar {
  background-color: #a82128;
 list-style:none;

 padding:0;
 text-align:center;


}


.navbar li{
    display:inline;
    padding:10px;

  }
.navbar a {
  display:inline-block;
   padding:10px;color: white;
   font-size: 25px;

}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}

header {
background-color: rgba(255,99,71 ,1 );
color: white;
padding-top: 1px;
padding-bottom: 1px;
}
footer {
background-color: red;
padding: 5px;
text-align: center;
color: white;
line-height: 5px;
}


@font-face {
font-family: 'Roboto';
src: url('font/roboto/Roboto-Regular.woff') format('woff');
font-weight: bold;
font-style: normal;
 }


</style>
</head>
<body>

	<!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <div class="parallax"></div>


<div class="navbar">
  <li><a href="home.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
  <li><a href="register.php">Register</a></li>
  <li> <a href="our-menu.htm">Our Menu</a></li>
  <li>  <a href="store-locations.htm">Store Locations</a></li>
  <li>  <a href="delivery.htm">Delivery</a></li>
  <li>  <a href="about-us.htm">About Us</a></li>
</div>



<header style="text-align: center;">
  <h2 style="font-size:75px; line-height: 0;">MALVINO</h2>
  <p style="font-size:25px; color:#a82128; line-height: 0;">Fresh.Huge.Great!</p>
</header>

<div class="main">
  <h1>Fixed Top Menu</h1>
  <h2>Scroll this page to see the effect</h2>
  <h2>The navigation bar will stay at the top of the page while scrolling</h2>

  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
</div>

<div><br><br>
	<footer class="page-footer">
	  <div class="footer-copyright">
	    <div class="container">
	      <span>Copyright © 2018 Malvinos Group  All rights reserved.</span>
	      </div>
	  </div>
	</footer>
</div>




<!-- ================================================
	Scripts
	================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!--plugins.js - Some Specific JS codes for Plugin Settings-->
	<script type="text/javascript" src="js/plugins.min.js"></script>

</body>
</html>
<?php
}
?>
