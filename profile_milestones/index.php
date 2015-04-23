<?php require_once('../config.php'); require_once('../messages.php'); session_start(); ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="../js/modernizr.js"></script>
    <link rel="icon" href="../images/favicon.ico">

    <!-- Responsive viewport for smartphone devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- least.js 2 CSS file -->
    <link href="../leastjs2.2.0/src/css/least.min.css" rel="stylesheet" />

    <title>Child Check: Milestones</title>
</head>

<body></body>  
    
<div class="cd-header">
        <div class="logo"><a href="index.php"><img src="../images/small-logo.png" alt="Child Check"/></a></div>

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
    <div style="clear: both;"></div>
    <br>
    <div id="info" style="padding: 30px 20px 30px 20px;">
     
    <div id="header3" style="margin-left: 35px;">SAMANTHA'S MILESTONES</div> 
        
    <!-- Least Gallery -->
    <section id="least">

	<!-- Least Gallery: Fullscreen Preview -->
	<div class="least-preview"></div>

	<!-- Least Gallery: Thumbnails -->
	<ul class="least-gallery">
	
	    <!-- 1th thumbnail -->
	    <li>
		<a href="../images/01-smile.jpg" title="I can smile!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 1:</strong> First smile - <em>March 5, 2015</em>" >
		<img src="../images/01-smile-thumb.jpg" alt="Milestone 1" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/02-babble.jpg" title="I can babble!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 2:</strong> I can babble! - <em>March 10, 2015</em>" >
		<img src="../images/02-babble-thumb.jpg" alt="Milestone 2" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/03-laugh.jpg" title="I can laugh!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 3:</strong> First laugh - <em>March 11, 2015</em>" >
		<img src="../images/03-laugh-thumb.jpg" alt="Milestone 3" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/04-rollover.jpg" title="I can rollover!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 4:</strong> First rollover - <em>March 15, 2015</em>" >
		<img src="../images/04-rollover-thumb.jpg" alt="Milestone 4" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/05-situp.jpg" title="I can sit up!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 5:</strong> First time sitting up - <em>March 20, 2015</em>" >
		<img src="../images/05-situp-thumb.jpg" alt="Milestone 5" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/06-eat.jpg" title="I can eat solids!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 6:</strong> First time eating solid foods - <em>March 25, 2015</em>" >
		<img src="../images/06-eat-thumb.jpg" alt="Milestone 6" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/07-crawl.jpg" title="I can crawl!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 7:</strong> First time crawling - <em>March 30, 2015</em>" >
		<img src="../images/07-crawl-thumb.jpg" alt="Milestone 7" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/08-sleep.jpg" title="I slept alone!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 8:</strong> First time sleeping all night long - <em>April 5, 2015</em>" >
		<img src="../images/08-sleep-thumb.jpg" alt="Milestone 8" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/09-stand.jpg" title="I can stand!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 9:</strong> First time standing up - <em>April 10, 2015</em>" >
		<img src="../images/09-stand-thumb.jpg" alt="Milestone 9" />
		</a>
	    </li>

	    <li>
		<a href="../images/10-wave.jpg" title="I can wave!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 10:</strong> First time waving - <em>April 15, 2015</em>" >
		<img src="../images/10-wave-thumb.jpg" alt="Milestone 10" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/11-clap.jpg" title="I can clap!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 11:</strong> First time clapping - <em>April 20, 2015</em>" >
		<img src="../images/11-clap-thumb.jpg" alt="Milestone 11" />
		</a>
	    </li>
	    
	    <li>
		<a href="../images/12-steps.jpg" title="I can walk!" data-subtitle="View Picture" data-caption="<strong>MILESTONE 12:</strong> First steps - <em>April 30, 2015</em>" >
		<img src="../images/12-steps-thumb.jpg" alt="Milestone 12" />
		</a>
	    </li>
	</ul>

    </section>
    <!-- Least Gallery end -->    
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
	
	<script src="leastjs2.2.0/src/js/libs/least/least.min.js"></script>
	<script>
	    $(document).ready(function(){
	      $('.least-gallery').least();
	    });
	</script>

</body>
</div>
</html>