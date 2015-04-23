<?php require_once('../check_login.php'); require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="../js/modernizr.js"></script>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
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

    <div class="cd-header">
        <a href="../"><div class="logo"><img src="../images/small-logo.png" alt="Child Check"/></div></a>

        <div class="nav-container">
            <ul class="cd-secondary-nav"><li><a href="../process_logout.php">Log Out</a></li></ul>
        </div>

        <a class="cd-primary-nav-trigger" href="#0">
            <span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
        </a>
    </div>
    <br>
    <div>
        <ul class="cd-primary-nav">
            <li class="cd-label">Children</li>
            <div id="children-links"></div>
            <script type="text/handlebars" id="children-link">
			    <li><a href="../profile?id={{mrn}}&last_name={{last_name}}">{{first_name}} {{last_name}}</a></li>
		    </script>

            <li class="cd-label">Settings</li>

            <li><a href="#0">Account Settings</a></li>


            <li class="cd-label">Need Help?</li>

            <li><a href="../faq">FAQ</a></li>
            <li><a href="../about">About ChildCheck</a></li>
        </ul>
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
        {{#if_eq age_group 1}}
            <a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/icon1.png" alt="{{first_name}}">
            </a><br/>
        {{else}}
        	{{#if_eq age_group 2}}
            	<a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/icon2.png" alt="{{first_name}}">
            </a><br/>
            {{else}}
            	{{#if_eq age_group 3}}
            		<a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/icon3.png" alt="{{first_name}}">
            </a><br/>
            	{{else}}
            		{{#if_eq age_group 4}}
            			<a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/icon4.png" alt="{{first_name}}">
            </a><br/>
					{{else}}
            			<a href="../profile?id={{mrn}}&last_name={{last_name}}"><img src="../images/icon5.png" alt="{{first_name}}">
            </a><br/>
					{{/if_eq}}
				{{/if_eq}}
			{{/if_eq}}
        {{/if_eq}}
    </div>
</script>
	
</div>
</div>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/handlebars-v2.0.0.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/home_template.js"></script>

	<script src="../js/main.js"></script>
	<script>
	$( document ).ready(function() {
		$(window).on('scroll',
			{
			    previousTop: 0
			}, 
			function () {
			    var currentTop = $(window).scrollTop();
			    //check if user is scrolling up
			    if (currentTop < this.previousTop ) {
				//if scrolling up...
				//add class 'is-visible' to the main navigation
				//if currentTop == 0, remove 'is-fixed' and 'is-visible' classes 
			    } else {
				//if scrolling down...
				//add the 'is-fixed' class to the main navigation as soon as it is no longer visible
				//add class 'is-visible' to the main navigation
			    }
			    //set previousTop for the next iteration
			    this.previousTop = currentTop;
			}
		);
	});
	</script>


</body>
</html>
