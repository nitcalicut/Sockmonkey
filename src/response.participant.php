<?php
	/**
	* Participant JSON's
	*/
	include_once 'interface.participant.php';
	
	if(isset($_GET['search'])){
		echo json_encode(participantSearch($_GET['search']));
	}
	
	if(isset($_GET['confirm'])){
		participantConfirm($_GET['confirm']);
	}
	
	if(isset($_GET['participantevent'])){
		echo json_encode(participantEvents($_GET['participantevent']));
	}
	
	if(isset($_GET['participantinfo'])){
		echo json_encode(participantInfo($_GET['participantinfo']));
	}
	if(isset($_GET['pid'])&&
		isset($_GET['pname'])&&
		isset($_GET['pemail'])&&
		isset($_GET['pclg'])&&
		isset($_GET['pcntct'])&&
		isset($_GET['pstate'])&&
		isset($_GET['pgender'])&&
		isset($_GET['preq'])&&
		isset($_GET['pnitc'])){
		newUser($_GET['pid'],$_GET['pname'],$_GET['pemail'],$_GET['pclg'],$_GET['pcntct'],$_GET['pstate'],$_GET['pgender'],$_GET['preq'],$_GET['pnitc']);
	}
	
?>
