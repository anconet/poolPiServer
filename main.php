<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<!-- Reference to CSS Style Sheet -->
		<link rel="stylesheet" type="text/css" href="main.css">

		<!-- JQuery Library from Google -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


		<script>
		//var objEvent = {"eventType":"buttonPress","eventData":"poolMode"};
		//var objEvent = {};
		//objEvent.eventType = "buttonPress";
		//objEvent.eventData = "poolMode";
		//$.post("buttons.php",objEvent,function(data){alert ("Data Loaded"+data)},"json");
		//$.post("buttons.php",{"buttonPressed":"poolMode"},function(data){alert ("Data Loaded"+data)},"json");
		</script>

		<title>Pool Pi</title>

	</head>

	<body>
		<div class="header">
			<p> some content</p>
		</div>

		<div id="poolModeButton" class="function">
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

	<script>

		$("#poolModeButton").click(function(){
			var objEvent = {};
			objEvent.type = "buttonPress";
			objEvent.subject = "poolModeButton";
			$.post( "buttons.php", objEvent, function(data){processResponse(data)}, "json");
		});

		function processResponse(objEventResponse) {
			if (objEventResponse.response == "off") { $("#poolModeButton").css({"background":"darkgrey"});}
			else if (objEventResponse.response == "on") { $("#poolModeButton").css({"background":"green"});}
			else { alert("3:")}// Do Nothing
		}
	</script>

<?php
//echo "Hello World";
//$poolState=simplexml_load_file("poolState.xml") or die ("Error: Can't open pool state");
//$poolState = json_decode(file_get_contents("poolState.json"),false);

//if ($poolState->poolMode == "on") {

	//echo "Pool is On";
	//echo '<script> buttonPress(document.getElementById("poolModeButton"))</script>';
//}
?>

</html>
