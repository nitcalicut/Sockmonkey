<?php
/**
* Script to synchronise Tathva Database (MYSQL) & Main Database(POSTGRESQL)
* User synced, events synced (workshop pending)
* TODO: Registration sync
*/
	require_once (realpath(dirname(__FILE__).'/./database.php'));

	function syncUsers($start,$limit){
		$user = array();
		$sql = "Select * from participant limit $start, $limit";
		$res = myquery($sql);
		while($user = mysql_fetch_assoc($res)){
			$sql = "Insert into participant (pc_tatid, pc_name, pc_email, pc_college, pc_contact, pc_state, pc_gender, pc_accomreqst) values('".pg_escape_string($user['tathva_id'])."','".pg_escape_string($user['name'])."','".pg_escape_string($user['email'])."','".pg_escape_string($user['college_name'])."','".pg_escape_string($user['phone'])."','".pg_escape_string($user['state'])."','','n');";
			echo $sql;
		}
	}

	function syncEvents($start,$limit){
		$events = array();
		$sql = "Select * from event limit $start, $limit";
		$res = myquery($sql);
		while($event = mysql_fetch_assoc($res)){
			$sql = "Insert into 
			event(ev_name, ev_id, ev_mgr, ev_contact, ev_min, ev_max, ev_prize1, ev_prize2, ev_prize3)
			values(
			'".pg_escape_string($event["event_name"])."',
			'".pg_escape_string($event["event_id"])."',
			'".pg_escape_string($event["event_manager"])."',
			'".pg_escape_string($event["manager_contact"])."',
			'".pg_escape_string($event["min_part"])."',
			'".pg_escape_string($event["max_part"])."',
			'".pg_escape_string($event["fprize_id"])."',
			'".pg_escape_string($event["sprize_id"])."',
			'".pg_escape_string($event["tprize_id"])."');";
			echo $sql;
		}
	}
?>
