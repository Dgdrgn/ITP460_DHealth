
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="icon" href="../images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="../js/modernizr.js"></script>

    <title>Child Check About</title>

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

<div id="containerQuest">

    <div id="header1">
        About
    </div><br/>

    <div id="about">
        Child Check is a joint venture brought to you by the <a href="http://dhealth.usc.edu">D-Health Lab</a> at USC. Pairing tech students with representatives from USC’s Keck School of Medicine and the Children’s Hospital LA, D-Health sought to make a simple application to help parents track their children’s early growth and developmental milestones. This app focuses on both the quantitative – like height and weight – and qualitative – like first steps and sitting upright – measures of early child developmental success. Its primary goal is to give parents access to their child’s growth data in an easily readable and functional desktop application, all from the comfort of their home.
    </div>

</div>
    <br>
    <div id="footer" style="width: 100%; position: absolute; bottom: 0px;">&copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.</div>
</div>
	
	<script src="../js/jquery-2.1.1.js"></script>
	<script src="../js/main.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
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

<!--
Link submit button to home page
Have not added any bootstrap elements yet
Need to upload fonts - match size and color to style guide
Figure out when uploading child picture, that they are evenly spaced-->
