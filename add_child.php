<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="childcheckstyle.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
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
            width: 80%;
        }
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
        <img src="childchecklogo.png" style="width: 100%;" alt="Child Check">
    </div>

    <div style="margin-left: auto; margin-right: auto;">

        <form id="multiForm" method="post" action="create_child.php">

            <div id="page2" class="page"><br/>
                ADD A CHILD
                <p><label>ENTER CHILD CODE:</label> <input type="text" id="code" size="200" style="width: 350px;"></p>
                <p><label>ENTER CHILD'S BIRTHDATE:</label> <input type="text" id="birthdate" style="width: 350px;"></p>
                <p><input type="button" id="B1" value="Go Back" onclick="history.go(-1);" style="width: 211px;">
                <p><input type="submit" value="Submit" id="submit"></p>
            </div>



        </form>

    </div>

    <hr/>

</div>



</body>