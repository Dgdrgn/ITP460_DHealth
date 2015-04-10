<?php require('check_login.php'); ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="childcheckstyle.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.js"></script>

    <title>Child Check: Head Size</title>

    <style></style>
</head>

<body>
<div class="cd-header">
        <div class="logo"><img src="./images/small-logo.png" alt="Child Check"/></div>

        <div class="nav-container">
                <ul class="cd-secondary-nav"><li><a href="#0">Log Out</a></li></ul>
        </div>

        <a class="cd-primary-nav-trigger" href="#0">
                <span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
        </a>
</div>
<br>
<div>
        <ul class="cd-primary-nav">
                <li class="cd-label">Children</li>
 
                <li><a href="#0">Eric</a></li>
                <li><a href="#0">Samantha</a></li>
                
                <li class="cd-label">Settings</li>
 
                <li><a href="#0">Account Settings</a></li>

                
                <li class="cd-label">Need Help?</li>
 
                <li><a href="#0">FAQ</a></li>
                <li><a href="#0">About ChildCheck</a></li>
        </ul>
</div>
<div id="profile-container">
    <br>
    <div id="profile-img-container">
        <a href="profile.php"><img id="profile-img"/></a>
    </div>

    <div id="navbar">
            <div class="navbar-tab">
                    <img src="./images/height-icon.png" alt="Height" />
                    <a href="profileheight.php">Height</a>
            </div>
            <div class="navbar-tab">
                    <img src="./images/weight-icon.png" style="margin-left: 120px;" alt="Weight"/>
                    <a href="profileweight.php" style="margin-left: 120px;">Weight</a>
            </div>
            <div id="current-tab" class="navbar-tab">
                    <img src="./images/head-icon.png" style="margin-left: 240px;" alt="Head Size"/>
                    <a href="profilehead.php" style="margin-left: 240px; line-height: 20px; padding-top: 5px;">Head Size</a>
            </div>
            <div class="navbar-tab">
                    <img src="./images/bmi-icon.png" style="margin-left: 360px;" alt="BMI"/>
                    <a href="profilebmi.php" style="margin-left: 360px;">BMI</a>
            </div>
            <div class="navbar-tab">
                    <img src="./images/milestone-icon.png" style="margin-left: 480px;" alt="Milestones"/>
                    <a href="#" style="margin-left: 480px; line-height: 20px; padding-top: 5px;">Mile<br>stones</a>
            </div>
    </div>
    <div style="clear: both;"></div>
    <br>
    <div id="info" style="height: 400px;">
        
        <div class="info-half">
            <div id="header3">HEAD SIZE REPORT</div>
            
            <div id="stats">Current Height:
                <div id="currentNumber">30</div>
                <div id="currentUnit">in.</div>
                <br>
                <div id="asOf">as of February 20, 2015</div>
            </div>
            
            <div id="statsLast">From Last Visit:
                <div id="currentNumber">28</div>
                <div id="currentUnit">in.</div>
                <!--<div id= "viewPast">View all past assessments</div>-->
            </div>
            <div id="chartInfo">
                Compared to her last assessment results, Samantha is growing at a healthy rate!<br><br>
                Here is a list of healthy foods that physicians recommend for children under the age of 18.
            </div>
        </div>    
        <div class="info-right-half">    
            <div id="chart">CHART WILL GO HERE</div>
        </div>
        <div style="clear: both;"></div>
    </div>        
    <br>
    <div id="footer">&copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.</div>
</div>
	
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
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
</div>
</html>