<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<link rel="stylesheet" type="text/css" href="main.css">
		<title>Pool Pi</title>

<script> 
function button_press(buttonID){
	buttonID.style.background = "green";
}
</script>

<?php 
echo "Hello World";
$poolState=simplexml_load_file("poolState.xml") or die ("Error: Can't open pool state");
echo $poolState->poolMode;

?>
	</head>

	<body>
		<div class="header">
			<p> some content</p>
		</div>

		<div class="function" onclick="button_press(this)">
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

</html>
