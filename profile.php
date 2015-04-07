<?php require('check_login.php'); ?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="childcheckstyle2.css">
	<link href="css/bootstrap.css" rel="stylesheet">

	<title>Child Check Profile</title>

	<style></style>
</head>

<body>

<div id="profile-container">
	<div id="banner">
		<img src="./images/small-logo.png" alt="Child Check"/>
	</div>
		<br>
	<div id="profile-img-container">
		<a href="profile.php"><img id="profile-img"/></a>
	</div>

	<div id="navbar">
		<div class="box">
		<a href="profileheight.php"><img src="./images/height.png" alt="Height"/></a>
		<div id="navLabel">Height</div>
		</div>
	<div class="box">
		<a href="profileweight.php"><img src="./images/bmi.png" alt="Weight"/></a>
		<div id="navLabel">Weight</div>
	</div>
	<div class="box">
		<a href="profilehead.php"><img src="./images/head.png" alt="Head Circumference"/></a>
		<div id="navLabel">Head Size</div>
	</div>
	<div class="box">
		<a href="profileBMI.php"><img src="./images/bmi.png" alt="BMI"/></a>
		<div id="navLabel">Body Mass Index (BMI)</div>
	</div>
	<div class="box">
		<a href="#"><img src="./images/head.png" alt="Milestones"/></a>
		<div id="navLabel">Milestones</div>
	</div></div>
	<div style="clear: both;"></div>
	<br>
	<div id="info">
		<div class="info-half">
			<div id="profile-name">Samantha Castro</div>
			<div id="profile-age">13 months old</div>
			<div id="profile-dob">DOB: January 23, 2014</div>
		</div>
		<div class="info-half">
			<div class="profile-stat" id="profile-weight">
				<span class="stat-number">24 lbs.</span><br>
				<span class="stat-label">Weight</span>
			</div>
			<div class="profile-stat" id="profile-height">
				<span class="stat-number">30.5 in.</span><br>
				<span class="stat-label">Height</span>
			</div>
			<div style="clear: both;"></div>
			
			<div class="profile-stat" id="profile-bmi">
				<span class="stat-number">18%</span><br>
				<span class="stat-label">BMI</span>
			</div>
			<div class="profile-stat" id="profile-head">
				<span class="stat-number">18.1 in.</span><br>
				<span class="stat-label">Head Size</span>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
	<div id="footer">
		&copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.
	</div>
</div>

</body>
</div>
</html>