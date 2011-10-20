<?php
	
	include_once 'interface.registration.php';

	if(isset($_POST['eventid'])) {
		return json_encode(getteamid($_POST['eventid']));
	}

	if(isset($_POST['tatid'])){
		return json_encode(parteventlist($_POST['tatid']));
	}

	if(isset($_POST['rgeventid']) && 
		isset($_POST['rgteamid']) &&
		isset($_POST['rgcaptainid']) &&
		isset($_POST['rgpart1']) &&
		isset($_POST['rgpart2']) &&
		isset($_POST['rgpart3']) &&
		isset($_POST['rgpart4']) &&
		isset($_POST['rgpart5']) &&
		isset($_POST['rgpart6'])){
			updateteam($_POST['rgeventid'],
						$_POST['rgteamid'],
						$_POST['rgcaptainid'],
						$_POST['rgpart1'],
						$_POST['rgpart2'],
						$_POST['rgpart3'],
						$_POST['rgpart4'],
						$_POST['rgpart5'],
						$_POST['rgpart6']);
	}

	if(isset($_POST['key'])){
		return json_encode(searchteam($_POST['key']));
	}

	if(isset($_POST['rgeventid']) &&
						isset($_POST['rgteamid']) &&
						isset($_POST['rgcaptainid']) &&
						isset($_POST['rgpart1']) &&
						isset($_POST['rgpart2']) &&
						isset($_POST['rgpart3']) &&
						isset($_POST['rgpart4']) &&
						isset($_POST['rgpart5']) &&
						isset($_POST['rgpart6']){
		createteam($_POST['rgeventid'],
					$_POST['rgteamid'],
					$_POST['rgcaptainid'],
					$_POST['rgpart1'],
					$_POST['rgpart2'],
					$_POST['rgpart3'],
					$_POST['rgpart4'],
					$_POST['rgpart5'],
					$_POST['rgpart6']);
	}

	if(isset($_POST['eventid'])){
		return json_encode(listeventteams($_POST['eventid']));
	}
?>

