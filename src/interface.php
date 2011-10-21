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
	* Tested
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
	* Tested
	*/
	function newUser($pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq) {
		$pid = genTathvaId();
		$obj = new participant($pid, $pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq,"");
		return json_encode(array("tathvaid"=>$pid));
	}
	
	/*
	* Gets all info for a particular event.
	* Tested
	*/
	function getEventInfo($evid) {
		$ob = new event($evid);
		$evarray = $ob -> getResourceVar();
		return json_encode($evarray);
	}
	
	/*
	* Gets details of 3 winners of a particular event.
	* Tested
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
	* Tested
	*/
	function getAllEventIds() {
		return (event::listAllEventIds());
	}
	
	/**
	* Update prize information of an event
	* Tested
	*/
	function updatePrizelist($evid,$pz1,$pz2,$pz3) {
		$ob = new event($evid);
		$ob -> setPrize1($pz1);
		$ob -> setPrize2($pz2);
		$ob -> setPrize3($pz3);
		$ob -> updateEvent();
	}
	
	function accommodationCreateTeam($captid,$items,$room,$team) {
		$obj = new accommodation($captid,$items,$room);
		participant::insertAccomCaptain($team,$captid);
	}
	
	function accommodationUpdateCapt($oldcapt,$newcapt,$items,$room,$dereg) {
		$obj = new accommodation($oldcapt);
		$obj -> updateInfo($newcapt,$items,$room,$dereg);
		participant::updateAccomCaptain($oldcapt,$newcapt);
	}
	
	function accommodationDeleteTeam($captid) {
		$obj = new accommodation($captid);
		$obj -> deleteTeam();
		participant::updateAccomCaptain($captid,'');
	}
	
	function listAccommodationData(){
		return (accommodation::getAllData());
	}
	
	function genTeamId($eventid){
		$temp1=substr($eventid,0,3);
		$obj=new registration();
		$temp=$obj->getLastId($eventid);
		$temp=$temp+3001;
		$str="$temp1"."$temp";
		return $str;
	}

	function partEventList($tathvaId){
		$obj=new registration();
		$arr=$obj->participantEvents($tathvaId);
		return $arr;
	}

	function updateTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		$obj=new registration();
		$obj->updateTeamReg($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
	}
	
	function searchTeam($key){
		return registration::searchRegisteredTeam($key);
	}
	
	function createTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		$obj=new registration($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
	}

	function listEventTeams($eventid){
		$allteams = registration::getTeamIds($eventid);
		$cnt=count($allteams);
		$ev = new event($eventid);
		$min = $ev->getMinimum();
		$max = $ev->getMaximum();
		
		$res=array();
		
		$i=0;
		while($i<$cnt)
		{
			$teamid = $allteams[$i]['rg_teamid'];
			$obj = new registration($allteams[$i]['rg_teamid']);
			$str = $obj -> eventConfirm($min,$max);
			
			if($str=="Confirm")
			{
				$pc1 = array($obj->getRgCaptainConfirm(), $obj->getRgConfirm1(), $obj->getRgConfirm2(), $obj->getRgConfirm3(), $obj->getRgConfirm4(), $obj->getRgConfirm5(), $obj->getRgConfirm6());
				$pc = array($obj->getRgCaptainId(), $obj->getRgPart1(), $obj->getRgPart2(), $obj->getRgPart3(), $obj->getRgPart4(), $obj->getRgPart5(), $obj->getRgPart6());
				
				$ct=count($pc);
				$j=0;
				$csv="";
				while($j<$ct)
				{
					if($pc[$j]!='' && $pc1[$j]!='N')
						$csv.="$pc[$j],";
					$j++;
				}
				$csv=trim($csv,",");
				
				$res[$teamid]=$csv;
			}
			$i++;
		}
		return json_encode($res); 
	}
?>
