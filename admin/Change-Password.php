<!--Author Akash bhopewal-->
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:http://localhost/techninow/admin/index.php");
}
?>
<?php
if (isset($_POST['submitbtn'])){
    $username=$_POST['name'];
    $current=sha1($_POST['current']);
    $new=sha1($_POST['new']);
    $confirm=sha1($_POST['confirm']);
   
    if($new==$confirm){
        include "_dbconnect.php";
        $q="select * from admin where username='$username' and password='$current'";
        $result=mysqli_query($conn, $q) or die("query faild");
        $rows=mysqli_num_rows($result);
        if($rows>0){
            $q2="update admin set password = '$confirm' where username='$username'";
            $result2=mysqli_query($conn, $q2) or die ("update query falid");
            
            if($result2==1){
                $_SESSION['Success']="Password Changed Successful";
                header("location:http://localhost/techninow/admin/admin-dash.php");
            }
        }
        else{
            $_SESSION['cp_not_match']="Current password or Name not match";
            header("location:http://localhost/techninow/admin/admin-dash.php");
        }

    }
    else{
        $_SESSION['password_not_match']="Password does not match please try again !";
        header("location:http://localhost/techninow/admin/admin-dash.php");
    }
}
?>