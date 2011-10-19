<?php
/*
	This class contains functions to store, modify, access the event details.
	@author Rahul		<rahul.pmna@gmail.com>
	@author Mitaksh		<mitakshg@gmail.com>
	
*/
	include_once 'database.php';

	class event {
		private $eno,$ename,$eid,$emgr,$econtact,$emin,$emax,$efee,$eprize1,$eprize2,$eprize3;
		/**/
		public function __construct() {
			$a = func_get_args();
			$i = func_num_args(); 
			if($i==1)
				call_user_func_array(array($this,'viewEvent'),$a);
			if($i==10)
				call_user_func_array(array($this,'createEvent'),$a);
		}
		public function __destruct() {
			
		}
		
		/*
			this fuction helps you inserting a new event into database 
			@param string ename: event name, string eid: event Id, string emgr: event manager,
			
		*/
		protected function createEvent ($evname,$evid,$evmgr,$evcontact,$evmin,$evmax,$evfee,$evprize1,$evprize2,$evprize3) {
			$this->ename = pg_escape_string($evname);
			$this->eid = pg_escape_string($evid);
			$this->emgr = pg_escape_string($evmgr);
			$this->econtact = pg_escape_string($evcontact);
			$this->emin = pg_escape_string($evmin);
			$this->emax = pg_escape_string($evmax);
			$this->efee = pg_escape_string($evfee);
			$this->eprize1 = pg_escape_string($evprize1);
			$this->eprize2 = pg_escape_string($evprize2);
			$this->eprize3 = pg_escape_string($evprize3);
			$qry = "Insert into event(ev_name,ev_id,ev_mgr,ev_contact,ev_min,ev_max,ev_fee,ev_prize1,ev_prize2,ev_prize3)
					values ('".$this->ename."',
						'".$this->eid."',
						'".$this->emgr."',
						'".$this->econtact."',
						".$this->emin.",
						".$this->emax.",
						".$this->efee.",
						'".$this->eprize1."',
						'".$this->eprize2."',
						'".$this->eprize3."') RETURNING ev_no";
			$eventNo=pg_fetch_assoc(dbquery($qry));
			$this->eno=$eventNo['ev_no'];
		}


		/* This fuction helps you viewing details for a particular event if the event number is given 
		*
		*/

		protected function viewEvent ($eno) {
			$qry = "select * from event where ev_no='".$eno."'";
			$res = dbquery($qry);
			$rec = pg_fetch_row($res);
			$this->eno = $rec[0];
			$this->ename = $rec[1];
			$this->eid = $rec[2];
			$this->emgr = $rec[3];
			$this->econtact = $rec[4];
			$this->emin = $rec[5];
			$this->emax = $rec[6];
			$this->efee = $rec[7];
			$this->eprize1 = $rec[8];
			$this->eprize2 = $rec[9];
			$this->eprize3 = $rec[10];
		}

		/*
		* This function helps you to search the events in the table using all possible combinations of fields.
		* @return: it returns a record set which contains the result of search.
		*/

		public function searchEvent() {
			$qry = "select * from event where 
						ev_no = ".$this->eno." or 
						ev_name like '%".$this->ename."%' or 
						ev_id like '%".$this->eid."%' or 
						ev_emgr like '%".$this->emgr."%' or 
						ev_econtact like '%".$this->econtact."%' or 
						ev_emin = ".$this->emin." or 
						ev_emax = ".$this->emax." or 
						ev_efee = ".$this->efee." or 
						ev_eprize1 like '%".$this->eprize1."%' or 
						ev_eprize2 like '%".$this->eprize2."%' or 
						ev_eprize3 like '%".$this->eprize3."%'";
			return (resource2array(dbquery($qry)));
		}

		/*
		* This is a function for uodating an event's details'
		*/

		public function updateEvent() {
			$qry = "update event set 
						ev_name = '".$this->ename."' ,
						ev_id = '".$this->eid."' ,
						ev_emgr = '".$this->emgr."' ,
						ev_econtact = '".$this->econtact."' ,
						ev_emin = ".$this->emin." ,
						ev_emax = ".$this->emax." ,
						ev_efee = ".$this->efee." ,
						ev_eprize1 = '".$this->eprize1."' ,
						ev_eprize2 = '".$this->eprize2."' ,
						ev_eprize3 = '".$this->eprize3."' 
						where ev_no=".$this->eno."";
			$res = dbquery($qry);
		}
	/*
	* the following functions helps you to get data from the Object.
	* they are 'get methods' :-)
	*/
	
	public function getEventName() {
		return $this->ename;
	}
	
	public function getEventId() {
		return $this->eid;
	}
	
	public function getEventNo() {
		return $this->eno;
	}
	
	public function getManager() {
		return $this->emgr;
	}

	public function getContact() {
		return $this->econtact;
	}

	public function getMinimum() {
		return $this->emin;
	}
		
	public function getMaximum() {
		return $this->emax;
	}

	public function getFee() {
		return $this->efee;
	}
	
	public function getPrize1() {
		return $this->eprize1;
	}

	public function getPrize2() {
		return $this->eprize2;
	}

	public function getPrize3() {
		return $this->eprize3;
	}
	
	/*
	* the following functions helps you to set data to the Object.
	* @Param $value is set correspondinlg to value-member of the class
	*/
	
	public function setEventName($value) {
		$this->ename = $value;
	}
	
	public function setEventId($value) {
		$this->eid = $value;
	}
	
	public function setEventNo($value) {
		$this->eno = $value;
	}
	
	public function setManager($value) {
		$this->emgr = $value;
	}

	public function setContact($value) {
		$this->econtact = $value;
	}

	public function setMinimum($value) {
		$this->emin = $value;
	}
		
	public function setMaximum($value) {
		$this->emax = $value;
	}

	public function setFee($value) {
		$this->efee = $value;
	}
	
	public function setPrize1($value) {
		$this->eprize1 = $value;
	}

	public function setPrize2($value) {
		$this->eprize2 = $value;
	}

	public function setPrize3($value) {
		$this->eprize3 = $value;
	}
	
}

?>
