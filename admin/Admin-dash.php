<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:http://localhost/techninow/admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!--Author Akash bhopewal-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="../css/style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  <link rel="icon" href="../Images/Techninow.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery-3.6.0.min.js"></script>




</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #165c8d;">
    <a class="navbar-brand" href="#"><img src="../Images/logo1.png" id="logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../privacy.php">Privacy Policy</a>
        </li>

      </ul>
      <?php

      if (!isset($_SESSION['username'])) {
        echo '<div class="mx-2">
    <button class="btn btn-danger">Login</button>
    <button class="btn btn-danger">SignUp</button>
    </div>';
      }
      ?>
      <?php
      if (isset($_SESSION['username'])) {
        echo '<form class="form-inline my-0 my-lg-0">
        <div class="btn-group dropbottom" >
        <ul class="navbar-nav">
          <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
          <i class="fa fa-user"></i>
            <span>
            
           ' . $_SESSION['username'] . '
                       
              </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <p> Hello ' . $_SESSION['username'] . ' Welcome !   </p><hr>
            
            <a class="dropdown-item" href="admin-dash.php">Your profile</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="#">Help</a>
            <a class="dropdown-item" href="Logout.php">Logout</a>
          
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

  <div class="container-fluid mt-2">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item mt-3">

              <div>
                <center>

                  <h5 style="background-color: skyblue; padding:8px; margin-top:5px;"> <a href="Admin-dash.php" style="text-decoration: none; color:black;"><i class="fa fa-home"></i> Dashboard</a></h5>
                 
                  <h5 style="color:white;">

                  </h5>

                </center>
              </div>
              </a>
            </li>


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
                $("#Mcate").click(function() {
                  $("#category").show();
                  $("#addwork").hide();
                  $("#work").hide();
                  $("#Manage_posts").hide();
                  $("#Contacts").hide();
                  $("#Cpswd").hide();

                });
                $("#Cpassword").click(function() {
                  $("#category").hide();
                  $("#addwork").hide();
                  $("#work").hide();
                  $("#Manage_posts").hide();
                  $("#Contacts").hide();
                  $("#Cpswd").show();

                });
                $("#Mtut").click(function() {
                  $("#category").hide();
                  $("#addwork").hide();
                  $("#work").hide();
                  $("#Cpswd").hide();
                  $("#Contacts").hide();
                  $("#Manage_posts").show();
                });
                $("#Mcon").click(function() {
                  $("#category").hide();
                  $("#addwork").hide();
                  $("#work").hide();
                  $("#Cpswd").hide();
                  $("#Manage_posts").hide();
                  $("#contacts").show();
                });
              });
            </script>


            <span id="userbiospan"></span>

            <li class="nav-item active">
              <a class="nav-link active" style="cursor:pointer" href="../index.php">
                <i class="fa fa-home" aria-hidden="true"> <span>Home</span></i>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link active" style="cursor:pointer">
                <i class="fa fa-list" aria-hidden="true"> <span id="Mcate">Manage Categories</span></i>
              </a>
            </li>


            <li class="nav-item mt-2">
              <a class="nav-link active" style="cursor:pointer">
                <i class="fa fa-book" aria-hidden="true"> <span id="Mtut">Posts</span></i>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link active" href="quiz.php" style="cursor:pointer">
                <i class="fa fa-file-text-o" aria-hidden="true"> <span>Manage Quizs</span></i>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link active" style="cursor:pointer">
                <i class="fa fa-eye" aria-hidden="true"> <span id="Mcon">Contacts</span></i>
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
          <br><br><br><br><br><br><br><br><br>



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

        <div id="work" class="mt-4" style="background-image: linear-gradient(white, skyblue, white, white);">
          <center>
            <img src="../images/Man Laptop.png" alt="Admin Dp" style="height: 100px;">

            <br><br>
            <h2 style="color:black;">
              <?php
              echo 'Welcome, '  . $_SESSION['username'];
              ?>
            </h2>
            <p style="text-align: center;">
              Manage quiz, posts, password, privacy, and security to make Techninow work better for your audience.
            </p>
          </center>

          <div class="card" style="margin-top: 70px;">

            <div class="card-body">
              <h5 class="card-title"> <i class="fa fa-book" aria-hidden="true"></i> Work Experience</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.
              </p>
              <hr>

            </div>
          </div>
        </div>

        <!-- add work Modal HTML -->
        <div id="addwork" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="Add_category.php" method="POST">
                <div class="modal-header">
                  <h4 class="modal-title">Add your employment details</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" name="Company_Name" required>
                  </div>

                  <div class="form-group">
                    <label>Role</label>
                    <input type="text" class="form-control" name="Sub_Category" required placeholder="ex: Software Engineer">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="6"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-success" value="Add">
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- add work Modal -->








        <div class="table-responsive mt-0">
          <!--------------------------------------Manage category------------------------------------------->
          <div class="container-xl" id="category" style="display:none;">
            <div class="table-responsive mt-0">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Manage <b>Categories of tutorials</b></h2>
                    </div>
                    <div class="col-sm-6">
                      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle"></i> <span>Add New Categories</span></a>
                      <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash"></i> <span>Delete</span></a>
                    </div>
                  </div>
                </div>
                <?php
                include "_dbconnect.php";
                $q = "select * from Category";
                $result = mysqli_query($conn, $q) or die("query unsessfull");
                $row = mysqli_num_rows($result);
                if ($row > 0) {


                ?>
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>

                        </th>
                        <th>S.NO</th>
                        <th>CATEGORY NAME</th>
                        <th>POSTS</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($row = mysqli_fetch_assoc($result)) {


                      ?>
                        <tr>
                          <td>
                            <span class="custom-checkbox">
                              <input type="checkbox" id="checkbox1" name="options[]" value="1">
                              <label for="checkbox1"></label>
                            </span>
                          </td>
                          <td><?php echo $row['category_id']; ?></td>
                          <td><strong><?php echo $row['category_name']; ?></strong></td>
                          <td><strong><?php echo $row['post']; ?></strong></td>


                          <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                          </td>
                        </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
                <?php
                } else {
                  echo "<h1> No data found</h1>";
                }
                ?>
                <!--
                <div class="clearfix">
                  <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                  <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item active"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul>
                </div>
                -->
              </div>
            </div>
          </div>

          <!-- add Modal HTML -->
          <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h4 class="modal-title">Add Category</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="Add_category.php" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" class="form-control" name="category_name" required>
                    </div>
                    <div class="form-group">
                      <label>Choose logo</label>
                      <input type="file" name="img" required>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" name="cateaddbtn" value="Add">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Modal -->
          <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>No. of Posts</label>
                      <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Sub Category</label>
                      <input type="text" class="form-control" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Modal End -->

          <!--all tutorial modal-->
          <div class="modal fade" id="alltuts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">All tutorials</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
                  include 'admin/_dbconnect.php';
                  $que = "select * from category";
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
              </div>
            </div>
          </div>
          <!--all tutorial modal end-->

          <!-- Delete Modal -->
          <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Delete Modal End -->
        </div>

        <!--Manage courses-->
        <div id="Mtutorial" style="display: none;">
        </div>
        <!--manage posts -->
        <div class="container-xl" id="Manage_posts" style="display: none;">
          <div class="table-responsive mt-0">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                    <h2>Manage <b>Posts</b></h2>
                  </div>
                  <div class="col-sm-6">
                    <a href="#tutor" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle"></i> <span>Add Posts</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash"></i> <span>Delete</span></a>
                  </div>
                </div>
              </div>
              <?php
              include "_dbconnect.php"; // database configuration
              /* Calculate Offset Code */

              $limit = 4;

              /* select query of post table for admin user */
              $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                    category.category_name,post.category FROM post
                    LEFT JOIN category ON post.category = category.category_id
                 
                    ORDER BY post.post_id DESC LIMIT {$limit}";

              $result = mysqli_query($conn, $sql) or die("Query Failed hai.");
              if (mysqli_num_rows($result) > 0) {
              ?>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>

                      </th>
                      <th>S.No</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Date</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td>
                          <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                          </span>
                        </td>
                        <td><?php echo $row['post_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['category_name']; ?></td>
                        <td><?php echo $row['post_date']; ?></td>

                        <td>
                          <a href="#editPostsModal" class="edit" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                        </td>

                        <td>
                          <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                        </td>

                      </tr>
                    <?php

                    } ?>
                  </tbody>
                </table>
              <?php
              } else {
                echo "<h3>No Results Found.</h3>";
              }

              ?>
              <!--
                <div class="clearfix">
                  <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                  <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item active"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul>
                </div>
                -->
            </div>
          </div>
        </div>
        <!-- Edit Modal posts -->
        <div id="editPostsModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Post</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>No. of Posts</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Sub Category</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-info" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Edit Modal posts End -->
        <!-- manage posts end -->
        <div class="modal fade" id="tutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="save-post.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <!--Add here-->

                  <div>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" required name="post_title">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" required rows="5" name="postdesc"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Category</label>
                      <select name="category" class="form-control">
                        <option disabled selected> Select Category</option>

                        <?php
                        include "_dbconnect.php";
                        $sql = "SELECT * FROM category";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");

                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Post Image</label>
                      <input type="file" class="form-control" required name="fileToUpload">
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </form>
            </div>

          </div>
        </div>
    </div>






    <!--Manage posts modal end-->
    <!-- Manage contacts -->
    <div class="container-xl" id="contacts" style="display:none;">
      <div class="table-responsive mt-0">
        <div class="table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2 style="text-align: center;">Manage Contacts</h2>
              </div>

            </div>
          </div>
          <?php
          include "_dbconnect.php";
          $q = "select * from contact_us";
          $result = mysqli_query($conn, $q) or die("query unsessfull");
          $row = mysqli_num_rows($result);
          if ($row > 0) {


          ?>
            <table class="table table-striped table-hover">
              <thead>
                <tr>

                  <th>S.no</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {


                ?>
                  <tr>

                    <td><?php echo $row['S_No']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['p_num']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                  </tr>
                <?php  } ?>
              </tbody>
            </table>
          <?php
          } else {
            echo "<h1> No data found</h1>";
          }
          ?>
          <!--
                <div class="clearfix">
                  <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                  <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item active"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul>
                </div>
                -->
        </div>
      </div>
    </div>
    <!-- Manage contacts end -->
    <!-- Change password -->
    <div class="container" style="background-image: linear-gradient(white, skyblue, white);">
      <div class="modal-dialog" role="document" id="Cpswd" style="display: none;  ">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 ">Change Password</h4>

          </div>
          <form action="Actions.php" method="POST">
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


                <span style='color:green;'>
                  <?php
                  if (@$_GET['Success']) {
                    echo @$_GET['Success'];
                  }
                  if (@$_GET['Match']) {
                    echo @$_GET['Match'];
                  }
                  ?>

                </span>

              </div>
              <div class="md-form mb-4">

                <input type="submit" name="pchgebtn" value="Change password" id="defaultForm-pass" class="form-control validate" style="background-color:#165c8d; color:white">

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Change password end-->
  </div>
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