<?php require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="../childcheckstyle.css">

<title>Child Check Login</title>

<style></style>

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
	<img src="../childchecklogo.png" style="width: 100%;" alt="Child Check">
</div>
 

<form name="login" action="../process_login.php" method="get" accept-charset="utf-8">
    <input type="email" name="usermail" placeholder="Username" style="height: 40px;" required><br/>
    <input type="password" name="password" placeholder="Password" style="height: 40px;" required><br/><br/>
    	<div id="forgotpassword"><a href="#">
			FORGOT YOUR PASSWORD?<br/></a>
			<span style="margin-top: 10px;"><a href="../signup/index.php">FIRST-TIME USER?</a></span>
        </div>
        <input type="submit" value="SUBMIT">
        </form>
        <div class="brc"></div>

</div>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

<!--
Link submit button to home page
Have not added any bootstrap elements yet
Need to upload fonts - match size and color to style guide
Figure out when uploading child picture, that they are evenly spaced-->
