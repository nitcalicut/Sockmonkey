<?php
	/**
	* User Search output JSON file
	*/
	include 'interface.participant.php';
	if(isset($_GET['sm_inputsearch'])){
		echo json_encode(userSearch($_GET['sm_inputsearch']));
	}
?>
