<?php

session_start();
header('location:pageOne.php');
$con =mysqli_connect("localhost","root","","userregistration");

mysqli_select_db($con,'userregistration');
$name = $_POST['name'];
$pass = $_POST['password'];

$select = "SELECT * FROM usertable WHERE name='$name'";
$result = mysqli_query($con,$select);
$num = mysqli_num_rows($result);

if ($num==1){
    echo "username already taken";
}else{
   $reg = "insert into usertable (name,password) values ('$name','$pass')";
   mysqli_query($con,$reg);
   echo "registration successful";
}

?>