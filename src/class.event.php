<?php
/*
	This class contains functions to store, modify, access the event details.
	@author Rahul Raveendran VP		<rahul.pmna@gmail.com>
	@author Mitaksh		<mitakshg@gmail.com>
	
*/
	include_once 'database.php';

	class event {
		private $eno,$ename,$eid,$emgr,$econtact,$emin,$emax,$efee,$eprize1,$eprize2,$eprize3,$etype,$resourcevar;
		/**/
		public function __construct() {
			$a = func_get_args();
			$i = func_num_args(); 
			if($i==1)
				call_user_func_array(array($this,'viewEvent'),$a);
			if($i==10)
				call_user_func_array(array($this,'createEvent'),$a);
		}
		public function __destruct() {}
		
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


		/* This function helps you viewing details for a particular event if the event number is given 
		*
		*/

		protected function viewEvent ($evid) {
			$qry = "select * from event where ev_id='".$evid."'";
			$res = dbquery($qry);
			$this->resourcevar = (resource2array($res));
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
			$this->etype=$rec[11];
		}

		/*
		* This function helps you to search the events in the table using all possible combinations of fields.
		* @return: it returns a record set which contains the result of search.
		*/

		public static function searchEvent($arg) {
			$arg='%'.$arg.'%';
			$qry = "select * from event where 
						(ev_name like '".$arg."') OR 
						(ev_id like '".$arg."') OR 
						(ev_mgr like '".$arg."')";
						
			return (resource2array(dbquery($qry)));
		}

		/*
		* This is a function for updating an event's details'
		*/

		public function updateEvent() {
			$qry = "update event set 
						ev_name = '".$this->ename."' ,
						ev_id = '".$this->eid."' ,
						ev_mgr = '".$this->emgr."' ,
						ev_contact = '".$this->econtact."' ,
						ev_min = ".$this->emin." ,
						ev_max = ".$this->emax." ,
						ev_fee = ".$this->efee." ,
						ev_prize1 = '".$this->eprize1."' ,
						ev_prize2 = '".$this->eprize2."' ,
						ev_prize3 = '".$this->eprize3."' 
						where ev_no=".$this->eno."";
			$res = dbquery($qry);
		}
		
		/*
		* List all EventIds
		* @returns all event ids
		*/
		public static function listAllEventIds(){
			$qry = "select ev_id from event";
			$res = dbquery($qry);
			return(resource2array($res));
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

	public function getEventType() {
		return $this->etype;
	}
	
	public function getResourceVar() {
		return $this->resourcevar;
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
