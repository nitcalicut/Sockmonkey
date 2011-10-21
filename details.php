<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'source.php';
	echo $header;
?>

</head>
<body>
<a href='/Sockmonkey'><div id='topbar'></div></a>
<div id='container'>
<?php
	echo $topBar;
?>

	<h1>QUICK LINKS</h1>
	<ul style="font-size:20px;">
		<li><a href="register.php">Register offline</a></li>
		<li><a href="manager.php">Search & Managers page</a></li>
		<li><a href="details.php">User details page</a></li>
		<li><a href="accommodation.php">Accommodation</a></li>
		<li><a href="eventregn.php">Event regn</a></li>
		<li><a href="logout.php">logout</a></li>
	</ul>

<div id="details"></div>
<div id="details2"></div>

</div>



</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

