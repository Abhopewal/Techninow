<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'admin/_dbconnect.php';
  $username = $_POST['username'];
  $Password = sha1($_POST['Password']);
  $sql = "select u_id,Username,Password from user_reg where Username='$username' && Password='$Password' ";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($result);
  if ($rows == 1) {

    while ($num = mysqli_fetch_assoc($result)) {
      $_SESSION['u_id'] = $num['u_id'];
      $_SESSION['user'] = $username;
      $uid = $_SESSION['u_id'];
      
    }
    header("location:http://localhost/techninow/user-dash.php?uid=$uid");

    
  } else {

    header('location:http://localhost/techninow/login.php?warning=Your password or username is invalid, please re-enter.');
  }
}
?>
<!--Author_Akash kumar-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/login-form.css">
  <link rel="icon" href="Images/Techninow.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="text-center">

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #165c8d;">
    <a class="navbar-brand" href="#"><img src="Images/logo.png" id="logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="privacy.php">Privacy Policy</a>
        </li>
      </ul>

      <div class="mx-2">
        <a href="signup.php" <button class="badge badge-pill badge-primary" style="padding:13px" ;>SignUp</button></a>
      </div>
    </div>
  </nav>
  <!-- Nav bar End -->
  <form action="login.php" method="POST">
    <div class="container">
      <div class="container form bg-white pt-5 mt-4 mb-3">
        <!--change after click on sign up-->
        <p class="text-center login-heading hide-me">login</p>

        <div class="container hide-me">
          <div class="row">
            <div class="col mt-4 pl-5 pr-5">
              <p class="username" style="text-align: left;">username</p>
              <div class="row mt-4">
                <div class="col-2 text-center pt-1 pr-0">
                  <i class="fa fa-user-o" aria-hidden="true" id="user"></i>
                </div>
                <div class="col-10 pl-0">
                  <input type="text" name="username" placeholder="Type your username" class='input-1'>
                </div>
              </div>
              <hr class="hr-1">
              <div class="hide"></div>
            </div>
          </div>
          <div class="row">
            <div class="col mt-4 pl-5 pr-5">
              <p class="username" style="text-align: left;">Password</p>
              <div class="row mt-4">
                <div class="col-2 text-center pt-1 pr-0">
                  <i class="fa fa-lock" aria-hidden="true" id="lock"></i>
                </div>
                <div class="col-10 pl-0">
                  <input type="password" name="Password" placeholder="Type your password" class="input-2">
                </div>

              </div>

              <hr class="hr-2">
              <div class="hide-1"></div>
              <p style='text-align:left; color:red;'> 
              <?php if (@$_GET['warning']) {
               echo @$_GET["warning"];
               }
              ?>
               </p>


            </div>

          </div>

          <div class="row">
            <div class="col text-right pr-5">
              <a href="#"><span class="forget-password">Forget password?</span></a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col pl-5 pr-5">
              <input type="Submit" value="Login" class="btn btn-block text-white login-button">
            </div>
          </div>

          <div class="row mt-5">
            <div class="col text-center">
              <span style="padding:7px; border:2px solid rgb(194, 187, 187); border-radius:10px; font-family: Arial, Helvetica, sans-serif;font-size:15px;font-weight:500;color:rgb(148, 141, 141)">New to Techninow? <a href="signup.php" style="color:blue">Create an Account</a></span>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col text-center">
              <span style="text-transform: capitalize;font-family: Arial, Helvetica, sans-serif;font-size:15px;font-weight:600;color:rgb(148, 141, 141)">or sign up using</span>
            </div>
          </div>
          <div class="row mt-4">
            <div class='col text-center'>
              <span class="facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
              <span class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
              <span class="google-icon"><i class="fa fa-google" aria-hidden="true"></i></span>
            </div>
          </div>

        </div>

      </div>
    </div>
  </form>
  <!-- Site footer start -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About Us</h6>
          <p class="text-justify">Techninow.com <i>A RIGHT PLACE TO START.</i> We will help programmers build up
            concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript,
            PHP, Android, SQL and Algorithm. Techninow focuses on providing the most efficient code or snippets as the
            code wants to be simple. </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="c.php">C</a></li>
            <li><a href="python.php">Python</a></li>
            <li><a href="php.php">PHP</a></li>
            <li><a href="java.php">Java</a></li>
            <li><a href="Android.php">Android</a></li>
            <li><a href="kotlin.php">kotlin</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
            <a href="About.php">Techninow</a>
            <span>Developer</span>
            <a href="#">Akash Bhopewal</a>
          </p>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href=" https://www.facebook.com/Techninow/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--footer end-->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>