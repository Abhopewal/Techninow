                  <!--Author_Akash kumar-->
                  <!DOCTYPE html>
                  <html lang="en">

                  <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Privay Policy</title>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                    <link rel="stylesheet" href="css/login.css">
                    <link rel="stylesheet" href="dashboard.css">
                    <link rel="icon" href="Images/Techninow.png">
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
                            <a class="nav-link" href="about.php">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="privacy.php">Privacy Policy</a>
                          </li>
                        </ul>
                        <?php
                        session_start();
                        if (!isset($_SESSION['user'])) {
                          echo ' 
     <div class="mx-2">
     <a href="login.php"><button class="badge badge-pill badge-primary" style="padding:13px";>Login</button></a>
     <a href="signup.php"<button class="badge badge-pill badge-primary" style="padding:13px";>SignUp</button></a>
     </div>';
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['user'])) {
                          echo '<form class="form-inline my-0 my-lg-0">
     <div class="btn-group dropbottom">
     <ul class="navbar-nav">
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
         <img src="Images/user.png" width="40" height="40" class="rounded-circle">
         <span>
         
        ' . $_SESSION['user'] . '
                    
           </span>
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <p> Hello ' . $_SESSION['user'] . ' Welcome !   </p><hr>
         
         <a class="dropdown-item" href="User-dash.php">Your profile</a>
         <a class="dropdown-item" href="User-dash.php">Edit Profile</a>
         <a class="dropdown-item" href="#">Help</a>
         <a class="dropdown-item" href="logout.php">Log Out</a>
       </div>
     </li>   
   </ul>
 </div>

   </form>';
                        }
                        ?>

                      </div>
                    </nav>
                    <!-- Nav bar End -->



                    <div class="card text-center">

                      <div class="card-body">
                        <h3 class="card-title">Our Privacy Policy</h3>
                        <p class="card-text">
                          The website www.techninow.com is owned and maintained by Akash Techninow Industries,</br> henceforth termed as “we”, “our”, “us”, or the “company”. All the visitors, users, learners, <br> teachers, and instructors are named as "users"; and the website Techninow.com is termed as "website"</br> everywhere in this document.</br>

                          We are committed to protecting your privacy online. This privacy policy explains what </br>information we collect from you or what information you share with us when you visit the</br> website. We review our policy from time to time, so you are advised to check the latest</br> version.</br>

                          As a user of www.Techninow.com, you must agree to have read our privacy policy before </br> sharing any information with us. This Privacy Policy is incorporated into and subject to the </br> Terms of Use.
                        </p>
                        <a href="signup.html" class="btn btn-primary">SignUp</a>
                      </div>

                    </div>



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
                              <li><a href="#">C</a></li>
                              <li><a href="#">Python</a></li>
                              <li><a href="#">PHP</a></li>
                              <li><a href="#">Java</a></li>
                              <li><a href="#">Android</a></li>
                              <li><a href="#">kotlin</a></li>
                            </ul>
                          </div>

                          <div class="col-xs-6 col-md-3">
                            <h6>Quick Links</h6>
                            <ul class="footer-links">
                              <li><a href="index.html">Home</a></li>
                              <li><a href="contact.html">Contact Us</a></li>
                              <li><a href="About.html">About Us</a></li>
                              <li><a href="privacy.html">Privacy Policy</a></li>
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