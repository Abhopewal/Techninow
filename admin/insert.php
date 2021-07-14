            <!--Author_Akash kumar-->
            <?php


$username=$_POST['username'];
$password=sha1($_POST['password']);


    $con=mysqli_connect("localhost", "root") or die("Connection falid");
    mysqli_select_db($con, "techninow");
    $q="insert into admin (username,password) values ('$username','$password') ";
    $result=mysqli_query($con, $q);
    if($result==1){
        header('location:http://localhost/techninow/login.php');
    }
    else{
        header('location:http://localhost/techninow/signup.php');
    }

?>