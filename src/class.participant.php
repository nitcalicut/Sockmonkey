<?php
/**
* Participant class for handling Tathva participant related functions.
* @author Addy Singh <addy689@gmail.com>
* @package content
*/

/**
* Includes files for database connectivity.
*/

include_once 'database.php';

/**
* Class participant for managing participants.
* @package participant
*/
class participant
{
	private $pid, $pcnfrm, $pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq, $pcapt, $pnitc;

	/**
	* The constructor selects the appropriate function based on the number of
	* arguments and calls the appropriate protected function.
	*/
	public function __construct(){
		$a = func_get_args();
		$i = func_num_args(); 
		if($i==1)
			call_user_func_array(array($this,'view'),$a);
		if($i==9)
			call_user_func_array(array($this,'create'),$a);
	}

	public function __destruct() { }

	/**
	* Initializes the class properties for a given participant id.
	* @param string $pid Participant ID of a participant
	*/
	protected function view($pid){
		$sql="SELECT pc_tatid, pc_confirm, pc_name, pc_college, pc_contact, pc_state, pc_gender, pc_accomreqst, pc_accomcaptainid, pc_nitcrollno FROM participant WHERE pc_tatid = '".$pid."'";
		$prtcpnt=pg_fetch_assoc(dbquery($sql));
		$this->pid=$prtcpnt['pc_tatid'];
		$this->pcnfrm=$prtcpnt['pc_confirm'];
		$this->pname=$prtcpnt['pc_name'];
		$this->pemail=$prtcpnt['pc_email'];
		$this->pcoll=$prtcpnt['pc_college'];
		$this->pcntct=$prtcpnt['pc_contact'];
		$this->pstate=$prtcpnt['pc_state'];
		$this->pgen=$prtcpnt['pc_gender'];
		$this->preq=$prtcpnt['pc_accomreqst'];
		$this->pcapt=$prtcpnt['pc_accomcaptainid'];
		$this->pnitc=$prtcpnt['pc_nitcrollno'];
	}
	
	/**
	* Function to add a new participant. The generated Participant ID is stored in the property pid.
	* @param string $pname Full Name of the participant.
	* @param string $pemail Email ID of the participant.
	* @param string $pcoll College of the participant.
	* @param string $pcntct Contact no. of the participant.
	* @param string $pstate State the participant belongs to.
	* @param character $pgen Gender of the participant.
	* @param character $preq Whether accomodation has been requested by the participant.
	* @param string $pnitc Roll Number of a participant from NITC.
	*/
	protected function create($pid, $pname, $pemail, $pcoll, $pcntct, $pstate, $pgen, $preq, $pnitc){
		$this->pid=pg_escape_string($pid);
		$this->pname=pg_escape_string($pname);
		$this->pemail=pg_escape_string($pemail);
		$this->pcoll=pg_escape_string($pcoll);
		$this->pcntct=pg_escape_string($pcntct);
		$this->pstate=pg_escape_string($pstate);
		$this->pgen=pg_escape_string($pgen);
		$this->preq=pg_escape_string($preq);
		$this->pnitc=pg_escape_string($pnitc);
		
		$sql="INSERT INTO participant (pc_tatid, pc_name, pc_email, pc_college, pc_contact, pc_state, pc_gender, pc_accomreqst, pc_nitcrollno) VALUES ('" . $this->pid . "','" . $this->pname . "','".$this->pemail . "','" . $this->pcoll . "','" . $this->pcntct . "','" . $this->pstate . "','" . $this->pgen . "','" . $this->preq . "','" . $this->pnitc . "')";
		
		dbquery($sql);
	}

	public function getTatId(){
		return $this->pid;
	}
	
	public function getConfirmStatus(){
		return $this->pcnfrm;
	}

	public function getName(){
		return $this->pname;
	}

	public function getEmail(){
		return $this->pemail;
	}

	public function getCollege(){
		return $this->pcoll;
	}

	public function getContact(){
		return $this->pcntct;
	}

	public function getState(){
		return $this->pstate;
	}

	public function getGender(){
		return $this->pgen;
	}
	
	public function getAccomRequest(){
		return $this->preq;
	}
	
	public function getAccomCaptain(){
		return $this->pcapt;
	}
	
	public function getNitcRollNo(){
		return $this->pnitc;
	}

	public static function search($arg){
		$arg='%'.$arg.'%';
		$sql="SELECT * FROM participant WHERE (pc_tatid LIKE '".$arg."') OR (pc_name LIKE '".$arg."') OR (pc_email LIKE '".$arg."')";
		$arr=resource2array(dbquery($sql));
		return $arr;
	}

	/**
	* Static function that updates the Participant information.
	* @param string $pid Participant ID of a participant.
	* @param string $pname Full Name of the participant.
	* @param string $pemail Email ID of the participant.
	* @param string $pcoll College of the participant.
	* @param string $pcntct Contact no. of the participant.
	* @param string $pstate State the participant belongs to.
	* @param character $preq Whether accomodation has been requested by the participant.
	* @param string $pnitc Roll Number of a participant from NITC.
	* @return integer (1:update successful | 0:update unsuccessful)
	*/
	public function updateInfo($pname, $pemail, $pcoll, $pcntct, $pstate, $preq, $pnitc){
		$pname=pg_escape_string($pname);
		$pemail=pg_escape_string($pemail);
		$pcoll=pg_escape_string($pcoll);
		$pcntct=pg_escape_string($pcntct);
		$pstate=pg_escape_string($pstate);
		$preq=pg_escape_string($preq);
		$pnitc=pg_escape_string($pnitc);
	
		$sql="UPDATE participant SET pc_name='".$pname."', pc_email='".$pemail."', pc_college='".$pcoll."', pc_contact='".$pcntct."', pc_state='".$pstate."', pc_accomreqst='".$preq."', pc_nitcrollno='".$pnitc."' WHERE pc_tatid = '".$this->pid."'";
		
		$r=dbquery($sql);
		if($r)
			return 1;
		else
			return 0;
	}
	
	/**
	* Static function that updates the Participant Registration information to a given status $st.
	* @param string $pid Participant ID of a participant.
	* @return integer (1:update successful | 0:update unsuccessful)
	*/
	public function updateStatus($st){
		$st=pg_escape_string($st);
			
		$sql="UPDATE participant SET pc_confirm='".$st."' WHERE pc_tatid = '".$this->pid."'";
		
		$r=dbquery($sql);
		if($r)
			return 1;
		else
			return 0;
	}

	/**
	* Static function that updates the current Accomodation captain to a given new Captain.
	* @param string $oldcapt Tathva ID of the current Accomodation Captain.
	* @param string $newcapt Tathva ID of the new Accomodation Captain.
	* @return integer (1: exists | 0: does not exists)
	*/
	public static function updateAccomCaptain($oldcapt, $newcapt){
		$oldcapt=pg_escape_string($oldcapt);
		$newcapt=pg_escape_string($newcapt);
		
		$sql="UPDATE participant SET pc_accomcaptainid='".$newcapt."' WHERE pc_accomcaptainid='".$oldcapt."'";
		$r=dbquery($sql);
		if($r)
			return 1;
		else
			return 0;
	}

	public function getLastId(){
		$sql="SELECT COUNT (*) FROM participant";
		$x=pg_fetch_row(dbquery($sql));
		return $x[0];
	}

	/**
	* Static function that inserts an Accomodation captain for a set of participants whose tathva ID's are contained in array $team[].
	* @param string $captid Tathva ID of the Accomodated Team's Captain.
	* @return integer (1: exists | 0: does not exists)
	*/
	public static function insertAccomCaptain($team,$captid){
		$cnt=count($team);
		$i=0;
		$sql="BEGIN;";
		while($i < $cnt)
		{
			$sql .="UPDATE participant SET pc_accomcaptainid='$captid' WHERE pc_tatid='{$team[$i]}';";
			$i++;
		}
		$sql .="COMMIT";
		$r=dbquery($sql);
		if($r)
			return 1;
		else
			return 0;
	}


#	THE FOLLOWING FUNCTIONS, IF REQUIRED, CAN BE UNCOMMENTED  
#	
#	/**
#	* Static function to check if a participant already exists.
#	* @param string $pname Given participant name
#	* @return integer returns (exists:1 | does not exist:0)
#	*/
#	public static function checkNameExists($pname)
#	{
#		$sql="SELECT pc_tatid FROM participant WHERE pc_name='".$pname."'";
#		$r=pg_fetch_row(dbquery($sql));
#		if($r)
#			return 1;
#		else
#			return 0;
#	}

#	/**
#	* Static function to check if an email already exists. 
#	* @param string $pemail Given email ID
#	* @return integer (1: exists | 0: does not exists)
#	*/
#	public static function checkEmailExists($pemail)
#	{
#		$sql="SELECT pc_tatid FROM participant WHERE pc_email='".$pemail."'";
#		$r=pg_fetch_row(dbquery($sql));
#		if($r)
#			return 1;
#		else
#			return 0;
#	}

#	/**
#	* Checks if a Paticipant ID already exists in the database.
#	* @param string $pid Participant ID of a participant.
#	* @return integer (1:exists | 0:does not exist)
#	*/
#	public static function checkTatIdExists($pid)
#	{
#		$pid=strtoupper($pid);
#		$sql="SELECT pc_tatid FROM participant WHERE pc_tatid='".$pid."'";
#		$r=pg_fetch_row(dbquery($sql));
#		if($r)
#			return 1;
#		else
#			return 0;
#	}
#	
#	public static function checkRollNoExists($pnitc)
#	{
#		$pnitc=strtoupper($pnitc);
#		$sql="SELECT pc_tatid FROM participant WHERE pc_nitcrollno='".$pnitc."'";
#		$r=pg_fetch_row(dbquery($sql));
#		if($r)
#			return 1;
#		else
#			return 0;
#	}
	
}

?>

