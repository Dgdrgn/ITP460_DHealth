
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
    <div id="answer">Developmental delay is when a child does not reach a milestone by the upper range of what is considered healthy. Even though babies develop at their own pace, every child should do certain tasks by a certain age. A child can stray from the timeline and still be within the range of healthy development, but it's best to discuss any concerns with your child's pediatrician</div>
    <br/><div class="line"></div><br/>

    
    <div id="question">
        Why hasn't my child reached a certain milestone yet?</div>
    <div id="subquest">Have you given them a chance?</div>
    <div id="answer">"Often there's not even a delay. Sometimes a parent just isn't given the child an opportunity. For example, a baby may not sit on his own because he's always being held, rather than having time on the floor."</div>

    <div id="subquest">Was your child born premature?</div>
    <div id="answer">"Children who are premature may not have the same rate of muscle strength and development, so keep this is mind when you're evaluating his or her progress.</div>

    <div id="subquest">Is the delay speech or comprehension related?</div>
    <div id="answer">If so, likely culprit is hearing loss due to recurrent ear infections.  A less common cause is autism, particularly if the child also has difficultly interacting socially</div>

    <div id="subquest">Is your child experiencing a truly significant delay?</div>
    <div id="answer">This is a serious issue that could be attributed to genetic disorders such as Down syndrome or developmental disablities like cerbral palsy or mental retardation.</div>

    <div id="question">How common are significant delays?</div>
    <div id="answer"> Significant developmental delays affect approximately 2% of US children.</div>

    <div id="question">If my child is experiencing a delay, what can be done to help get them back on track?</div>
    <div id="answer"> There are a range of options when it comes to helping your child progress in a healthy way.  Some include occupational therapy, physical therapy, speech therapy, and special education programs.</div>

<div id="question">
        If I think something is wrong, who should I contact?</div>
    <div id="answer">For all questions and concerns, reach out to your child's pediatrician.</div><br/>
    <br/><div class="line"></div><br/>

<div id="question">
        How can I see my child's growth compared to the national average?</div>
    <div id="answer">There is a toggle switch above each growth graph that will allow you to turn the national average chart on or off.</div>
    <br/><div class="line"></div><br/>

<div id="question">
        Does Child Check use the CDC's growth charts?</div>
    <div id="answer">Yes.</div>
    <br/><div class="line"></div><br/>

</div>

</div>
    <br>
    <div id="footer">&copy; 2015 ITP-460 & USC D-Health. All Rights Reserved.</div>
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


