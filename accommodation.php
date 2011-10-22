<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'source.php';
	echo $header;
	session_start();
	if($_SESSION['user']!="hospitality")
		header("Location: index.php");
?>

</head>
<body>
<div id='topbar'></div>
<div id='container'>
<?php
	echo $topBar;
?>

<div class="g">
	<h2>Need a place to stay ? <strong></strong></h2>
	<form method="post" action="src/response.accommodation.php">

<label>
	<strong>Captain ID</strong>
	<input type="text" placeholder="Who leads you ?" name="captid">
</label>
<label>
	<strong>Items issued</strong>
	<input type="text" placeholder="Comma seperated values" name="items">
</label>
<label>
	<strong>Room number</strong>
	<input type="text" placeholder="Room sweet room !" name="room">
</label>
<label>
	<strong>Team members</strong>
	<input type="text" placeholder="Comma seperated tathva ids" name="team">
</label>

<label>
	<strong>Need a place to stay ?</strong>
	<select name="preq">
		<option value="Y">Yes, Where else ?</option>
		<option value="N">Nope ! No need.</option>
	</select>
</label>
	<input type="submit" value="Welcome :)" name="signIn" class="g-button">
	</form>
</div>

</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

