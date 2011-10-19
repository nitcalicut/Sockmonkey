<?php
	include_once 'class.participant.php';
	include_once 'class.registration.php';
	function participantSearch($arg){
		return participant::search($arg);
	}
	function participantConfirm($tid){
		$p = new participant($tid);
		$p->updateStatus("Y");
		registration::confirmEventParticipation($tid);
	}
?>
