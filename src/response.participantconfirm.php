<?php
	include_once 'interface.participant.php';
	if(isset($_GET['tid'])){
		participantConfirm($_GET['tid']);
	}
?>
