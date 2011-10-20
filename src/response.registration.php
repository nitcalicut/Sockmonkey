<?php
	
	include_once 'interface.registration.php';

	function teamid($eventid) {
		return json_encode(getTeamId($eventid));
	}

	function eventList($tatid){
		return json_encode(partEventList($tatid));
	}

	function updateReg($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		updateTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
	}

	function searchReg($key){
		return json_encode(searchTeam($key));
	}

	function insertTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		createTeam($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
	}

	function listConfirmedTeams($eventid){
		return json_encode(listEventTeams($eventid));
	}
?>

