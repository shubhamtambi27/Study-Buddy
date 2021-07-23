<?php
    include "config.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "insert into login(email, password) VALUES('$email','$password')"  ;
    $result = mysqli_query($con,$q);
    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }
    else {	
    header('location: login.htm');
    exit();
    } 
?>