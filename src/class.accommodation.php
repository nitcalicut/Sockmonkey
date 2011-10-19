<?php
/**
* Accommodation class for handling Tathva hospitality related functions.
* @author Addy Singh <addy689@gmail.com>
* @package content
*/

/**
* Includes files for database connectivity.
*/

include_once 'database.php';

/**
* Class accommodation for hospitality management.
* @package accommodation
*/
class accommodation
{
	private $acaptid, $aitems, $aroom, $adereg;
	
	/**
	* The constructor selects the appropriate function based on the number of
	* arguments and calls the appropriate protected function.
	*/
	public function __construct(){
		$a = func_get_args();
		$i = func_num_args(); 
		if($i==1)
			call_user_func_array(array($this,'view'),$a);
		if($i==3)
			call_user_func_array(array($this,'create'),$a);
	}

	public function __destruct() { }

	/**
	* Initializes the class properties for a given captain ID.
	* @param string $acaptid accommodation team captain's ID.
	*/
	protected function view($acaptid){
		$sql="SELECT ac_captainid, ac_issueditems, ac_room, ac_deregstrd FROM accomodation WHERE ac_captainid = '".$acaptid."'";
		$capt=pg_fetch_assoc(dbquery($sql));
		$this->acaptid=$capt['ac_captainid'];
		$this->aitems=$capt['ac_issueditems'];
		$this->aroom=$capt['ac_room'];
		$this->adereg=$capt['ac_deregstrd'];
	}
	
	/**
	* Function to add an Accommodation Team. The team captain's ID is given by acaptid.
	* @param string $aitems Items issued to the team.
	* @param string $aroom Room allotted to the team.
	* @param character $adereg Whether participant has unregistered from accommodation.
	*/
	protected function create($acaptid, $aitems, $aroom){
		$this->acaptid=pg_escape_string($acaptid);
		$this->aitems=pg_escape_string($aitems);
		$this->aroom=pg_escape_string($aroom);
		
		$sql="INSERT INTO accomodation (ac_captainid, ac_issueditems, ac_room) VALUES ('".$this->acaptid."','".$this->aitems."','".$this->aroom."')";
		
		dbquery($sql);
	}

	public function getCaptId(){
		return $this->acaptid;
	}

	public function getItems(){
		return $this->aitems;
	}

	public function getRoom(){
		return $this->aroom;
	}

	public function  getDereg(){
		return $this->adereg;
	}
	

	/**
	* Static function that updates an accommodated Team's information. The team captain's ID is given by acaptid.
	* @param string $aitems Items issued to the team.
	* @param string $aroom Room allotted to the team.
	* @return integer (1:exists | 0:does not exist)
	*/

	public function updateInfo($acaptid,$aitems,$aroom,$adereg){
		$acaptid=pg_escape_string($acaptid);
		$aitems=pg_escape_string($aitems);
		$aroom=pg_escape_string($aroom);
		$adereg=pg_escape_string($adereg);
		
		$sql="UPDATE accomodation SET ac_captainid='".$acaptid."',ac_issueditems='".$aitems."', ac_room='".$aroom."',ac_deregstrd='".$adereg."' WHERE ac_captainid = '".$this->acaptid."'";

		$r=dbquery($sql);
		if($r)
		{echo 'fired';
			return 1;
			}
		else
			return 0;
	}
	
#	/**
#	* Static function that updates the current Accomodation status to $s. The team captain's ID is given by acaptid.
#	* @return integer (1: exists | 0: does not exists)
#	*/
#	public static function updateDereg($acaptid, $s){
#		$acaptid=pg_escape_string($acaptid);
#		$s=pg_escape_string($s);
#		
#		$sql="UPDATE accomodation SET ac_deregstrd='".$s."' WHERE ac_acaptid='".$acaptid."'";
#		$r=dbquery($sql);

#		if($r)
#			return 1;
#		else
#			return 0;*/
#	}
}

?>

