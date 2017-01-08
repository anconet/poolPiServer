<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<!-- Reference to CSS Style Sheet -->
		<link rel="stylesheet" type="text/css" href="main.css">

		<!-- JQuery Library from Google -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
			var objElementID = this;
			$.post( "buttonPress.php", objEvent, function(data){processResponse(data,objElementID)}, "json");
		});

		function processResponse(objEventResponse,objElementID) {
			if (objEventResponse.response == "off") { $(objElementID).removeClass("functionOn").addClass("functionOff");}
			else if (objEventResponse.response == "on") { $(objElementID).removeClass("functionOff").addClass("functionOn");}
			else { alert("Error: Server Response: " + objEventResponse.response)}
		}
	</script>

</html>
