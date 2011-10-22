<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'src/interface.php';
	include 'source.php';
	echo $header;
	session_start();
	if($_SESSION['user']!="manager")
		header("Location: index.php");
?>


</head>
<body>
<a href='/Sockmonkey'><div id='topbar'></div></a>
<div id='container'>
<?php
	echo $topBar;

	$arr=listEventTeams($_GET['eid']);
	$i=1;
	echo "<table border=\"1\">";
	echo "<tr><td></td><td>Event</td><td>".$_GET['eid']."</td></tr>";
	foreach ($arr as $key => $value) {
		 echo "<tr><td>$i</td><td>$key</td><td>$value</td></tr>";
		 $i++;
	}
	echo "</table>";

?>

<form id="searchBox" action="">
	<input type="search" id="search" placeholder="Enter the event ID" name="eid"/>
	<span id="SearchButton">Search<span>
</form>

<div id="searchResults">

</div>


</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>
