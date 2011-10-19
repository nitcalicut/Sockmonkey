<?php
	/**
	* User Search output JSON file
	*/
	
	include_once 'interface.participant.php';
	if(isset($_GET['sm_inputsearch'])){
		echo json_encode(participantSearch($_GET['sm_inputsearch']));
	}
?>
