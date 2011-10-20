<?php
	/*
	This interface contains functions to store, modify, access the event details.
	@author Rahul Raveendran VP  <rahul.pmna@gmail.com>
	*/
	include "class.event.php";
	
	/*
	* @func :Gets all info for a particular event.
	* @param : $evid (EventId of a particular event)
	* @returns : $evarray (Details of all events as an array)
	*/
	function getAllEventInfo($evid) {
		$ob = new event($evid);
		$evarray = $ob -> getResourceVar();
		return($evarray);
	}
	
	/*
	* @func : Gets details of 3 winners of a particular event.
	* @param : $evid (EventId of a particular event)
	* @return : $winners (Array od detais of all winners of a particular event)
	*/
	function getEventWinnersInfo($evid) {
		$ob = new event($evid);
		$winners['ev_prize1'] = $ob -> getPrize1();
		$winners['ev_prize2'] = $ob -> getPrize2();
		$winners['ev_prize3'] = $ob -> getPrize3();
		return($winners);
	}
	
	/*
	* @func : Gets a list of all eventids stored in database.
	* @return : An array ($evids) of all eventids.
	*/
	function getAllEventIds() {
		return (event::listAllEventIds());
	}
	
#	/*
#	* @func : 
#	*/
#	function getAllEventWinnersInfo() {
#		$arr = getAllEventIds();
#		$cnt = count($arr);
#		$i = 0;
#		while ($i < $cnt) {
#			$evarray[$i]['ev_id'] = $arr[0];
#			$evarray[$i]['ev_prize']
#		}
#	}
?>
