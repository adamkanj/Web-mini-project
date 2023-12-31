<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../styles/Form.css" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../icons.css" />
</head>

<body>
    <h1>Sign Up:</h1>
    <div class="row right-content" id="header">
        <div id="dropdown-menu">
        </div>
    </div>

    <div class="paragraph" style="border:0;">
        <form action="../BE/SignUp.php" method="POST" name="signup-form">
            <label for="un">User Name</label>
            <br>
            <input type="text" name="username" class="txtfield">
            <br>
            <label for="un">First Name</label>
            <br>
            <input type="text" name="firstname" class="txtfield">
            <br>
            <label for="un">Last Name</label>
            <br>
            <input type="text" name="lastname" class="txtfield">
            <br>
            <label for="pass">Password</label>
            <br>
            <input type="password" name="pass" class="txtfield">
            <br>
            <label for="pass">Confirm Password</label>
            <br>
            <input type="password" name="confirmPassword" class="txtfield">

            <br><br>
            <input type="radio" name="sex" checked id="r-male" value="m">
            <label for="r-male">Male</label>
            <input type="radio" name="sex" id="r-female" value="f">
            <label for="r-female">Female</label>
            <br><br>
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate">
            <br>
            <br>
            <input type="button" value="Sign Up" class="mButton" onclick="SignUp()">
            <input type="button" value="Cancel" class="mButton" onclick="ClearForm()">
        </form>
    </div>

    <script>
        function SignUp() {
            var mForm = document.querySelector("form[name='signup-form']");
            var un = mForm.elements["username"].value;
            var fn = mForm.elements["firstname"].value;
            var ln = mForm.elements["lastname"].value;
            var pass = mForm.elements["pass"].value;
            var confPass = mForm.elements["confirmPassword"].value;
            var sex = mForm.elements["sex"].value;
            var birthday = mForm.elements["birthdate"].value;
            console.log("fn:" + fn);
            console.log("ln:" + ln);
            console.log("pass:" + pass);
            console.log("confPass:" + confPass);

            if ((pass != confPass) || (pass == ""))
                alert("Passwords must be equal.");
            else
                mForm.submit();
        }

        function ClearForm() {
            var mForm = document.querySelector("form[name='signup-form']");
            mForm.elements["username"].value = ""
            mForm.elements["firstname"].value = "";
            mForm.elements["lastname"].value = "";
            mForm.elements["pass"].value = "";
            mForm.elements["confirmPassword"].value = "";
            mForm.elements["sex"].value = "m";
            mForm.elements["birthdate"].value = "";
        }
    </script>

</body>

</html>