<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <title>Child Check Signup</title>

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

<div id="containerlogin">

    <div id="header">
        <img src="../childchecklogo.png" style="width: 100%;" alt="Child Check">
    </div>

    <div style="margin-left: auto; margin-right: auto;">

        <form id="multiForm" method="post" action="../create_login.php">
            <div id="page1" class="page" style="visibility:visible;">
                ACCOUNT SETUP
                <p><label>PLEASE ENTER A USERNAME</label> <input type="text" id="username" name="username" size="20" style="width: 350px;"></p>
                <p><label>PASSWORD </label><input type="password" id="password" name="password" style="width: 350px;"></p>
                <p><label>CONFIRM PASSWORD </label> <input type="password" id="passwordConfirm" name="passwordConfirm" style="width: 350px;"></p>
                <p><input type="submit" id="C1" value="Continue" ></p>
            </div>
        </form>

    </div>

    <hr/>

</div>



</body>