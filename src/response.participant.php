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
	
?>
