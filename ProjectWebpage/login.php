<?php
include "config.php";
$email = $_POST['email'];
$password = $_POST['password'];
$q = " select * from login where email = '$email' && password='$password' ";
$result = mysqli_query($con,$q);
$row = mysqli_num_rows($result);
if($row == 1){

	header('location:home.htm');	
}
else{
	header('location:404.html');
}
?>