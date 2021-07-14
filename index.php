                <!--Author_Akash kumar-->
                <?php

                ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Techninow</title>
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  <link rel="stylesheet" href="css/index.css">
                  <link rel="stylesheet" href="dashboard.css">
                  <link rel="icon" href="Images/Techninow.png">

                </head>

                <body>

                  <!--Nav bar start-->
                  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #165c8d;">
                    <a class="navbar-brand" href="#"><img src="Images/logo1.png" id="logo" alt="logo" style="height: 50px; width:200px;"></a>
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
            
            <a class="dropdown-item" href="dashboard.php">Your profile</a>
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





                  <!-- site big image Middleware start -->

                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" id="contain">
                        <img src="Images/pic5.jpg" class="d-block w-100" alt="site-image">

                        <div id="contain1">
                          <img src="images/TechninowGlobe.png" alt="enthuons show-line">

                          <h3 class="wow fadeInUp   animated" data-wow-delay="100ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                            You are browsing the best resource for Online Education</h3>

                        </div>

                      </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <!-- site big image Middleware end -->

                  <style>
                    #contain {
                      position: relative;
                      text-align: center;
                      color: white;
                    }


                    /* Centered text */
                    #contain1 {
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);

                    }
                  </style>















                  <!--tutorials library start-->
                  <div class="container my-5">
                    <h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif;">Tutorials Library</h1>
                    <div class="card-deck my-5 text-center">

                      <div class="card mb-4 shadow-sm">
                        <?php
                        include 'admin/_dbconnect.php';
                        $q = "select * from category LIMIT 1, 4";
                        $querydisplay = mysqli_query($conn, $q) or die("query unsucessful");
                        $row = mysqli_num_rows($querydisplay);
                        while ($result = mysqli_fetch_assoc($querydisplay)) {


                        ?>
                          <div class="card-header">

                            <a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><img src="admin/upload/<?php echo $result['logo'] ?>" alt="" style="height: 110px;"></a>


                            <h4 class="my-0 font-weight-normal"><a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></a></h4>

                            </a>
                          </div>
                        <?php
                        }


                        ?>



                      </div>

                      <div class="card mb-4 shadow-sm">
                        <?php
                        include 'admin/_dbconnect.php';
                        $q = "select * from category LIMIT 4, 4";
                        $querydisplay = mysqli_query($conn, $q) or die("query unsucessful");
                        $row = mysqli_num_rows($querydisplay);
                        while ($result = mysqli_fetch_assoc($querydisplay)) {

                        ?>
                          <div class="card-header">

                            <a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><img src="admin/upload/<?php echo $result['logo'] ?>" alt="" style="height: 110px;"></a>


                            <h4 class="my-0 font-weight-normal"><a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></a></h4>

                            </a>
                          </div>

                        <?php
                        }


                        ?>
                      </div>



                      <div class="card mb-4 shadow-sm">
                        <?php
                        include 'admin/_dbconnect.php';
                        $q = "select * from category LIMIT 8, 4";
                        $querydisplay = mysqli_query($conn, $q) or die("query unsucessful");
                        $row = mysqli_num_rows($querydisplay);
                        while ($result = mysqli_fetch_assoc($querydisplay)) {

                        ?>
                          <div class="card-header">

                            <a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><img src="admin/upload/<?php echo $result['logo'] ?>" alt="" style="height: 110px;"></a>


                            <h4 class="my-0 font-weight-normal"><a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></a></h4>

                            </a>
                          </div>

                        <?php
                        }


                        ?>

                      </div>

                      <div class="card mb-4 shadow-sm">
                        <?php
                        include 'admin/_dbconnect.php';
                        $q = "select * from category LIMIT 12, 4";
                        $querydisplay = mysqli_query($conn, $q) or die("query unsucessful");
                        $row = mysqli_num_rows($querydisplay);
                        while ($result = mysqli_fetch_assoc($querydisplay)) {

                        ?>
                          <div class="card-header">

                            <a href="Tutorial.php?cid=<?php echo $result['category_id'] ?>"><img src="admin/upload/<?php echo $result['logo'] ?>" alt="" style="height: 110px;"></a>


                            <h4 class="my-0 font-weight-normal"><a href="Tutorial.php"><?php echo $result['category_name'] ?></a></h4>

                            </a>
                          </div>

                        <?php
                        }

                        ?>

                      </div>

                    </div>

                  </div>
                  <!--tutorials library end-->

                  <!--commetns code-->
                  <section class="mb-5">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-5 col-md-6 col-12 pb-4">

                          <h1 id="cm">Comments</h1>
                          <?php
                          include 'admin/_dbconnect.php';
                          $q = "select * from comments LIMIT 10";
                          $result = mysqli_query($conn, $q) or die("query unsucessful");
                          $row = mysqli_num_rows($result);
                          if ($row > 0) {

                          ?>
                            <div class="card border-0 mt-4" style="width:auto;">
                              <div class="card-body ">

                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {


                                ?>
                                  <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="30" height="30" class="mt-4">
                                  <h5 style="display: inline;" class="card-title"><?php echo $row['name']; ?></h5>
                                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['time']; ?></h6>
                                  <p class="card-text"><?php echo $row['comment']; ?></p>

                              <?php
                                }
                              } else {
                                echo "<h1>No data found</h1>";
                              }
                              ?>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                          <form action="Action.php" method="POST" id="algin-form">
                            <div class="form-group">
                              <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="cmt" id="" msg cols="30" rows="5" class="form-control" placeholder="Please Enter your Message" maxlength="300"></textarea>
                            </div>
                            <?php
                            if (!isset($_SESSION['user'])) {
                              echo
                              '<div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" placeholder="Enter your Name" class="form-control"> </div>';
                            }
                            ?>



                            <div class="form-group"> <input type="submit" class="btn" name="subbtn" value="Post comment" style="color:white ;background-color: #165c8d;"> </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </section>


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
                            <a href="#">Techninow</a>
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