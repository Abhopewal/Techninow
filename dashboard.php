             <!--Author_Akash kumar-->
<?php
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/techninow/login.php');
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $conn=mysqli_connect("localhost", "root") or die("connection falid");
  mysqli_select_db($conn, "techninow");
  if(isset($_FILES['image'])){
    $dp=$_FILES['image']['name'];
  }
  $userbio = $_POST["userbio"];
  $q="insert into userprofile (userprofile) values ('$userbio') ";
  $result = mysqli_query($conn, $q);
  
  if ($result == 1) {
   
  }
  else{
    
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile <?php
      echo $_SESSION['username'];
      ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="icon" href="Images/Techninow.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <?php
      
      if (!isset($_SESSION['username']))
      {
        echo '<div class="mx-2">
    <button class="btn btn-danger">Login</button>
    <button class="btn btn-danger">SignUp</button>
    </div>';
      } 
      ?>
      <?php
      if (isset($_SESSION['username']))
      {
        echo '<form class="form-inline my-0 my-lg-0">
        <div class="btn-group dropbottom">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            <img src="Images/user.png" width="40" height="40" class="rounded-circle">
            <span>
            
           ' . $_SESSION['username'] . '
                       
              </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <p> Hello ' . $_SESSION['username'] .' Welcome !   </p><hr>
            
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



  <div class="side-menu">

    <center>
      <img src="images/$dp" alt="" style="height: 100px;">
      <br><br>
      <h2>
        <?php
        echo 'Welcome  '  . $_SESSION['username'];
        ?>
      </h2>
      <p style="text-align: left;">
      <?php
      //echo $_SESSION['username'];
      ?>
      </p>
    </center>

    <br>
    
    <div class="profile">
    <button id="btn22" onclick="toggleHide()" style="width: 250px; border-radius:10px; font-size:17px; margin-bottom:10px; background-color:rgb(209, 108, 43); color:white;">Edit profile</button>
    <form action="dashboard.php" method="POST" enctype="multipart/form-data" >
    <textarea name="userbio" id="inputPassword" cols="25" rows="3" style="display:none"></textarea>
    
    <input type="file" name="image" id="userdp" style="display:none; margin:10px 10px; ">
    <span><input type="submit" value="Save" class="badge badge-pill badge-primary" id="save" style="display:none;"></span>
    <span><button class="badge badge-pill badge-secondary" onclick="toggleHide()" id="cancel" style="display:none;">Cancel</button></span>
    </form>
    </div>
    
   

    <a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>

    <a href="contact.php"><i class="fa fa-envelope"></i><span>Contact Us</span></a>

    <a href="logout.php"><i class="fa fa-sign-out"></i><span>Log out</span></a>
  


  </div>

  <div class="data">

  </div>






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


  <script>
    function toggleHide(){
    let btn22 = document.getElementById('btn22');
    let edit = document.getElementById('inputPassword');    
    let userdp = document.getElementById('userdp');
    let save = document.getElementById('save');
    let cancel = document.getElementById('cancel');
    
    if(edit.style.display != 'none'){
      edit.style.display = 'none';
    }
    else{
     edit.style.display = 'inline'; 
    }
    if(save.style.display != 'none'){
      save.style.display = 'none';
    }
    else{
     save.style.display = 'inline'; 
    }
    if(cancel.style.display != 'none'){
      cancel.style.display = 'none';
    }
    else{
     cancel.style.display = 'inline'; 
    }
    if(userdp.style.display != 'none'){
      userdp.style.display = 'none';
    }
    else{
     userdp.style.display = 'inline';
    }
    
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>