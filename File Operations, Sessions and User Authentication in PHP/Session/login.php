<?php
session_start();
$email = $_POST['email']??'';
$password = $_POST['password'] ??'';

$errorMessage = '';

if(isset($_SESSION['username'])){
    header("Location:index.php");
}
if($email == 'Hridoy@gmail.com' && $password == '12345') {
    $_SESSION['username'] = 'Hridoy';
    header("Location:index.php");
}elseif($email == 'Rabby@gmail.com' && $password == '12345') {
    $_SESSION['username'] = 'Rabby';
    header("Location:index.php");
}elseif($email != '' || $password != '') {
    $errorMessage = 'Invalid email & password';
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
      <form action="index.php" method="POST">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div style="color:red;"><?php echo $errorMessage; ?></div>
        <div class="remember">
          <label><input type="checkbox" required> Remember me</label>
        </div>
        <button type="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <!-- <div class="form-wrapper sign-up">
      <form action="">
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button type="submit">Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
        </div>
      </form> -->
    </div>
  </div>
  <script src="">
  const signInBtnLink = document.querySelector('.signInBtn-link');
    const signUpBtnLink = document.querySelector('.signUpBtn-link');
    const wrapper = document.querySelector('.wrapper');
    signUpBtnLink.addEventListener('click', () => {
        wrapper.classList.toggle('active');
    });
    signInBtnLink.addEventListener('click', () => {
        wrapper.classList.toggle('active');
    });
    </script>
</body>
</html>