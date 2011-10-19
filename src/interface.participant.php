<?php
	include_once 'class.participant.php';
	include_once 'class.registration.php';
	function participantSearch($arg){
		return participant::search($arg);
	}
	function participantConfirm($tid){
		$p = new participant($tid);
		$p->updateStatus("Y");
		registration::confirmEventParticipation($tid);
	}

	function genTathvaId()
	{
		$obj=new participant();
		$temp=$obj->getLastId();
		$temp=$temp+3001;
		$str='TAT'."$temp";
		return $str;
	}
?>
