<?php require_once('../check_login.php'); require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="../js/modernizr.js"></script>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="../images/favicon.ico">

    <title>Child Check BMI</title>

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

        <li><a href="../faq">FAQ</a></li>
        <li><a href="../about">About ChildCheck</a></li>
    </ul>
</div>

<div id="profile-container">
    <div id="child-container"></div>
    <script type="text/handlebars" id="child-template">
	<div id="profile-img-container">
		<a href="../profile?id={{mrn}}&last_name={{last_name}}"><img style="background-image: url(
		{{#if_eq age_group 1}}
            ../images/icon1.png
        {{else}}
        	{{#if_eq age_group 2}}
            	../images/icon2.png
            {{else}}
            	{{#if_eq age_group 3}}
            		../images/icon3.png
            	{{else}}
            		{{#if_eq age_group 4}}
            			../images/icon4.png
					{{else}}
            			../images/icon5.png
					{{/if_eq}}
				{{/if_eq}}
			{{/if_eq}}
        {{/if_eq}}
		);" id="profile-img"/></a>
	</div>


	<div id="navbar">
		<div class="navbar-tab">
			<a href="../profile_height?id={{mrn}}&last_name={{last_name}}" style="margin-left: -15px;">
			    <img src="../images/height-icon.png" alt="Height" /><br>Height
			</a>
		</div>
		<div class="navbar-tab">
			<a href="../profile_weight?id={{mrn}}&last_name={{last_name}}" style="margin-left: 105px;">
			    <img src="../images/weight-icon.png" alt="Weight"/><br>Weight
			</a>
		</div>
		<div class="navbar-tab">
			<a href="../profile_head?id={{mrn}}&last_name={{last_name}}" style="margin-left: 225px;">
			    <img src="../images/head-icon.png" alt="Head Size"/><br>Head Size
			</a>
		</div>
		<div class="navbar-tab">
			<a id="current-tab" href="../profile_bmi?id={{mrn}}&last_name={{last_name}}" style="margin-left: 345px;">
			    <img src="../images/bmi-icon.png" alt="BMI"/><br>BMI
			</a>
		</div>
		<div class="navbar-tab">
			<a href="../profile_milestones?id={{mrn}}&last_name={{last_name}}" style="margin-left: 465px;">
			    <img src="../images/milestone-icon.png" alt="Milestones"/><br>Milestones
			</a>
		</div>
	</div>
	</script>
    <div style="clear: both;"></div>
    <br>

    <div id="info">
        <div class="info-half">
            <div id="header3"></div>
            <div id="stats">Current BMI:
                <div id="currentNumber"></div>
                <div id="asOf"></div></div>
        </div>

        <div class="info-half2">
            <canvas id="myChart" width="400" height="300"></canvas>
        </div>
        <div style="clear: both;"></div>

    <div id="disclaimer">
	<strong>Reading this graph:</strong> Steady growth is indicative of a healthy child. However, stagnation can be cause for concern. If your child's growth seems to have stalled, reach out to your pediatrician.
    </div>

    </div>
    <div id="footer">
        &copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.
    </div>
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

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/handlebars-v2.0.0.js"></script>
<script src="../js/chartjs/Chart.min.js"></script>
<script src="../js/load.js"></script>
<script src="../js/profile_bmi_template.js"></script>

</body>
</div>
</html>