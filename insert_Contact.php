            <!--Author_Akash kumar-->
<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phonenum'];
$email=$_POST['email'];
$usermsg=$_POST['usermsg'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'techninow');
$q="insert into usercontact (firstname,lastname,phone_number,email,message) values ('$firstname','$lastname','$phone','$email','$usermsg') ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:http://localhost/techninow/signup.php');
}
else
{
    header('location:http://localhost/techninow/login.php');
}
mysqli_close($con);
?>
