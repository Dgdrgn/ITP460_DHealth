<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="childcheckstyle.css">
    <title>Child Check Login</title>

    <style></style>

</head>

<body>

<div id="containerlogin">

    <div id="header">
        <img src="childchecklogo.png" alt="Child Check">
    </div>


    <form name="login" action="php/process_login.php" method="get" accept-charset="utf-8">
        <input type="email" name="usermail" placeholder="Username" required><br/>
        <input type="password" name="password" placeholder="Password" required><br/>
        <div id="forgotpassword">
            FORGOT YOUR PASSWORD?
        </div>
        <input type="submit" value="Submit">
    </form>

    <hr/>

</div>

</body>

<!--
Link submit button to home page
Have not added any bootstrap elements yet
Need to upload fonts - match size and color to style guide
Figure out when uploading child picture, that they are evenly spaced-->
