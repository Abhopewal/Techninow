                     <!--Author_Akash kumar-->
                     <!DOCTYPE html>
                     <html lang="en">

                     <head>
                       <meta charset="UTF-8">
                       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                       <title>About Us</title>
                       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                       <link rel="stylesheet" href="css/login.css">
                       <link rel="stylesheet" href="css/about-us.css">
                       <script src="js/about-us.js"></script>
                       <link rel="stylesheet" href="dashboard.css">
                       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                       <link rel="icon" href="Images/Techninow.png">
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
                         </div>
                       </nav>
                       <!-- Nav bar End -->



                       <!--middle part start-->
                       <div class="container mt-5">
                         <div class="row mt-5">
                           <div class="col-12 mt-5 text-center">
                             <span class="header">about us</span>
                           </div>
                         </div>

                         <!--main content-->
                         <div class="row mt-5">
                           <div class="col-xl-6 col-lg-6 col-sm-12 text-center">
                             <img src="Images/about-images.jpg" class="header-part">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-sm-12 pt-5" style="font-weight: 600;">
                             Techninow is a training website for learning web technologies online.
                            Content includes tutorials and references relating to HTML, 
                            CSS, JavaScript, JSON, PHP, Python, AngularJS, React.js, SQL, 
                            Bootstrap, Sass, Node.js, jQuery, XQuery, AJAX, XML, Raspberry Pi, C++, C# and Java <br> <br>
                            Techninow The Largest Web Developer Site on the Internet
                             3 Billion Pages Displayed Each Year
                             60 Million Visitors Every Month</span>
                           </div>
                         </div>
                         <!--main content-->

                         <!--cards-->
                         <div class="row mt-5 mb-5">
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                             <div class="card">
                               <div class="card-header text-center">Easy Learning</div>
                               <div class="card-body"><img src="Images/gg.jpg" height="200px" width="100%">
                                 <p class="pt-3">Techninow has focus on simplicity.

                                   Techninow practice easy learning.

                                   Techninow uses simple code examples and simple illustrations of how to use it.

                                   Techninow' tutorials start from basic level and move all the way up to professional references..</p>
                               </div>
                             </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4">
                             <div class="card">
                               <div class="card-header text-center">Try It Yourself</div>
                               <div class="card-body"><img src="Images/lap.webp" height="200px" width="100%">
                                 <p class="pt-3"> Techninow presents thousands of code examples.

                                   By using our online editor, Try it Yourself, you can edit examples and execute computer code experimentally, to see what works and what does not, before implementing it.</p>
                               </div>
                             </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  mt-4 card-3">
                             <div class="card">
                               <div class="card-header text-center">Techninow is Free</div>
                               <div class="card-body"><img src="Images/dd.jpg" height="200px" width="100%">
                                 <p class="pt-3"> Techninow is, and will always be, a completely free developers resource.</p>
                               </div>
                             </div>
                           </div>
                         </div>
                         <!--cards-->
                       </div>
                       <!--middle part end--




  <!-- Site footer -->
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
                                 <li><a href="c.html">C</a></li>
                                 <li><a href="python.html">Python</a></li>
                                 <li><a href="php.html">PHP</a></li>
                                 <li><a href="java.html">Java</a></li>
                                 <li><a href="android.html">Android</a></li>
                                 <li><a href="kotlin.html">kotlin</a></li>
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
                                 <a href="#">Techninow</a>
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
                       <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

                       <script>
                         //on scroll plugin//
                         AOS.init({
                           once: true,
                           duration: 1000,
                         });
                         //on scroll plugin//
                       </script>
                     </body>

                     </html>