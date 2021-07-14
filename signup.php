                <!--Author_Akash kumar-->
<?php
if(isset($_POST['submit'])){


session_start();
$FullName=$_POST['FullName'];
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Password=sha1($_POST['Password']);
$CPassword=sha1($_POST['CPassword']);

if($Password==$CPassword){
  include 'admin/_dbconnect.php';
  $q="select Username from user_reg where Username='$Username'";
  $result=mysqli_query($conn, $q);
  $row=mysqli_num_rows($result);
  if($row<1){
    $q1="select Email from user_reg where Email='$Email'";
    $result1=mysqli_query($conn, $q1);
    $row1=mysqli_num_rows($result1);
    if($row<1){
      $q2="insert into user_reg (FullName,Username,Email,Password) values ('$FullName','$Username','$Email','$Password')";
      $result2=mysqli_query($conn, $q2);
      if($result2==1){
          header("location:$host_1/login.php");
      }
      else{
          header('location:http://localhost/techninow/signup.php');
      }
    }
    else{
      $alreadyEmail="Email already registerd";
    }
   
  }
  else{
    $already="Username already exists";
  }

}
else{
    $wrong = "Password does not match ";
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="icon" href="Images/Techninow.png">
  <link rel="stylesheet" href="css/login-form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #165c8d;">
    <a class="navbar-brand" href="#"><img src="Images/logo1.png" id="logo" alt="logo"></a>
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
        <a href="login.php"><button class="badge badge-pill badge-primary" style="padding:13px" ;>Login</button></a>

      </div>
    </div>
  </nav>
  <!-- Nav bar End -->
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="container">
        <div class="container form bg-white pt-1 mt-4 mb-3">
            <!--change after click on sign up-->
           
            <!--change it-->
            <p class="text-center login-heading">sign up</p>
            <div class="row hide-me">
                <div class="col mt-1 pl-5 pr-5">
                    <p class="username">Name</p>
                    <div class="row mt-1">
                        <div class="col-2 text-center pt-1 pr-0">
                            <i class="fa fa-user-o" aria-hidden="true" id="user"></i>
                        </div>
                        <div class="col-10 pl-0">
                            <input type="text" placeholder="Type your username" name="FullName"  class='first-name'>
                        </div>
                    </div>
                    <hr class="hr-1">
                    <div class="first-name-hide"></div>
                </div>
            </div>
            <div class="row hide-me">
                <div class="col mt-4 pl-5 pr-5">
                    <p class="username">Username</p>
                    <div class="row mt-1">
                        <div class="col-2 text-center pt-1 pr-0">
                            <i class="fa fa-user-o" aria-hidden="true" id="user"></i>
                        </div>
                        <div class="col-10 pl-0">
                            <input type="text" placeholder="Type your username" name="Username" class='last-name'>
                        </div>
                    </div>
                    <hr class="hr-1">
                    <?php
               if (isset($already))
                {
                  echo "<p style='text-align:left; color:red;''>  $already </p>";
                }
                ?>
                    <div class="last-name-hide"></div>
                </div>
            </div>
            <div class="row hide-me">
                <div class="col mt-4 pl-5 pr-5">
                    <p class="username">Email-id</p>
                    <div class="row mt-1">
                        <div class="col-2 text-center pt-1 pr-0">
                            <i class="fa fa-envelope-o" aria-hidden="true" id="user"></i>
                        </div>
                        <div class="col-10 pl-0">
                            <input type="email" placeholder="Type your username" minlength="6" name="Email" class='email'>
                        </div>
                    </div>
                    <hr class="hr-1">
                    <?php
               if (isset($alreadyEmail))
                {
                  echo "<p style='text-align:left; color:red;''>  $alreadyEmail </p>";
                }
                ?>
                    <div class="email-hide"></div>
                </div>
            </div>
            <div class="row hide-me">
                <div class="col mt-4 pl-5 pr-5">
                    <p class="username">Password</p>
                    <div class="row mt-1">
                        <div class="col-2 text-center pt-1 pr-0">
                            <i class="fa fa-lock" aria-hidden="true" id="lock"></i>
                        </div>
                        <div class="col-10 pl-0">
                        
                   
                            <input type="password" placeholder="Type your password" minlength="6" name="Password" class="password-signup">
                        </div>
                    </div>
                    <hr class="hr-2">
                    
                    <div class="password-signup-hide"></div>
                </div>
            </div>
            <div class="row hide-me">
                <div class="col mt-4 pl-5 pr-5">
                    <p class="username">Confirm-password</p>
                    <div class="row mt-1">
                         <div class="col-2 text-center pt-1 pr-0">
                        
                            <i class="fa fa-lock" aria-hidden="true" id="lock"></i>
                        </div>
                        <div class="col-10 pl-0">
                            <input type="password" placeholder="Type your password" minlength="6" name="CPassword" class="confirm-password-signup">
                        </div>
                    </div>
                    <hr class="hr-2">
                    <?php
               if (isset($wrong))
                {
                  echo "<p style='text-align:left; color:red;'>  $wrong </p>";
                }
                ?>
                    <div class="confirm-password-signup-hide"></div>
                </div>
                
            </div>
            
            <div class="row hide-me">
            
                <div class="col pl-5">
                
                    <a href="#"><span class="forget-password">I accept the <span style="text-transform:capitalize;color:blue">terms of use</span>&
                            <span style="text-transform:capitalize;color:blue">privacy policy</span> </a>
                </div>
            </div>
            <div class="row mt-4 hide-me">
                <div class="col pl-5 pr-5">
                <input type="submit" value="Register" name="submit" class="btn btn-block text-white signup-button">
                </div>
            </div>
            <div class="row mt-4">
                    <div class="col text-center">
                        <span style="padding:7px; border:2px solid rgb(194, 187, 187); border-radius:10px; font-family: Arial, Helvetica, sans-serif;font-size:15px;font-weight:500;color:rgb(148, 141, 141)">already have an account <a href="login.php" style="color:blue">Login</a></span>
                    </div>
                </div>
 
        </div>
    </div>
</form>
  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About Us</h6>
          <p class="text-justify">Techninow.com <i>A RIGHT PLACE TO START.</i> We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm. Techninow focuses on providing the most efficient code or snippets as the code wants to be simple. </p>
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
            <a href="About.html">Techninow</a>
            <span>Developer</span>
            <a href="#">Akash Bhopewal</a>
          </p>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href=" https://www.facebook.com/Techninow/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href=" https://www.facebook.com/Techninow/"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href=" https://www.facebook.com/Techninow/"><i class="fa fa-youtube"></i></a></li>
            <li><a class="linkedin" href=" https://www.facebook.com/Techninow/"><i class="fa fa-linkedin"></i></a></li>
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