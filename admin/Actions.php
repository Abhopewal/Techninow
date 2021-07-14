<!--Author Akash bhopewal-->
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:http://localhost/techninow/admin/index.php");
}
?>
<?php
if (isset($_POST['pchgebtn'])){
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
             
                header("location:http://localhost/techninow/admin/admin-dash.php?Success=Password Changed Successful");
            }
        }
        else{
            $_SESSION['cp_not_match']="Current password or Name not match";
            header("location:http://localhost/techninow/admin/admin-dash.php?Match=Current password or Name not match");
        }

    }
    else{
        $_SESSION['password_not_match']="Password does not match please try again !";
        header("location:http://localhost/techninow/admin/admin-dash.php");
    }
}


if(isset($_POST['userbiobtn'])){
    include '_dbconnect.php';
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $exp=explode('.', $file_name);
    $file_ext = end($exp);

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext, $extensions)=== false)
    {
        $errors[]="This extension file not allowed, please choose a JPG or PNG file";
        header("location:http:{$host_1}/admin/Admin-dash.php");
    }
    if($file_size > 2097152){
        $errors[]="file size must be 2 MB  or Lower";
        header("location:http:{$host_1}/admin/Admin-dash.php");
    }
    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "upload/".$file_name);
        header("location:http:{$host_1}/admin/Admin-dash.php");
    }
    else{
        print_r($errors);
        die();
    }
    session_start();
    $userbio = $_POST['userbio'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    
    $sec=$_SESSION['username'];
    
    $sql="update admin set Bio = '$userbio', Website = '$website', Facebook = '$facebook', Image= '$file_name' where username = '$sec' ";
    $result = mysqli_query($conn, $sql);



}

if(isset($_POST['cateaddbtn'])){
    include '_dbconnect.php';
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $exp=explode('.', $file_name);
    $file_ext = end($exp);

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext, $extensions)=== false)
    {
        $errors[]="This extension file not allowed, please choose a JPG or PNG file";
        header("location:http:{$host_1}/admin/Admin-dash.php");
    }
    if($file_size > 2097152){
        $errors[]="file size must be 2 MB  or Lower";
        header("location:http:{$host_1}/admin/Admin-dash.php");
    }
    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "upload/".$file_name);
        header("location:http:{$host_1}/admin/Admin-dash.php");
    }
    else{
        print_r($errors);
        die();
    }
}
?>
