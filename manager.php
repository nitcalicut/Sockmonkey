<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
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
?>


<form id="searchBox" action="">
	<input type="search" id="search" name="search"/>
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

