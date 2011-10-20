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
	
?>
