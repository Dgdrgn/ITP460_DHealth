<?php require_once('../check_login.php'); require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="icon" href="../images/favicon.ico">
    <title>Child Check Add Child</title>

    <script language="JavaScript">
        var currentLayer = 'page1';
        function showLayer(lyr){
            var password = document.getElementById("password").value;
            var passwordConfirm = document.getElementById("passwordConfirm").value;
            var error = 0;
            if(password == passwordConfirm) { //Check to see if passwords match
                hideLayer(currentLayer); //Hide current later
                document.getElementById(lyr).style.visibility = 'visible'; //Reveal next layer
                currentLayer = lyr;
            }
            else{
                alert("Please make sure your passwords match"); //Alert if passwords do not match
            }
        }
        function showValues(form){ //Displays entered values
            var values = '';
            var len = form.length - 1; //Leave off Submit Button
            for(i=0; i<len; i++){
                if(form[i].id.indexOf("C")!=-1||form[i].id.indexOf("B")!=-1)//Skip Continue and Back Buttons
                    continue;
                values += form[i].id;
                values += ': ';
                values += form[i].value;
                values += '\n';
            }
            alert(values);
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
            width: 100px;
            text-align: right;

        }
        label + input {
            width: 200px;
            margin: 0 20% 0 4%;;
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

    <div style="margin-left: auto; margin-right: auto; width: 600px;">

        <form id="multiForm" method="post" action="../create_child.php">

            <div id="page2" class="page"><br/>
                <p style="font-family: robotoBold">ADD A CHILD</p>
                <p><label>ENTER YOUR CHILD'S CODE:</label> <input type="text" name="code" id="code" size="200" style="width: 350px;"></p>
                <p><label>ENTER YOUR CHILD'S BIRTHDATE:</label> <input type="date" name="birthdate" id="birthdate" style="height: 40px; width: 350px;"></p>
                <p><input type="button" id="B1" value="Go Back" onclick="location.href='../home'" style="height: 40px; width: 211px;"></p>
                <p style="margin: auto; display: block; width: 100px;"><input type="submit" style="width: 100%;" value="Submit" id="submit"></p>
            </div>



        </form>

    </div>

    <hr/>

</div>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>


</body>