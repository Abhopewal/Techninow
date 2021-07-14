            <!--Author_Akash kumar-->
<?php
session_start();
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=sha1($_POST['Password']);
$CPassword=sha1($_POST['CPassword']);

if($Password==$CPassword){
    $con=mysqli_connect("localhost", "root") or die("Connection falid");
    mysqli_select_db($con, "techninow");
    $q="insert into user (FirstName,LastName,Email,Password) values ('$FirstName','$LastName','$Email','$Password') ";
    $result=mysqli_query($con, $q);
    if($result==1){
        header('location:http://localhost/techninow/login.php');
    }
    else{
        header('location:http://localhost/techninow/signup.php');
    }
}
else{
    $_SESSION['Wrong'] = "password does not match";
}
?>
