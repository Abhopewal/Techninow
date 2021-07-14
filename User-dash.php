<!--Author Akash bhopewal-->
<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("location:http://localhost/techninow/admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_SESSION['user']; ?> | Panel Techninow</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="css/style2.css">


  <link rel="icon" href="Images/Techninow.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="admin/js/jquery-3.6.0.min.js"></script>



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

      if (!isset($_SESSION['user'])) {
        echo '<div class="mx-2">
    <button class="btn btn-danger">Login</button>
    <button class="btn btn-danger">SignUp</button>
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
            
            <a class="dropdown-item" href="user-dash.php">Your profile</a>
            <a class="dropdown-item" href="user-dash.php">Edit Profile</a>
            <a class="dropdown-item" href="#">Help</a>
            <a class="dropdown-item" href="Logout.php">Log Out</a>
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

  <div class="container-fluid mt-0">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <?php
            $user_id = $_SESSION['u_id'];
            include 'admin/_dbconnect.php';
            $query = "select Image from user_bio where user_id='$user_id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_num_rows($result);
            if ($row > 0) {

            ?>
              <li class="nav-item mt-3">

                <div>
                  <center>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <img src="Admin/upload/<?php echo $row['Image']; ?>" alt="DP" style="height: 100px; width:auto; border-radius: 30%;">





                  <?php }
                  } ?>

                  <br><br>
                  <h5 style="color:white;">
                    <?php
                    echo 'Welcome '  . $_SESSION['user'];

                    ?>
                  </h5>
                  <p style="text-align: center;">
                    <?php
                    //echo $_SESSION['user'];
                    ?>
                  </p>
                  </center>
                </div>
                </a>
              </li>

              <div class="profile">
                <li>
                  <span></span>

                  <button id="edit" style="width: 200px; border-radius:10px; font-size:17px; margin-bottom:10px; background-color:rgb(209, 108, 43); color:white;">Edit profile</button>
                  <form action="Action.php" method="POST" enctype="multipart/form-data">
                    <textarea name="userbio" id="ubio" cols="25" rows="3" placeholder="Add Bio" style="display:none; border-radius:10px"></textarea>
                    <input type="text" name="Website" id="uwebsite" class="mt-2" placeholder="Website" style="display:none; border-radius:5px">
                    <input type="text" name="Facebook" id="ufacebook" class="mt-2" placeholder="Facebook" style="display:none; border-radius:5px">
                    <input type="file" name="image" id="inputPassword3" value="imgfile" class="mt-2" style="display:none; " required>
                    <span><label for="inputPassword3" id="uimglabel" style="display: none; cursor: pointer; margin-top:20px; color:white; background-color:rgb(177, 86, 44);"><i class="fa fa-file-image-o" aria-hidden="true"> Choose Photo</i></label></span>
                    <br>
                    <span><input type="submit" value="Save" name="userbiobtn" id="save" class="badge badge-pill badge-primary mt-3" id="save" style="display:none;"></span>
                    <span><button class="badge badge-pill badge-secondary" id="cancel" onclick="toggleHide()" id="cancel" style="display:none;">Cancel</button></span>
                  </form>


                </li>
              </div>

              <script>
                $(document).ready(function() {
                  $("#edit").click(function() {

                    $("#ubio").toggle();
                    $("#uwebsite").toggle();
                    $("#ufacebook").toggle();
                    $("#uimglabel").toggle();
                    $("#save").toggle();
                    $("#cancel").toggle();

                  });
                  $("#cancel").click(function() {
                    $("#ubio").hide();
                    $("#uwebsite").hide();
                    $("#ufacebook").hide();
                    $("#uimglabel").hide();
                    $("#save").hide();
                    $("#cancel").hide();
                  });

                  $("#Cpassword").click(function() {
                    $("#category").hide();
                    $("#addwork").hide();
                    $("#work").hide();
                    $("#Manage_posts").hide();
                    $("#Cpswd").show();

                  });

                });
              </script>
              <?php
              include 'admin/_dbconnect.php';
              $uid = @$_GET['uid'];
              $q = "select * from user_bio where user_id = '$uid'";
              $result = mysqli_query($conn, $q) or die("error 300");
              $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


              ?>
                  <p style="color: white;"> <?php echo $row['Bio'] ?></p>

                  <p style="color: wheat;"><i class="fa fa-facebook"></i> <?php echo $row['Facebook'] ?></p>
                  <p style="color: wheat; margin-top:-15px;"> <i class="fa fa-link"></i> <?php echo $row['Website'] ?></p>
              <?php
                }
              }
              ?>
              <span id="userbiospan"></span>

              <li class="nav-item mt-2">
              
                <a class="nav-link active" style="cursor:pointer" href='index.php'>
                  <i class="fa fa-home" aria-hidden="true"> <span>Home</span></i>
                </a>
              </li>
              <?php
                if(isset($_SESSION['uid'])){
                  $uid = @$_GET['uid'];
                }
               
                ?>
              <li class="nav-item mt-2">
                <a class="nav-link active" style="cursor:pointer"href='<?php echo "quiz.php?uid=$uid"; ?>'>
                  <i class="fa fa-book" aria-hidden="true"> <span>QUIZ</span></i>
                </a>
              </li>

              <li class="nav-item mt-2">
                <a class="nav-link active" style="cursor:pointer"href='contact.php'>
                  <i class="fa fa-book" aria-hidden="true"> <span>Any query</span></i>
                </a>
              </li>

              <li class="nav-item mt-2">
                <a class="nav-link" href="#">

                  <i class="fa fa-key" aria-hidden="true"><span id="Cpassword">Change Password</span></i>
                </a>
              </li>
              <li class="nav-item mt-2 mb-5 ">
                <a class="nav-link" href="Logout.php">

                  <i class="fa fa-sign-out" aria-hidden="true"><span>Logout</span></i>
                </a>
              </li>

          </ul>




        </div>
      </nav>




      <main role="main" class="col-md-2 ml-sm-auto col-lg-10 pt-1 px-4">
        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
          <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
          </div>
          <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:200%;height:100%;left:0; top:0"></div>
          </div>
        </div>
        <!--Categories -->
        <div id="work" class="mt-2" style="background-image: linear-gradient(white, skyblue, white, white);">
          <center>
            <img src="images/man laptop.png" alt="Admin Dp" style="height: 110px;">

            <br><br>
            <h2 style="color:black;">
              <?php
              echo 'Welcome, '  . $_SESSION['user'];
              ?>
            </h2>
            <p style="text-align: center;">
              Manage your profile, info, privacy, and security to make Techninow work better for you.

            </p>
          </center>

          <div class="card" style="margin-top: 30px;">

            <div class="card-body">
              <h5 class="card-title"> <i class="fa fa-book" aria-hidden="true"></i> Work Experience</h5>
              <?php
              include 'admin/_dbconnect.php';
              $u_id = @$_GET['uid'];
              $q = "select * from user_work where user_id = '$u_id' ";
              $result = mysqli_query($conn, $q) or die("query faild 202");
              $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


              ?>
                  <p class="card-text">

                  <h3>
                    <?php
                    echo $row['role'];

                    ?>
                  </h3>
                  <?php
                  echo $row['company'];
                  echo '<a href="#addWorkModal" data-toggle="modal" style = "margin-left:40px;"><i class="fa fa-edit" style="color: blue;"></i> Edit</a>';
                  ?>
              <?php
                }
              } else {
                echo '<p class="card-text">With supporting text below as a natural lead-in to additional content.
              </p>';
              }
              ?>

              </p>
              <hr>
              <a href="#addWorkModal" data-toggle="modal"><i class="fa fa-plus" style="color: blue;"></i> Add New</a>
            </div>
          </div>
          <div class="card" style="margin-top: 10px;">

            <div class="card-body">
              <h5 class="card-title"> <i class="fa fa-book" aria-hidden="true"></i> Education</h5>
              <?php
              include 'admin/_dbconnect.php';
              $u_id = @$_GET['uid'];
              $q = "select * from user_edu where user_id = '$u_id' ";
              $result = mysqli_query($conn, $q) or die("query faild 202");
              $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


              ?>
                  <p class="card-text">
                  <h3>
                    <?php
                    echo $row['school'];

                    ?>
                  </h3>
                  <?php
                  echo $row['program'] . " , " . $row['degree'];
                  echo '<a href="#addEducationModal" data-toggle="modal" style = "margin-left:40px;"><i class="fa fa-edit" style="color: blue;"></i> Edit</a>';
                  ?>
              <?php
                }
              } else {
                echo '<p class="card-text">With supporting text below as a natural lead-in to additional content.
              </p>
              ';
              
              }
              ?>
              </p>
              <hr>
              <a href="#addEducationModal" data-toggle="modal"><i class="fa fa-plus" style="color: blue;"></i> Add New</a>
            </div>
          </div>
        </div>
        <!--Categories end -->
        <div class="table-responsive mt-0" class="bg-danger">
          <!--------------------------------------Manage Faculties------------------------------------------->


          <!-- work modal  -->
          <div id="addWorkModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="Action.php" method="POST">
                  <div class="modal-header">
                    <h4 class="modal-title">Add your employment details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Company </label>
                      <input type="text" class="form-control" name="company" placeholder="Enter your company Name" required>
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <input type="text" class="form-control" name="role" placeholder="ex: Software Engineer" required>
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="desc" required></textarea>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" name="workbtn" value="Save">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Modal -->
          <!-- education modal -->
          <div id="addEducationModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="Action.php" method="POST">
                  <div class="modal-header">
                    <h4 class="modal-title">Add School</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Schoole </label>
                      <input type="text" class="form-control" name="school" placeholder="Which school have you studied at?" required>
                    </div>
                    <div class="form-group">
                      <label>Program</label>
                      <input type="text" class="form-control" name="program" placeholder="ex: Computer Science And Engineering" required>
                    </div>
                    <div class="form-group">
                      <label>Degree</label>
                      <input type="text" class="form-control" name="degree" placeholder="ex: B.tech" required>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="disc" required></textarea>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" name="edubtn" value="Save">
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- work Modal End -->
        </div>




        <!-- Change password -->
        <div class="container" style="background-image: linear-gradient(white, skyblue, white);">
          <div class="modal-dialog" role="document" id="Cpswd" style="display: none;">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 ">Change Password</h4>

              </div>
              <form action="Change-Password.php" method="POST">
                <div class="modal-body mx-3">

                  <div class="md-form mb-1">
                    <i class="fa fa-user"></i>
                    <input type="text" id="defaultForm-email" name="name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
                  </div>

                  <div class="md-form mb-1">
                    <i class="fa fa-key"></i>
                    <input type="text" id="defaultForm-email" name="current" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Current Password</label>
                  </div>



                  <div class="md-form mb-1">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" id="defaultForm-pass" name="new" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">New password</label>
                  </div>

                  <div class="md-form mb-1">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" id="defaultForm-pass" name="confirm" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Confirm password</label>
                  </div>

                  <div data-toggle="modal" data-target="#modalLoginForm">
                    <?php
                    if (isset($_SESSION['password_not_match'])) {
                      $a = $_SESSION['password_not_match'];
                      echo "<span style='color:red;'>$a</span>";
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['Current_pass'])) {
                      $a = $_SESSION['Current_pass'];
                      echo "<span style='color:red;'> $a</span>";
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['Success'])) {
                      $a = $_SESSION['Success'];
                      echo "<span style='color:green;'> $a</span>";
                    }
                    ?>
                  </div>
                  <div class="md-form mb-4">

                    <input type="submit" name="pcbtn" value="Change password" id="defaultForm-pass" class="form-control validate" style="background-color:#165c8d; color:white">

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Change password end-->

      </main>
    </div>
  </div>
  <!-- Site footer start -->
  <footer class="site-footer bg-dark mt-2">
    <div class="container" bg>
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



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>