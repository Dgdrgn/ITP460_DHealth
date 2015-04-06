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

        function passwordChecker(pw){
            if(pw.length<8){
                alert("Your password must be 8 characters or more.");
            }
            if (pw == pw.toUpperCase() || pw == pw.toLowerCase()){
                alert("Your password must have upper and lower case characters.");
            }
            var looking1 = "!";
            var looking2 = "@";
            var looking3 = "#";
            var looking4 = "$";
            var looking5 = "%";
            var looking6 = "^";
            var looking7 = "&";
            var looking8 = "*";
            var looking9 = "(";
            var looking0 = ")";
            var tracking= 0;

            if (pw.indexOf(looking1) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking2) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking3) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking4) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking5) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking6) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking7) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking8) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking8) >0) {
                tracking = tracking +1;
            }
            if (pw.indexOf(looking9) >0) {
                tracking = tracking +1;
            }
            if(tracking ==0){
                alert("Your password must contain a special character");
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

<div id="containerlogin">

    <div id="header">
        <img src="childchecklogo.png" style="width: 100%;" alt="Child Check">
    </div>

    <div style="margin-left: auto; margin-right: auto;">

<<<<<<< Updated upstream
        <form id="multiForm" method="post" action="create_login.php">
            <div id="page1" class="page" style="visibility:visible;">
                ACCOUNT SETUP
                <p><label>PLEASE ENTER A USERNAME</label> <input type="text" id="username" name="username" size="20" style="width: 350px;"></p>
                <p><label>PASSWORD </label><input type="password" id="password" name="password" style="width: 350px;"></p>
                <p><label>CONFIRM PASSWORD </label> <input type="password" id="passwordConfirm" name="passwordConfirm" style="width: 350px;"></p>
                <p><input type="submit" id="C1" value="Continue" ></p>
            </div>
        </form>
=======
    <form id="multiForm" method="post" action="add_child.php">
        <div id="page1" class="page" style="visibility:visible;">

            ACCOUNT SETUP
            <p><label>PLEASE ENTER A USERNAME</label> <input type="text" id="username" size="20" maxlength="20px" style="width: 350px;"></p>
            <p><label>PASSWORD </label><input type="password" id="password"  style="width: 350px;"  onchange="passwordChecker(this.value)" ></p> <!// must be 8 charactes, must include numbers and symbols//!>
            <p><label>CONFIRM PASSWORD </label> <input type="password" id="passwordConfirm" style="width: 350px;"></p>
            <p><input type="submit" id="C1" value="Continue" ></p>

        </div>


    </form>
>>>>>>> Stashed changes

    </div>

    <hr/>

</div>



</body>