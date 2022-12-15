<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Hubient Bar & Lounge</title>
    <link rel="stylesheet" href="register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        function check() {
            var pass = document.getElementById("password").value;
            var conpass = document.getElementById("conpassword").value;
            var btn = document.getElementById("signup")

            if (pass === conpass) {
                document.getElementById("message").innerHTML = "Password is matched";
                btn.removeAttribute("disabled", "");
            } else {
                document.getElementById("message").innerHTML = "Password was not matched";
                btn.setAttribute("disabled", "");
            }

            if (pass == "" || conpass == "") {
                document.getElementById("message").innerHTML = "";
            }
        }
    </script>
    
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
        <h1>Register</h1>
        <form method="post" action="toRegister.php">
            <div class="txt_field">
                <input type="text" name="fname" required>
                <span></span>
                <label>First Name</label>
            </div>

            <div class="txt_field">
                <input type="text" name="lname" required>
                <span></span>
                <label>Last Name</label>
            </div>

            <div class="txt_field">
                <input type="text" name="email" required>
                <span></span>
                <label>Email Address</label>
            </div>


            <div class="txt_field">
                <input type="text" name="num" required>
                <span></span>
                <label>Phone Number</label>
            </div>

            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="psw" id="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="txt_field">
                <input type="password" name="confpsw" id="conpassword" onkeyup="check()" required>
                <span></span>
                <label>Confirm Password</label>
                <span id="message"></span>
            </div>


            <input disabled id = "signup" type="submit" value="Signup">

        </form>
    </div>

</body>

</html>