<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="childcheckstyle.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
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
        function hideLayer(lyr){
            document.getElementById(lyr).style.visibility = 'hidden';
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
            position: absolute;
            visibility: hidden;
            width: 80%;
        }
    </style>

</head>

<body>

<div id="containerlogin">

    <div id="header">
        <img src="childchecklogo.png" style="width: 100%;" alt="Child Check">
    </div>

<div style="margin-left: auto; margin-right: auto;">

    <form id="multiForm" method="post" action="javascript:void(0)" onSubmit="showValues(this)">
        <div id="page1" class="page" style="visibility:visible;">
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
                    0%
                </div><br/>
            </div>
            ACCOUNT SETUP
            <p>PLEASE ENTER A USERNAME <input type="text" id="username"></p>
            <p>PASSWORD <input type="text" id="password""></p>
            <p>CONFIRM PASSWORD <input type="text" id="passwordConfirm"></p>
            <p><input type="button" id="C1" value="Continue" onClick="showLayer('page2')" ></p>
        </div>
        <div id="page2" class="page">
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 50%;">
                    50%
                </div>
            </div><br/>
            ADD A CHILD
            <p>ENTER CHILD CODE: <input type="text" id="code"></p>
            <p>ENTER CHILD'S BIRTHDATE: <input type="text" id="birthdate"></p>
            <p><input type="button" id="B1" value="Go Back" onClick="showLayer('page1')">
            <p><input type="submit" value="Submit" id="submit"></p>
        </div>
        <div id="page3" class="page">
            FIN
        </div>



    </form>

</div>

    <hr/>

</div>



</body>