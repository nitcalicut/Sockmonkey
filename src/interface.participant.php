<?php
	include 'class.participant.php';
	function userSearch($arg){
		return participant::search($arg);
	}
?>
