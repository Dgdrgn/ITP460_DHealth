<?php require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link rel="icon" href="../images/favicon.ico">

<title>Child Check Home</title>

<style></style>

</head>

<body>
<?php
if(isset($_SESSION['messages'])) {
    echo $msgs->print_message($_SESSION['messages']);
    unset($_SESSION['messages']);
}
?>
<div id="containerhome">

<div id="header">
	<img src="../childchecklogo.png" style="width: 100%;" alt="Child Check">
</div>


<div id="welcome">
<div id="header1">
WELCOME!</div></div>

<div id="choosechild">
<div id="header2">
CHOOSE YOUR CHILD:<br/>

<div id="kid-container" align="center">

</div>
<script type="text/handlebars" id="children-template">
    <div class="box">
        <div id="kidLabel">{{first_name}} {{last_name}}</div>
        {{#if_eq gender "m"}}
            <a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/babyBoy.png" alt="{{first_name}}">
            </a><br/>
        {{else}}
            <a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/girl-toddler.png" alt="{{first_name}}">
            </a><br/>
        {{/if_eq}}
    </div>
</script>
	
</div>
</div>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/handlebars-v2.0.0.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/home_template.js"></script>
</body>
</html>
