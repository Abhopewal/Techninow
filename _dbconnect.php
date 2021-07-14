<!--Author Akash bhopewal-->
<?php

$host_username = "root";
$host_password = "Akash123@";
$database = "techninow";
$host_1="//localhost/techninow";

$conn = mysqli_connect("localhost", $host_username, $host_password);
mysqli_select_db($conn, $database);
if (!$conn){
    
   // echo "success";
//}
//else{
    die("connection not establish".mysqli_connect_error());
}
?>