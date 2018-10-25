

<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Malvino's Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css"></link>
  <style>

  nav{
    overflow: hidden;
    background-color: #333;
    position:fixed;
    top: 0;
    width: 100%;
  }
  nav a{
    float: left;
    display: block;
    margin: 0 1.0em;
    color: #f2f2f2;
    text-align: center;
    padding: 5px 5px;
    text-decoration: none;
    font-size: 15px;
  }
  nav a:hover {
    background-color: #ddd;
    color: black;
  }
  nav a.active {
    background-color: #4CAF50;
    color: white;
  }
  /* Style the list inside the menu */
      nav ul {
      list-style-type: none;
      padding: 0;
    width: 1200px;
    margin: 0 auto;
  }
  li {
      display: inline;
    }

body{
    font-family: Arial, Helvetica, sans-serif;
    background: url(img/burgerbg.jpg);
    background-repeat: no-repeat;
    background-position: center center;
     background-attachment: fixed;
    background-size: 100% 100%;


}
html {
    height: 100%
}

.loginbox{
    width: 581px;
    height: 620px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 30px 30px;
}



h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: auto;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}

footer {
  position: fixed;
    bottom: 0;
    width: 100%;
background-color: red;
padding: 5px;
text-align: center;
color: white;
line-height: 5px;
}

.regform{
  width: 530px;
  height: 540px;
  border-radius: 4px;
  margin:0 auto;
  margin-top: 5px;

}

.div1,.div2,.div3 {
    padding-top: 3px;
    display: inline-block;
    vertical-align: top;
}

.div4,.div5 {
    padding-top: 3px;
    display: inline-block;

    float: right;
}




}
</style>
<script>

function validate(){

            var a = document.getElementById("email1").value;
            var b = document.getElementById("email2").value;
            var c = document.getElementById("phoneCode1").value;
            var d = document.getElementById("phoneCode2").value;
            var e = document.getElementById("phone1").value;
            var f = document.getElementById("phone2").value;
            var g = document.getElementById("pass1").value;
            var h = document.getElementById("pass2").value;
            var i = document.getElementById("answer1").value;
            var j = document.getElementById("answer2").value;



            if (a!=b) {
               alert("Email does not match");
               return false;
            }else if (c!=d){
              alert("Phone code does not match");
              return false;
            }else if (e!=f){
              alert("Phone number not match");
              return false;
            }else if (g!=h){
              alert("Password does not match");
              return false;
            }else if (i!=j){
              alert("Secret asnwer does not match");
              return false;
            }else{
            }
          }
</script>






</head>
<body>

  <div class="loginbox">

      <h1>Register Here</h1>
      <form action="insert.php" method = "post" onSubmit="return validate();" >
        <div class="regform">
        <div class="div1">
          <p>Given Name</p>
          <input type="text" name="givenname" autocomplete="off" required placeholder="Required field">
          <p>Middle Name</p>
          <input type="text" name="middlename" autocomplete="off" required placeholder="Required field">
          <p>Last Name</p>
          <input type="text" name="lastname" autocomplete="off" required placeholder="Required field">
          <br>
            <p style="padding-left: 0px; padding-top:5px;padding-bottom:15px;">Gender:<br>
              <select name="gender" size="2" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

              </select>
            </p>


            <p style="padding-left: 0px; padding-top:5px; padding-bottom:15px;">Marital Status:<br>
              <select name="status" size="3" required >
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Separated">Separated</option>
              </select>
            </p>


            <p>Email</p>
            <input type="email" name="email1" id=email1 autocomplete="off" required placeholder="Required field">


        </div>

        <div class="div2">
          <p>Home Number</p>
          <input type="text" name="housenumber" autocomplete="off" required placeholder="Required field">
          <!--pattern="[A-Za-z]{1,15}" title="Input House Number only in words (no spaces) example SixteenC (16-C) or BlkThirtyOneLotThree (Blk 31 Lot 3)-->
          <p>Street</p>
          <input type="text" name="street" autocomplete="off" required placeholder="Required field">
          <p>Barangay</p>
          <input type="text" name="barangay" autocomplete="off" required placeholder="Required field">
          <p style="padding-left: 0px; padding-top:5px; padding-bottom:15px;">City:<br>
            <select name="city" style="width: 145px; height:25px"  required>
              <option selected hidden value="">Please select a city</option>
              <option value="caloocan";>Caloocan</option>
              <option value="laspinas">Las Piñas</option>
              <option value="makati">Makati</option>
              <option value="malabon">Malabon</option>
              <option value="mandaluyong">Mandaluyong</option>
              <option value="manila">Manila</option>
              <option value="marikina">Marikina</option>
              <option value="muntinlupa">Muntinlupa</option>
              <option value="navotas">Navotas</option>
              <option value="paranaque">Parañaque</option>
              <option value="pasay">Pasay</option>
              <option value="pasig">Pasig</option>
              <option value="pateros">Pateros</option>
              <option value="quezon">Quezon</option>
              <option value="san juan">San Juan</option>
              <option value="taguig">Taguig</option>
              <option value="valenzuela">Valenzuela</option>
            </select>


            <p>Phone Number:</p>
            <select name="phoneCode1" id="phoneCode1" style="width: 65px; height:25px"  required >
              <option selected hidden value="">Select</option>
              <option value="977">977</option>
              <option value="978">978</option>
              <option value="979">979</option>
              <option value="973">973</option>
              <option value="972">972</option>
              <option value="974">974</option>
            </select>
            <input type="number" name="phone1" id="phone1" autocomplete="off"  required placeholder="Required field" style="width: 75px; height:25px"required>
            <p>Confirm Phone:</p>
            <select name="phoneCode2" id="phoneCode2" style="width: 65px; height:25px"  required >
              <option selected hidden value="">Select</option>
              <option value="977">977</option>
              <option value="978">978</option>
              <option value="979">979</option>
              <option value="973">973</option>
              <option value="972">972</option>
              <option value="974">974</option>
            </select>

            <input type="number" name="phone2" id="phone2" autocomplete="off"  required placeholder="Required field" style="width: 75px; height:25px"required>








            <p>Confirm Email</p>
            <input type="email" name="email2" id="email2" autocomplete="off" required placeholder="Required field">



        					</div>
        <!-------------------------->
        									<div class="div3">
                            <p>Username</p>
                            <input type="text" name="user" autocomplete="off" required placeholder="Required field" required>
                            <p>Password</p>
                            <input type="password" name="pass1" id="pass1" autocomplete="off" required placeholder="Required field" required>
                            <p>Confirm Password</p>
                            <input type="password" name="pass2" id="pass2" autocomplete="off" required placeholder="Required field" required>


                            <p style="padding-left: 0px; padding-top:5px; padding-bottom:15px;">Secret Question:<br>
        											<select name="question" style="width: 145px; height:25px"  required>
                                <option value="";>Please select a question</option>
        												<option value="favaunt";>Who is your favorite aunt's name?</option>
        												<option value="favuncle">Who is your favorite uncle?</option>
        												<option value="firstpet">What is your first pet?</option>
        												<option value="favfruit">What is your favorite fruit?</option>
        												<option value="nickname">What is your real-life nickname?</option>
        												<option value="enickname">What is your online nickname?</option>
        												<option value="firstdog">What is the name of your first dog?</option>
        												<option value="firstcat">What is the name of your first cat?</option>
        											</select>
                              <p>Secret Answer</p>
                              <input type="text" name="answer1" id="answer1" autocomplete="off" required placeholder="Required field" required>
                              <p>Confirm Secret Answer</p>
                              <input type="text" name="answer2" id="answer2" autocomplete="off" required placeholder="Required field" required>



        										</div>

                            <div class="div4">
        										<div align="right">
        											<input type="Submit" value=" Submit " name="" >
        										</div>

                          </div>
                          <div class="div5">
                          <div align="right">
                            <input type="Submit" value="  Back  " name="" onclick="history.back(-1)">

                          </div>
                        </div>






















      </form>
</div>
  </div>

<section>
  <nav>
    <ul class="navbar">
      <li><a href="login.php" style="font-size:1.75vw">Login</a></li>
      <li><a href="register.php" style="font-size:1.75vw">Register</a></li>
      <li><a href="our-menu.htm" style="font-size:1.75vw">Our Menu</a></li>
      <li><a href="store-locations.htm" style="font-size:1.75vw">Store Locations</a></li>
      <li><a href="delivery.htm" style="font-size:1.75vw">Delivery</a></li>
      <li><a href="about-us.htm" style="font-size:1.75vw">About Us</a></li>
    </ul>
  </nav>
</section>



</body>
</html>
