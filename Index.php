<?php
session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="styles/Form.css" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <h1>Log In:</h1>
    <div class="row right-content" id="header">
        <div id="dropdown-menu">
        </div>
    </div>

    <div class="paragraph" style="border: 0;">
        <form action="BE/LogIn.php" method="POST" id="login-form">
            <label for="un">User Name</label>
            <br>
            <input type="text" name="username" id="un" class="txtfield">
            <br>
            <label for="pass">Password</label>
            <br>
            <input type="password" name="password" id="pass" class="txtfield">
            <br>
            <input type="button" value="Login" onclick="login()" class="mButton">
            <input type="button" value="Cancel" onclick="ClearForm()" class="mButton">
        </form>
        <a href="Pages/SUpage.php">Sign Up...</a>
    </div>

    <script>
        function login() {
            var un = document.getElementById("un").value;
            var pass = document.getElementById("pass").value;
            if ((un == "") || (pass == "")) {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }

        }

        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>
</body>

</html>