<!--Author Akash bhopewal-->
<?php
    session_start();
if (isset($_POST['subbtn'])) {
    if(isset($_SESSION['user'])){
        $cmt = $_POST['cmt'];
        $name = $_SESSION['user'];
        $time = date("d M Y");
    }
    else{
        $cmt = $_POST['cmt']; 
        $name = $_POST['name'];
        $time = date("d M Y");
        
    }
    
   
    include "admin/_dbconnect.php";
    $q = "insert into comments (comment,name,time) values ('$cmt','$name','$time')";
    $result = mysqli_query($conn, $q);
   
        header("location:http://localhost/techninow/index.php");   
}


if (isset($_POST['userbiobtn'])) {
    include 'admin/_dbconnect.php';
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $exp=explode('.', $file_name);
    $file_ext = end($exp);

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext, $extensions) === false)
    {
        $errors[]="This extension file not allowed, please choose a JPG or PNG file";
        header("location:http:{$host_1}/User-dash.php");
    }
    if($file_size > 2097152){
        $errors[]="file size must be 2 MB  or Lower";
        header("location:http:{$host_1}/User-dash.php");
    }
    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "Admin/upload/".$file_name);
        header("location:http:{$host_1}/User-dash.php");
    }
    else{
        print_r($errors);
        die();
    }
    
    session_start();
    $userbio = $_POST['userbio'];
    $website = $_POST['Website'];
    $facebook = $_POST['Facebook'];
    $user_id = $_SESSION['u_id'];
    $q="select * from user_bio where user_id='$user_id'";
    $result=mysqli_query($conn, $q);
    $row=mysqli_num_rows($result);
    if($row>0){
        $q1="update user_bio set Bio='$userbio',Website='$website',Facebook='$facebook',Image='$file_name' where user_id='$user_id'";
        mysqli_query($conn,$q1);
    }
    else{
        $q2="insert into user_bio (Bio,Website,Facebook,Image,user_id) values ('$userbio',' $website','$facebook','$file_name',$user_id)";
        $result=mysqli_query($conn,$q2) or die ("error");
    }

    

    header("location:http:{$host_1}/User-dash.php?uid=$user_id");
}


if(isset($_POST['workbtn'])){
    include 'admin/_dbconnect.php';
    $company = $_POST['company'];
    $role = $_POST['role'];
    $desc = $_POST['desc'];
    $user_id = $_SESSION['u_id'];
    $sql = "select * from user_work where user_id = '$user_id'";
    $uresult = mysqli_query($conn, $sql) or die ("query faild 300");
    $row = mysqli_num_rows($uresult);
    if($row>0){
        $sq = "update user_work set company = '$company', role = '$role', discription = '$desc' where user_id = '$user_id'";
        mysqli_query($conn, $sq);
        header("location:http:{$host_1}/User-dash.php?uid=$user_id");
    }
    else{
    $q = "insert into user_work (company,role,discription,user_id) values ('$company','$role','$desc','$user_id')";
    $result = mysqli_query($conn, $q) or die("query faild 100");
        header("location:http:{$host_1}/User-dash.php?uid=$user_id");
    }
    
}

if(isset($_POST['edubtn'])){
    include 'admin/_dbconnect.php';
    $school = $_POST['school'];
    $program = $_POST['program'];
    $degree = $_POST['degree'];
    $disc = $_POST['disc'];
    $user_id = $_SESSION['u_id'];
    $sql = "select * from user_edu where user_id = '$user_id'";
    $Result = mysqli_query($conn, $sql) or die("query faild 102" );
    $row = mysqli_num_rows($Result);
    if($row>0){
        $q = "update user_edu set school = '$school', program = '$program', degree = '$degree', discription = '$disc' where user_id = '$user_id'";
        $result = mysqli_query($conn, $q) or die ("query falid 264");
        header("location:http:{$host_1}/User-dash.php?uid=$user_id");
    }
    else{
        $q = "insert into user_edu (school,program,degree,discription,user_id) values ('$school','$program','$degree','$disc','$user_id')";
        $result = mysqli_query($conn, $q) or die("query faild 105");
        if($result==1){
            header("location:http:{$host_1}/User-dash.php?uid=$user_id");
        }
    }
  
        
        
    
}

?>
  