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
	
	/**
	* Generates new Tathva ID's
	* Tested.
	*/
	function genTathvaId(){
		$obj=new participant();
		$temp=$obj->getLastId();
		$temp=$temp+2001;
		$str='TAT'."$temp";
		return $str;
	}
	

	/**
	* Deregisters a user from a hospitality
	* Not tested
	*/
	function deReg($tatid){
		$y=0;
		$obj=new participant($tatid);
		$obj1=new accommodation($obj->getAccomCaptain());
		$x=$obj1->getDereg();
		if($x=='Y')
			$y=$obj->updateStatus('D');
		return $y;
	}
	
	/**
	* function creates a new user/participant
	* Not tested
	*/
	function newUser($pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq) {
		$pid = genTathvaId();
		$obj = new participant($pid, $pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq,"");
		return json_encode(array("tathvaid"=>$pid));
	}
	
	/*
	* Gets all info for a particular event.
	* Not tested
	*/
	function getEventInfo($evid) {
		$ob = new event($evid);
		$evarray = $ob -> getResourceVar();
		return json_encode($evarray);
	}
	
	/*
	* Gets details of 3 winners of a particular event.
	* Not tested
	*/
	function getEventWinnersInfo($evid) {
		$ob = new event($evid);
		$winners['ev_prize1'] = $ob -> getPrize1();
		$winners['ev_prize2'] = $ob -> getPrize2();
		$winners['ev_prize3'] = $ob -> getPrize3();
		return($winners);
	}
	
	/*
	* Gets a list of all eventids stored in database.
	* Not tested
	*/
	function getAllEventIds() {
		return (event::listAllEventIds());
	}
	
	/**
	* Update prize information of an event
	* Not tested
	*/
	function updatePrizelist($evid,$pz1,$pz2,$pz3) {
		$ob = new event($evid);
		$ob -> setPrize1($pz1);
		$ob -> setPrize2($pz2);
		$ob -> setPrize3($pz3);
		$ob -> updateEvent();
	}
?>
