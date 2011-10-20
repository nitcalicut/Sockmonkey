<?php

	/*
	This file contains functions to handle the tathva event details.
	@author Rahul Raveendran VP  <rahul.pmna@gmail.com>
	*/
	
	include "interface.event.php";

	/*
	* "preeventid" is passed to get all details of event.
	* @return json encoded form of all details of a particular event.
	*/
	if (isset($_POST['preeventid'])) {
		return json_encode(getEventInfo($_POST['eventid']));
	}

	/*
	* "posteventid" is passed to get details of 1st,2nd and 3rd prize when event is over.
	* @return json encoded form of details.
	*/
	if (isset($_POST['posteventid'])) {
		return json_encode(getEventWinnersInfo($_POST['eventid']));
	}

	/*
	* here the updation of prizeList is happening :-)
	*/
	if (isset($_POST['eventid']) && isset($_POST['prize1']) && isset($_POST['prize2']) && isset($_POST['prize3'])) {
		updatePrizelist($evid,$p1,$p2,$p3);
	}
?>
