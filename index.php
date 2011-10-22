<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'source.php';
	include 'src/database.php';
	echo $header;
?>

</head>
<body>
<div id='topbar'></div>
<div id='container'>
<?php
	echo $topBar;
?>

<?php 
	session_start();
	
	$sql="SELECT count(*) from participant where pc_college NOT like 'NIT Calicut' AND pc_confirm='Y'";

	$arr=dbquery($sql);

	$row=pg_fetch_row($arr);
	echo "<span style='font-size:40px'>Confirmed Non NITC :   ".$row[0]."</span>";

	if(!isset($_SESSION['user'])){
	echo "
	<div class='g'>
		<h2>Sign in <strong></strong></h2>
		<form method='post' action='login.php'>
	<label>
		<strong class='email-label'>Username</strong>
		<input type='text' value='' id='Email' name='email'>
	</label>
	<label>
		<strong class='passwd-label'>Password</strong>
		<input type='password' id='Passwd' name='password'>
	</label>
		<input type='submit' value='Sign in' name='signIn' class='g-button'>
		</form>
	</div>";
	}
?>
</div><!-- /container -->

<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

