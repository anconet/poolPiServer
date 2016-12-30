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
		//$.post("buttons.php",{"buttonPressed":"poolMode"},function(data){alert ("Data Loaded"+data)});
		$.post("buttons.php",function(data){alert ("Data Loaded"+data)});
		//document.write("Did I get here?");
		</script>

		<title>Pool Pi</title>

</head>

<body>
	<main>
		<section class="intro">
			<div class="header">
				<p>POOL PI</p>
			</div>
		</section>

		<section class="function">
			<div id="poolModeButton" class="pool-mode" onclick="button_press(this)">
				<p>Pool Mode</p>
			</div>

			<div class="spa-mode">
				<p>Spa Mode</p>
			</div>

			<div class="pool-lights">
				<p>Pool Lights</p>
			</div>

			<div class="spa-lights">
				<p>Spa Light</p>
			</div>
		</section>

		<section class="info">
			<div class="left">
				<p>Air Temp:</p>
			</div>

			<div class="right">
				<p>Water Temp:</p>
			</div>
		</section>

		<section class="footer">
			<p>By: Team Anconetani</p>
		</section>
	</main>
</body>

<?php
echo "Hello World";
$poolState=simplexml_load_file("poolState.xml") or die ("Error: Can't open pool state");

if ($poolState->poolMode == "on") {

	//echo "Pool is On";
	//echo '<script> button_press(document.getElementById("poolModeButton"))</script>';
}
?>

</html>
