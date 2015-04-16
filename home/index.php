<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../childcheckstyle.css">

<title>Child Check Home</title>

<style></style>

</head>

<body>

<div id="containerhome">

<div id="header">
	<img src="../childchecklogo.png" style="width: 100%;" alt="Child Check">
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
        {{#ifCond gender "m"}}
            <a href="#"><img src="../images/babyBoy.png" alt="{{first_name}}">
            </a><br/>
        {{else}}
            <a href="#"><img src="../images/girl-toddler.png" alt="{{first_name}}">
            </a><br/>
        {{/if}}
    </div>
</script>
	
</div>
</div>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/handlebars-v2.0.0.js"></script>
<script src="../js/home_template.js"></script>
</body>
</html>
