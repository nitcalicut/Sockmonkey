<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'source.php';
	include 'src/settings.php';
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
	global $global_db_username;
			global $global_db_password;
			global $global_db_host;
			global $global_db_port;
			global $global_db_name;
			$dbconn = pg_pconnect("host=$global_db_host port=$global_db_port dbname=$global_db_name user=$global_db_username password=$global_db_password");
		
		
	$sql="SELECT count(*) from participant where pc_college NOT like 'NIT Calicut' AND pc_confirm='Y'";

	$arr=pg_query($sql);

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

