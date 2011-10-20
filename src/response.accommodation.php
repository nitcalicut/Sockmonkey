<?php
	
	include_once 'interface.php';
	
	if(isset($_POST['captid'])&&
		isset($_POST['items'])&&
		isset($_POST['room'])&&
		isset($_POST['team'])){
			accommodationCreateTeam($_POST['captid'],$_POST['items'],$_POST['room'],$_POST['team']);
	}
	else if(isset($_POST['oldcapt'])&&
		isset($_POST['newcapt'])&&
		isset($_POST['items'])&&
		isset($_POST['room'])&&
		isset($_POST['dereg'])){
			accommodationUpdateCapt($_POST['oldcapt'],$_POST['newcapt'],$_POST['items'],$_POST['room'],$_POST['dereg']);
	}
	else if(isset($_POST['captid'])){
		accommodationDeleteTeam($_POST['captid']);
	}
	else{
		echo json_encode(listAccommodationData());
	}
?>
