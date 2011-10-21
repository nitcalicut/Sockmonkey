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
<?php 
	session_start();
	if(isset($_SESSION['user'])){
		echo 
		"<h1>QUICK LINKS</h1>
		<ul style='font-size:20px;'>
			<li><a href='register.php'>Register offline</a></li>
			<li><a href='manager.php'>Search & Managers page</a></li>
			<li><a href='details.php'>User details page</a></li>
			<li><a href='accommodation.php'>Accommodation</a></li>
			<li><a href='eventregn.php'>Event regn</a></li>
			<li><a href='logout.php'>logout</a></li>
		</ul>";
	}
	else{
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

