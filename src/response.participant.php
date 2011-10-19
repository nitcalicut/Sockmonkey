<?php
	/**
	* Participant JSON's
	*/
	include_once 'interface.participant.php';
	
	if(isset($_GET['search'])){
		echo json_encode(participantSearch($_GET['sm_inputsearch']));
	}
	
	if(isset($_GET['confirm'])){
		participantConfirm($_GET['tid']);
	}
?>
