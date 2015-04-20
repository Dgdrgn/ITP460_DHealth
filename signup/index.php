<?php require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="icon" href="../images/favicon.ico">
    <title>Child Check Signup</title>

    <script language="JavaScript">
        function passwordCheck() {
            var userCheck = document.getElementById('username').value;
            var passCheck = document.getElementById('password').value;
            var passCheck2 = document.getElementById('passwordConfirm').value;
            var passwordRegex =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}/;


            if (userCheck == "") {
                alert("Error: Username cannot be blank!");
                return false;
            }

            if (userCheck != "" && passCheck == passCheck2) {
                if (passCheck.length < 8) {
                    alert("Error: Password must contain at least eight characters!");
                    return false;
                }
                if (userCheck == passCheck) {
                    alert("Error: Password must be different from Username!");
                    return false;
                }
                if(!passwordRegex.test(passCheck)) {
                    alert("Error: Password must be 8-32 characters and must include at least one upper case letter, one lower case letter, and one number.);
                    return false;
                }
            }
        }


    </script>

    <style>
        .page{
            width: 100%;
        }
        label, input {
            display: inline-block;
        }
        label {
            width: 30%;
            text-align: right;
        }
        label + input {
            width: 30%;
            margin: 0 30% 0 4%;
        }
        input + input {
            float: right;
        }
    </style>

</head>

<body>
<?php
if(isset($_SESSION['messages'])) {
    echo $msgs->print_message($_SESSION['messages']);
    unset($_SESSION['messages']);
}
?>
<div id="containerlogin">

    <div id="header">
        <a href="../"><img src="../childchecklogo.png" style="width: 100%;" alt="Child Check"></a>
    </div>

    <div style="margin-left: auto; margin-right: auto;">

        <form id="multiForm" method="post" action="../create_login.php" >
            <div id="page1" class="page" style="visibility:visible;">
                ACCOUNT SETUP
                <p><label>FIRST NAME </label><input type="text" id="fname" name="fname" style="width: 350px;"></p>
                <p><label>LAST NAME </label><input type="text" id="lname" name="lname" style="width: 350px;"></p>
                <p><label>EMAIL</label> <input type="text" id="username" name="username" size="20" style="width: 350px;"></p>
                <p><label>PASSWORD </label><input type="password" id="password" name="password" style="width: 350px;"></p>
                <p><label>CONFIRM PASSWORD </label> <input type="password" id="passwordConfirm" name="passwordConfirm" style="width: 350px;"></p>
                <p><input type="submit" onclick="passwordCheck()" id="C1" value="Continue" ></p>
            </div>
        </form>

    </div>

    <hr/>

</div>



</body>