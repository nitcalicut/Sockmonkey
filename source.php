<?php

$header="
	<meta charset='UTF-8' />
	<link rel='shortcut icon' href='pics/favicon.png'>
	<link rel='stylesheet/less' type='text/css' href='css/styles.less'>
	<script src='js/less-1.1.3.min.js' type='text/javascript'></script>";

session_start();
$menubar = "";
if(isset($_SESSION['user'])){
	$menubar = "
	<div id='menubar'>
			<a href='manager.php'>Search and Confirm</a> | 
			<a href='accommodation.php'>Accommodation</a> |
			<a href='register.php'>Offline Participant Registration</a> | 
			<a href='eventregn.php'>Offline Event Registration</a> |
			<a href='logout.php'>logout</a> 
	</div>";
}


$header = $header.$menubar;

$scripts="
	<script src='js/jquery.js' type='text/javascript'></script>
	<script src='js/functions.js' type='text/javascript' ></script>";

?>

