<?php
	include_once "class.accommodation.php";
	include_once "class.participant.php";
	
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
?>
