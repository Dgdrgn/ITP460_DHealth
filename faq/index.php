
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="icon" href="../images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../childcheckstyle.css">
        
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,400' rel='stylesheet' type='text/css'>
    <script src="../js/modernizr.js"></script>

    <title>Child Check FAQ</title>

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
        FAQ
    </div><br/>

    <div id="question">
        How can you tell the difference between a child who is just taking his or her time and one who has a true developmental delay?</div>
    <div id="answer">Developmental delay is when a child does not reach a milestone by the upper range of normal. Even though babies develop at their own pace, he explains, "every child should do certain tasks by a certain age.”</div>
    <div id="answer">A child can stray from the timeline and still be within the range of normal, but it's best to discuss any concerns with your pediatrician</div>
    <br/><div class="line"></div><br/>

    <div id="question">
        How can you tell the difference between a child who is just taking his or her time and one who has a true developmental delay?</div>
    <div id="answer">Developmental delay is when a child does not reach a milestone by the upper range of normal. Even though babies develop at their own pace, he explains, "every child should do certain tasks by a certain age.”</div>
    <br/><div class="line"></div><br/>

    <div id="question">
        How can you tell the difference between a child who is just taking his or her time and one who has a true developmental delay?</div>
    <div id="answer">Developmental delay is when a child does not reach a milestone by the upper range of normal. Even though babies develop at their own pace, he explains, "every child should do certain tasks by a certain age.”</div>
    <br/><div class="line"></div><br/>


    <div id="question">
        Why hasn't my child reached a certain milestone yet?</div>

    <div id="subquest">Have you given them a chance?</div>
    <div id="answer">"Often there's not even a delay. Sometimes a parent just isn't giving the child opportunities. For example, a baby may not sit alone because he's always being held, rather than having time on the floor."</div>

    <div id="subquest">Was your child born premature?</div>
    <div id="answer">"Children who are premature may not have the same rate of muscle strength and development,"</div>

    <div id="subquest">Speech/comprehension related?</div>
    <div id="answer">Likely culprit is hearing loss due to recurrent ear infections</div>
    <div id="subquest">A less common cause is autism, particularly if the child also has difficult interacting socially</div>

    <div id="subquest">Significant delay?</div>
    <div id="answer">Genetic disorders such as down syndrome and developmental disabilities such as cerebral palsy or mental retardation.</div>

</div>

</div>
    <br>
    <div id="footer" style="width: 100%;">&copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.</div>
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
Link mit button to home page
Have not added any bootstrap elements yet
Need to upload fonts - match size and color to style guide
Figure out when uploading child picture, that they are evenly spaced-->
