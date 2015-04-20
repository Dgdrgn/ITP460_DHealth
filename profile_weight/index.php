<?php require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="../js/modernizr.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="../images/favicon.ico">

    <title>Child Check Weight</title>

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
    <div id="profile-img-container">
        <a href="../profile/"><img id="profile-img"/></a>
    </div>

    <div id="navbar">
        <div class="navbar-tab">
            <img src="../images/height-icon.png" alt="Height" />
            <a href="../profile_height/">Height</a>
        </div>
        <div class="navbar-tab">
            <img src="../images/weight-icon.png" style="margin-left: 120px;" alt="Weight"/>
            <a href="../profile_weight/" style="margin-left: 120px;">Weight</a>
        </div>
        <div class="navbar-tab">
            <img src="../images/head-icon.png" style="margin-left: 240px;" alt="Head Size"/>
            <a href="../profile_head/" style="margin-left: 240px; line-height: 20px; padding-top: 5px;">Head Size</a>
        </div>
        <div class="navbar-tab">
            <img src="../images/bmi-icon.png" style="margin-left: 360px;" alt="BMI"/>
            <a href="../profile_bmi/" style="margin-left: 360px;">BMI</a>
        </div>
        <div class="navbar-tab">
            <img src="../images/milestone-icon.png" style="margin-left: 480px;" alt="Milestones"/>
            <a href="#" style="margin-left: 480px; line-height: 20px; padding-top: 5px;">Mile<br>stones</a>
        </div>

    </div>
    <div style="clear: both;"></div>
    <br>
    <div id="info">
        
        <div class="info-half">
            <div id="header3">WEIGHT REPORT</div>
            <div id="stats">Current Height:
            <div id="currentNumber">30
            <div id="currentUnit">in.</div></div>
            <div id="asOf">as of February 20, 2015</div></div>
        </div>
            
        <div class="info-half2">
            <div id="chart">CHART WILL GO HERE</div>
        </div>
    <div style="clear: both;"></div>

    
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
<script src="js/bootstrap.js"></script>

</body>
</div>
</html>