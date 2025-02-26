<?php
$host="localhost
$user="root";
$password="";
$db="login";
$conn=mysqli_connect($host,$user,$password,$db);
if($conn->connet_error){
echo"Failed to connect DB".$conn->connect_error;
}
?>