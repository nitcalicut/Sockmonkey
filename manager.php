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

<form id="searchBox">
	<input type="search" id="search"/>
	<span>Search<span>
</form>

<div id="searchResults">
	<span class='name'>Jaseem abid</span><br />
	<span class='tid'>TAT 3416</span><br />
	<span class='contact'>email : jaseemabid@gmail.com </span><br />
	<span class='contact'>Ph : +91 8891724372 </span><br />
</div>


</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

