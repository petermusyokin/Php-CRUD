<?php

session_start();
$con =mysqli_connect("localhost","root","","userregistration");

mysqli_select_db($con,'userregistration');
$name = $_POST['name'];
$pass = $_POST['password'];

$select = "SELECT * FROM usertable WHERE name='$name'&& password='$pass'";
$result = mysqli_query($con,$select);
$num = mysqli_num_rows($result);

if ($num==1){
    $_SESSION['username'] =$name;
    header('location:home.php');
}else{
    header('location:pageOne.php');
}

?>