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
	* Returns the status of a Tathva ID
	* Tested.
	*/
	function participantStatus($tid){
		$p = new participant($tid);
		return json_encode($p->getConfirmStatus());
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
	
	/**
	* Returns a list of all participant events and team ids.
	* Tested.
	*/
	function participantEvents($tid){
		$r = registration::participantEvents($tid);
		return json_encode($r);
	}
	
	function genTathvaId(){
		$obj=new participant();
		$temp=$obj->getLastId();
		$temp=$temp+2001;
		$str='TAT'."$temp";
		return $str;
	}
	

#	dereg function used to dereg a user from accommodation.
#	this function returns a true value when updated successfully else returns a false value

	function deReg($tatid){
		$y=0;
		$obj=new participant($tatid);
		$obj1=new accommodation($obj->getAccomCaptain());
		$x=$obj1->getDereg();
		if($x=='Y')
			$y=$obj->updateStatus('D');
		return $y;
	}
	
	/*
		function creates a new user/participant
	*/
	function newUser($pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq) {
		$pid = genTathvaId();
		$obj = new participant($pid, $pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq,"");
		return json_encode(array("tathvaid"=>$pid));
	}
?>
