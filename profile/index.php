<?php require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<script src="../js/modernizr.js"></script>
	<link rel="icon" href="../images/favicon.ico">
	
	<title>Child Check Profile</title>
	
	<style></style>
</head>

<body>
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
		<script type="text/handlebars" id="children-template">
			<li><a href="../profile?id={{mrn}}&last_name={{last_name}}">{{first_name}} {{last_name}}</a></li>
		</script>
		
		<li class="cd-label">Settings</li>
 
		<li><a href="#0">Account Settings</a></li>

		
		<li class="cd-label">Need Help?</li>
 
		<li><a href="#0">FAQ</a></li>
		<li><a href="#0">About ChildCheck</a></li>
	</ul>
</div>

<div id="profile-container">
	<div id="child-container"></div>
	<script type="text/handlebars" id="child-template">
	<div id="profile-img-container">
		<a href="../profile?id={{mrn}}&last_name={{last_name}}"><img style="background-image: url(
		{{#if_eq gender "m"}}
            ../images/babyBoy.png
        {{else}}
            ../images/girl-toddler.png
        {{/if_eq}}
		);" id="profile-img"/></a>
	</div>


	<div id="navbar">
		<div class="navbar-tab">
			<img src="../images/height-icon.png" alt="Height" />
			<a href="../profile_height?id={{mrn}}&last_name={{last_name}}">Height</a>
		</div>
		<div class="navbar-tab">
			<img src="../images/weight-icon.png" style="margin-left: 120px;" alt="Weight"/>
			<a href="../profile_weight?id={{mrn}}&last_name={{last_name}}" style="margin-left: 120px;">Weight</a>
		</div>
		<div class="navbar-tab">
			<img src="../images/head-icon.png" style="margin-left: 240px;" alt="Head Size"/>
			<a href="../profile_head?id={{mrn}}&last_name={{last_name}}" style="margin-left: 240px; line-height: 20px; padding-top: 5px;">Head Size</a>
		</div>
		<div class="navbar-tab">
			<img src="../images/bmi-icon.png" style="margin-left: 360px;" alt="BMI"/>
			<a href="../profile_bmi?id={{mrn}}&last_name={{last_name}}" style="margin-left: 360px;">BMI</a>
		</div>
		<div class="navbar-tab">
			<img src="../images/milestone-icon.png" style="margin-left: 480px;" alt="Milestones"/>
			<a href="../profile_milestones?id={{mrn}}&last_name={{last_name}}" style="margin-left: 480px; line-height: 20px; padding-top: 5px;">Mile<br>stones</a>
		</div>
	
	</div>
	</script>
	<div style="clear: both;"></div>
	<br>
	<div id="info">
		<div class="info-half">
			<div id="profile-name"></div>
			<div id="profile-age"></div>
			<div id="profile-dob"></div>
		</div>
		<div class="info-half" id="info-right-half">
			<div class="profile-stat" id="profile-weight">
				<span id="weight-number" class="stat-number"></span><br>
				<span class="stat-label">Weight</span>
			</div>
			<div class="profile-stat" id="profile-height">
				<span id="height-number" class="stat-number"></span><br>
				<span class="stat-label">Height</span>
			</div>
			<div style="clear: both;"></div>
			<div class="profile-stat" id="profile-bmi">
				<span id="bmi-number" class="stat-number"></span><br>
				<span class="stat-label">BMI</span>
			</div>
			<div class="profile-stat" id="profile-head">
				<span id="head-number" class="stat-number"></span><br>
				<span class="stat-label">Head Size</span>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
	<br>
	<div id="footer">&copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.</div>
</div>
	
	<script src="../js/jquery-2.1.1.js"></script>
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
<script src="../js/jquery-2.1.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/handlebars-v2.0.0.js"></script>
<script src="../js/profile_template.js"></script>
</body>
</div>
</html>
