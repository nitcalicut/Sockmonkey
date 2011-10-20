<?php
	
	include_once 'interface.registration.php';

	if(isset($_POST['eventid'])) {
		echo json_encode(getTeamId($_POST['eventid']));
	}

	if(isset($_POST['tatid'])){
		echo json_encode(partEventList($_POST['tatid']));
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
			updateTeam($_POST['rgeventid'],
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
		echo json_encode(searchTeam($_POST['key']));
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

	if(isset($_GET['eventid'])){
		echo json_encode(listEventTeams($_GET['eventid']));
	}
?>

