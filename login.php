<?php
	if(isset($_POST['email']) && isset($_POST['password'])){
		if($_POST['email']=="manager" && md5($_POST['password'])=="91cb315a6405bfcc30e2c4571ccfb8ce"){
			session_start();
			$_SESSION['user']="manager";
			header('Location: manager.php');
		}
		if($_POST['email']=="junior" && md5($_POST['password'])=="d81e8213797f23651cf57e59b4bd8da0"){
			session_start();
			$_SESSION['user']="junior";
			header('Location: junior.php');
		}
		if($_POST['email']=="hospitality" && md5($_POST['password'])=="d249c17d75d8e0e94024742d69231baa"){
			session_start();
			$_SESSION['user']="hospitality";
			header('Location: accommodation.php');
		}
			
	}
?>
