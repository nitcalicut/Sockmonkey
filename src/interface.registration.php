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

	
?>
