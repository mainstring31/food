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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


	<!-- CORE CSS-->
	<link href="css/material.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">



  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>
<style>
body{
    /* The image used */
    background-image: url("images/burgerbg.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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

.LoginBox > div {
    margin:0 auto;
    width:325px;
}

footer {
background-color: red;
padding: 5px;
text-align: center;
color: white;
line-height: 5px;
}

</style>
<div>
<article class="navbar">
  <li><a href="home.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
  <li><a href="register.php">Register</a></li>
  <li> <a href="our-menu.htm">Our Menu</a></li>
  <li>  <a href="store-locations.htm">Store Locations</a></li>
  <li>  <a href="delivery.htm">Delivery</a></li>
  <li>  <a href="about-us.htm">About Us</a></li>
</article>
<br><br><br>
</div>
<body>

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="LoginBox">

    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="routers/router.php" class="login-form" id="form">

        <div class="row">
          <div class="input-field col s12 center">
						<h4>MALVINOS</h4>
            <p class="center login-form-text">Login Control</p>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="username" id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>

        <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
          </div>

		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Sign-up Now!</a></p>
          </div>
        </div>

        </div>


      </form>

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
