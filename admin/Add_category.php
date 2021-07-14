<!--Author Akash bhopewal-->
<?php
              
    if(isset($_POST['cateaddbtn'])){
    
      include '_dbconnect.php';
    $errors = array();
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $file_type = $_FILES['img']['type'];

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

    $Category=$_POST['category_name'];
    

    $q="insert into category (category_name,logo) values ('$Category','$file_name')";

    $result=mysqli_query($conn, $q);

  } 
          
?>