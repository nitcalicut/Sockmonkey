<?php
	include "interface.event.php";

	/*
	* Function gives you all details of an event.
	* @param $evid EventId
	* @return json encoded form of details.
	*/
	function eventInfo($evid) {
		return json_encode(getEventInfo($evid));
	}

	/*
	* Function gives you all prize details (1st,2nd & 3rd) of an event.
	* @param $evid EventId
	* @return json encoded form of details.
	*/
	function prizeList($evid) {
		return json_encode(getEventWinnersInfo($evid));
	}

	/*
	* Function gives you all details of an event.
	* @param $evid EventId
	* @return json encoded form of details.
	*/
	function updatePrize($evid,$p1,$p2,$p3) {
		return json_encode();
	}
?>
