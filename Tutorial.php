                <!--Author_Akash kumar-->
                <!DOCTYPE html>
                <html lang="en">

                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <?php
                  include "admin/_dbconnect.php"; // database configuration
                  /* Calculate Offset Code */

                  $limit = 1;
                  $cate_id = $_GET['cid'];

                  /* select query of post table for admin user */
                  $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                    category.category_name,post.category FROM post
                    LEFT JOIN category ON post.category = category.category_id
                    WHERE category_id = $cate_id
                    ORDER BY post.post_id DESC LIMIT {$limit}";

                  $result = mysqli_query($conn, $sql) or die("Query Failed hai.");
                  if (mysqli_num_rows($result) > 0) {
                  ?>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <title>Learn <?php echo $row['category_name']; ?> | Techninow</title>
                    <?php

                    } ?>
                  <?php
                  } else {
                    echo "<h3>No Results Found.</h3>";
                  }

                  ?>
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                  <link rel="stylesheet" href="css/index.css">
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
            
            <a class="dropdown-item" href="#">Your profile</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
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



                  <main role="main" class="container">
                    <div class="row">
                      <div class="col-md-8 blog-main" style="border: .5px dotted rgb(230, 226, 226); background-color: rgb(255, 255, 255); margin-top: 20px;">

                        <div class="blog-post">
                        <?php
                       $re = @$_GET['p_id'];
                       include "admin/_dbconnect.php"; 
                       if(isset($re)){
                     // database configuration
                        /* Calculate Offset Code */
      
                      
      
                        /* select query of post table for admin user */
                        $sql = "select title, description from post where post_id = $re";
      
                        $result = mysqli_query($conn, $sql) or die("Query Failed 000.");
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                       
                        ?>
                          <h2 class="blog-post-title" style="text-align: center;"><?php echo $row['title'];  
                                                                                  ?></h2>

                          <?php echo $row['description'];  
                          ?>


                            <?php
                          }
                        }
                      }
                      else{
                        $limit = 1;
                        $cate_id = $_GET['cid'];
      
                        /* select query of post table for admin user */
                        $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                          category.category_name,post.category FROM post
                          LEFT JOIN category ON post.category = category.category_id
                          WHERE category_id = $cate_id
                          ORDER BY post.post_id ASC LIMIT {$limit}";
      
                        $result = mysqli_query($conn, $sql) or die("Query Failed hai.");
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) { 
                            $c = $row['title'];
                           echo "<h2 class='blog-post-title' style='text-align: center;'>$c</h2>";
                            echo $row['description']; 
                          }
                        }
                      }
                            ?>

                        </div><!-- /.blog-post -->

                      </div><!-- /.blog-main -->


                      <aside class="col-md-4 blog-sidebar">
                        <div class="p-4" style="border: .5px dotted rgb(235, 227, 227); background-color: rgb(255, 254, 254); margin-top: 20px;">
                          <?php
                          include "admin/_dbconnect.php"; // database configuration
                          /* Calculate Offset Code */

                          $limit = 10;
                          $myid = $_GET['cid'];

                          /* select query of post table for admin user */
                          $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                    category.category_name,post.category FROM post
                    LEFT JOIN category ON post.category = category.category_id
                 WHERE category_id = $myid
                    ORDER BY post.post_id DESC LIMIT {$limit}";

                          $result = mysqli_query($conn, $sql) or die("Query Failed hai.");
                          if (mysqli_num_rows($result) > 0) {
                          ?>
                            <?php

                            $row = mysqli_fetch_assoc($result) ?>

                            <h4 class="font-italic"> <?php echo $row['category_name'];  ?> Tutorials</h4>

                          <?php
                          } else {
                            echo "<h3>No Results Found.</h3>";
                          }

                          ?>

                          <?php
                          include "admin/_dbconnect.php"; // database configuration
                          /* Calculate Offset Code */

                          $limit = 10;
                          $cate_id = $_GET['cid'];

                          /* select query of post table for admin user */
                          $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                    category.category_name,category.category_id,post.category FROM post
                    LEFT JOIN category ON post.category = category.category_id
                    WHERE category_id = $cate_id
                    ORDER BY post.post_id ASC LIMIT {$limit}";

                          $result = mysqli_query($conn, $sql) or die("Query Failed hai.");
                          if (mysqli_num_rows($result) > 0) {
                          ?>
                            <ol class="list-unstyled mb-0">
                              <?php

                              while ($row = mysqli_fetch_assoc($result)) { ?>
                                <li><a href="Tutorial.php?cid=<?php echo $row['category_id'];  ?>&p_id=<?php echo $row['post_id'];  ?>"><?php echo $row['title'];  ?></a></li>

                              <?php

                              } ?>
                            <?php
                          } else {
                            echo "<h3>No Results Found.</h3>";
                          }

                            ?>
                            <!-- 
                            <li><a href="#">Html-Overview</a></li>
                            <li><a href="#">Html-setup</a></li>
                            <li><a href="#">Html-syntax</a></li>
                            <li><a href="#">Html-variable types</a></li>
                            <li><a href="#">Html-Basic operator</a></li>
                            <li><a href="#">Html-Decision making</a></li>
                            <li><a href="#">Html-Loops</a></li>
                            <li><a href="#">Html-Numbers</a></li>
                            <li><a href="#">Html-Strings</a></li>
                            <li><a href="#">Html-Lists</a></li>
                            <li><a href="#">Html-Tuples</a></li>
                            <li><a href="#">Html-Dictionary</a></li>
                            <li><a href="#">Html-Time & Date</a></li>
                            <li><a href="#">Html-Functions</a></li>
                            <li><a href="#">Html-Modules</a></li>
                            <li><a href="#">Html-Files I/O</a></li>
                            <h4 class="font-italic">Html Advanced Tutorials</h4>
                            <li><a href="#">Html-Classes/objects</a></li>
                            <li><a href="#">Html-Databases access</a></li>
                            <li><a href="#">Html-Networking</a></li>
                            <li><a href="#">Html-Sending Email</a></li>
                            <li><a href="#">Html-Multithreading</a></li>
                            <li><a href="#">Html-XML processing</a></li>
                            <li><a href="#">Html-GUI programming</a></li>
                            -->
                            </ol>
                        </div>


                      </aside><!-- /.blog-sidebar -->

                    </div><!-- /.row -->

                  </main>



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
                            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                            <li><a href="http://scanfcode.com/category/front-end-development/">Python</a></li>
                            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                            <li><a href="http://scanfcode.com/category/templates/">kotlin</a></li>
                          </ul>
                        </div>

                        <div class="col-xs-6 col-md-3">
                          <h6>Quick Links</h6>
                          <ul class="footer-links">
                            <li><a href="http://scanfcode.com/about/">About Us</a></li>
                            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                            <li><a href="http://scanfcode.com/sitemap/"></a></li>
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
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </footer>

                  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                </body>

                </html>