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

<nav>
	<ul id="mainMenu">
		<li><a>Home</a></li>
		<li><a>About me</a></li>
		<li><a>Stuff i do</a></li>
		<li><a>Stuff i love</a></li>
		<li><a>Contact</a></li>
	</ul>
</nav>

</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

