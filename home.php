<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:pageOne.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
<a href="logout.php" style="float: right">Log out</a>
<h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
</div>
</body>
</html>
