<!--Author Akash bhopewal-->
<?php
$hostpath="localhost";
$host="localhost";
$user="root";
$password="";
$conn = mysqli_connect($host, $user, $password) or die("Connetion not establish");
mysqli_select_db($conn, "techninow");
?>