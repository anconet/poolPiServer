<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<!-- Reference to CSS Style Sheet -->
		<link rel="stylesheet" type="text/css" href="main.css">

		<!-- JQuery Library from Google -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script>
			function button_press(buttonID){
				buttonID.style.background = "green";
			}
		</script>

		<script>
		//$.post("buttons.php",{buttonPressed:"poolMode"});
		$.post("buttons.php",{buttonPressed:"poolMode"},function(data){alert ("Data Loaded"+data)},"json");
		//$.post("buttons.php","{buttonPressed:"poolMode"}",function(data){alert ("Data Loaded"+data)});
		//$.post("buttons.php",function(data){alert ("Data Loaded"+data)});
		//document.write("Did I get here?");
		</script>

		<title>Pool Pi</title>

	</head>

	<body>
		<div class="header">
			<p> some content</p>
		</div>

		<div id="poolModeButton" class="function" onclick="button_press(this)">
			<p>Pool Mode</p>
		</div>

		<div class="function right">
			<p>Spa Mode</p>
		</div>

		<div class="function">
			<p>Pool Lights</p>
		</div>

		<div class="function right">
			<p>Spa Light</p>
		</div>

		<div class="info">
			<p>Air Temp</p>
		</div>

		<div class="info right">
			<p>Water Temp</p>
		</div>

		<div class="footer">
			<p>By: Team Anconetani</p>
		</div>
	</body>

<?php
//echo "Hello World";
$poolState=simplexml_load_file("poolState.xml") or die ("Error: Can't open pool state");

if ($poolState->poolMode == "on") {

	//echo "Pool is On";
	echo '<script> button_press(document.getElementById("poolModeButton"))</script>';
}
?>

</html>
