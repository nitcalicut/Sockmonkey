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

<script type="text/javascript" language="javascript" charset="utf-8">

$(document).ready(function(){
	$('div#details').load('src/response.registration.php?teamid=' + getUrlVars['teamid']);
});

</script>

<div id="details">

</div>


</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

