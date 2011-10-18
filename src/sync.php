<?php
/**
* Script to synchronise Tathva Database (MYSQL) & Main Database(POSTGRESQL)
*/
	require_once (realpath(dirname(__FILE__).'/./database.php'));

	function syncUsers(){
		$user = array();
		$sql = "Select * from participant";
		$res = myquery($sql);
		while($user = mysql_fetch_assoc($res)){
			$sql = "Insert into participant (pc_tatid, pc_name, pc_email, pc_college, pc_contact, pc_state, pc_gender, pc_accomreqst) values('".pg_escape_string($user['tathva_id'])."','".pg_escape_string($user['name'])."','".pg_escape_string($user['email'])."','".pg_escape_string($user['college_name'])."','".pg_escape_string($user['phone'])."','".pg_escape_string($user['state'])."','','n');";
			echo $sql;
		}
	}

	function syncEvents(){
		$events = array();
		$sql = "Select * from event";
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
		$sql = "Select * from workshop";
		$res = myquery($sql);
		while($event = mysql_fetch_assoc($res)){
			$sql = "Insert into 
			event(ev_name, ev_id, ev_mgr, ev_contact, ev_min, ev_max, ev_prize1, ev_prize2, ev_prize3, ev_fee)
			values(
			'".pg_escape_string($event["workshop_name"])."',
			'".pg_escape_string($event["workshop_id"])."',
			'".pg_escape_string($event["workshop_manager"])."',
			'".pg_escape_string($event["manager_contact"])."',
			'1',
			'".pg_escape_string($event["max_part"])."',
			'',
			'',
			'',0);";
			echo $sql;
		}
	}
	
	function syncTeams(){
		$sql="SELECT a.event_id, a.team_id, b.tathva_id, GROUP_CONCAT( a.teammember_id
				SEPARATOR  ',' ) 
				FROM team AS a, participating AS b
				WHERE a.team_id = b.team_id
				GROUP BY a.team_id";
		$res=myquery($sql);
		while($row=mysql_fetch_array($res)){
			//echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$team[1]."<br />";
			$team = explode(",",$row[3]);
			$sql = "Insert into registration(rg_eventid,
											rg_teamid,
											rg_captainid,
											rg_part1,
											rg_part2,
											rg_part3,
											rg_part4,
											rg_part5,
											rg_part6,
											rg_part7)
									values('".pg_escape_string(strtoupper($row[0]))."',
											'".pg_escape_string(strtoupper($row[1]))."',
											'".pg_escape_string(strtoupper($row[2]))."',
											'".pg_escape_string(strtoupper($team[0]))."',
											'".pg_escape_string(strtoupper($team[1]))."',
											'".pg_escape_string(strtoupper($team[2]))."',
											'".pg_escape_string(strtoupper($team[3]))."',
											'".pg_escape_string(strtoupper($team[4]))."',
											'".pg_escape_string(strtoupper($team[5]))."',
											'".pg_escape_string(strtoupper($team[6]))."');";
			echo $sql;
		}
	}
	syncUsers();
	syncEvents();
	syncTeams();
?>
