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
				$pc = array($obj->getRgCaptainId(), $obj->getRgPart1(), $obj->getRgPart2(), $obj->getRgPart3(), $obj->getRgPart4(), $obj->getRgPart5(), $obj->getRgPart6());

				$ct=count($pc);
				$j=0;
				$csv="";
				while($j<$ct)
				{
					if($pc[$j]!='')
						$csv.="$pc[$j],";
					$j++;
				}
				$csv=trim($csv,",");
				
				$res[$teamid]=$csv;
			}
			$i++;
		}
		return $res; 
	}
