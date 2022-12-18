<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login | Hubient</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="navbar">
    <img src="hubientLogo.png" alt="Hubient Logo" class="logo" title="Hubient">
    <ul>
      <li><a href="mainpage.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>

  <div class="center">
    <h1>Login</h1>
    <form method="post" action="toLogin.php">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>

      <div class="txt_field">
        <input type="password" name="psw" required>
        <span></span>
        <label>Password</label>
      </div>

      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Not a member? <a href="register.php">Signup</a>
      </div>
    </form>
  </div>




</body>

</html>