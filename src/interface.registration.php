<?php
	include_once 'class.registration.php';
	include_once'class.event.php';

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
		$arr=$obj->participantEvents($tathvaid);
		return $arr;
	}

	function updateTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		$obj=new registration();
		$arr=$obj->updateTeamReg($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
		return $arr;
	}
	
	function searchTeam($key)
	{
		return registration::searchRegisteredTeam($key);
	}
	function createTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		$obj=new registration($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
	}

?>
