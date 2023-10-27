<?php
session_start();
if (isset($_SESSION['username'])){
  header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login & Registration Form | Code</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="form-wrapper sign-in">
        <h2 style="color: #0ef;font-size: 16px;">
        <?php 
        echo 'Welcome ' . $_SESSION["username"];
        echo "<br/>";
        echo "Logout <a href='logout.php'>Here</a>";
        ?>
        <h2>
    </div>
</div>
</body>
</html>