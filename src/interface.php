<?php
	/**
	* All model interfaces
	*/
	
	include_once "class.event.php";
	include_once 'class.participant.php';
	include_once 'class.registration.php';
	include_once 'class.accommodation.php';
	
	/**
	* Returns participant results JSON.
	* Tested.
	*/
	function participantSearch($arg){
		return json_encode(participant::search($arg));
	}
	
	/**
	* Returns participant Info.
	* Tested.
	*/
	function participantInfo($tid){
		$p = new participant($tid);
		$arr = array("tathva_id" => $p->getTatId(),
					"name" => $p->getName(),
					"college" => $p->getCollege(),
					"contact"=>$p->getContact(),
					"state" => $p->getAccomRequest(),
					"roll"=>$p->getNitcRollNo(),
					"status"=>$p->getConfirmStatus());
		return json_encode($arr);
	}
	
	/**
	* Confirms a Tathva ID of a participant.
	* Tested.
	*/
	function participantConfirm($tid){
		$p = new participant($tid);
		$p->updateStatus("Y");
		registration::confirmEventParticipation($tid);
	}
	
?>
