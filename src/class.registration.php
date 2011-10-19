<?php
/**
* Registration Model
*/

/**
* Includes files for database connectivity.
*/

include_once 'database.php';

/**
* Class registration for managing registration
*/
class registration
{
	private $rgNo,$rgEventId,$rgTeamId,$rgCaptainId,$rgCaptainConfirm,$rgPart1,$rgConfirm1,$rgPart2,$rgConfirm2,$rgPart3,$rgConfirm3,$rgPart4,$rgConfirm4,$rgPart5,$rgConfirm5,$rgPart6,$rgConfirm6;

	public function __construct(){
		$a = func_get_args();
		$i = func_num_args(); 
		if($i==1)
			call_user_func_array(array($this,'view'),$a);
		if($i==9)
			call_user_func_array(array($this,'create'),$a);
	}

	public function __destruct() { }

	protected function view($x){
		$sql="SELECT rg_no,rg_eventid,rg_teamid,rg_captainid,rg_captaincnfrm,rg_part1,rg_cnfrm1,rg_part2,rg_cnfrm2,rg_part3,rg_cnfrm3,rg_part4,rg_cnfrm4,rg_part5,rg_cnfrm5,rg_part6,rg_cnfrm6 FROM registration WHERE rg_teamid = '".$x."'";
		$user=pg_fetch_assoc(dbquery($sql));
		$this->rgNo=$user['rg_no'];
		$this->rgEventId=$user['rg_eventid'];
		$this->rgTeamId=$user['rg_teamid'];
		$this->rgCaptainId=$user['rg_captainid'];
		$this->rgCaptainConfirm=$user['rg_captaincnfrm'];
		$this->rgPart1=$user['rg_part1'];
		$this->rgConfirm1=$user['rg_cnfrm1'];
		$this->rgPart2=$user['rg_part2'];
		$this->rgConfirm2=$user['rg_cnfrm2'];
		$this->rgPart3=$user['rg_part3'];
		$this->rgConfirm3=$user['rg_cnfrm3'];
		$this->rgPart4=$user['rg_part4'];
		$this->rgConfirm4=$user['rg_cnfrm4'];
		$this->rgPart5=$user['rg_part5'];
		$this->rgConfirm5=$user['rg_cnfrm5'];
		$this->rgPart6=$user['rg_part6'];
		$this->rgConfirm6=$user['rg_cnfrm6'];
		
	}

	protected function create($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6,$rgPart7){
		$this->rgEventId	=	pg_escape_string($rgEventId);
		$this->rgTeamId		=	pg_escape_string($rgTeamId);
		$this->rgCaptainId	=	pg_escape_string($rgCaptainId);
		$this->rgPart1		=	pg_escape_string($rgPart1);
		$this->rgPart2		=	pg_escape_string($rgPart2);
		$this->rgPart3		=	pg_escape_string($rgPart3);
		$this->rgPart4		=	pg_escape_string($rgPart4);
		$this->rgPart5		=	pg_escape_string($rgPart5);
		$this->rgPart6		=	pg_escape_string($rgPart6);
		
		$sql="Insert into registration(rg_eventid,
										rg_teamid,
										rg_captainid,
										rg_part1,
										rg_part2,
										rg_part3,
										rg_part4,
										rg_part5,
										rg_part6) 
							values ('".$this->rgEventId."',
									'".$this->rgTeamId."',
									'".$this->rgCaptainId."',
									'".$this->rgPart1."',
									'".$this->rgPart2."',
									'".$this->rgPart3."',
									'".$this->rgPart4."',
									'".$this->rgPart5."',
									'".$this->rgPart6."') returning rg_no";
		$user=pg_fetch_assoc(dbquery($sql));
		$this->rgNo=$user['rg_no'];
	}

	public function getRgNo(){
		return $this->rgNo;
	}

	public function getRgEventId(){
		return $this->rgEventId;
	}

	public function getRgTeamId(){
		return $this->rgTeamId;
	}

	public function getRgCaptainId(){
		return $this->rgCaptainId;
	}
	public function getRgCaptainConfirm(){
		return $this->rgCaptainConfirm;
	}


	public function getRgPart1(){
		return $this->rgPart1;
	}

	public function getRgConfirm1(){
		return $this->rgConfirm1;
	}

	public function getRgPart2(){
		return $this->rgPart2;
	}

	public function getRgConfirm2(){
		return $this->rgConfirm2;
	}

	public function getRgPart3(){
		return $this->rgPart3;
	}

	public function getRgConfirm3(){
		return $this->rgConfirm3;
	}

	public function getRgPart4(){
		return $this->rgPart4;
	}

	public function getRgConfirm4(){
		return $this->rgConfirm4;
	}

	public function getRgPart5(){
		return $this->rgPart5;
	}

	public function getRgConfirm5(){
		return $this->rgConfirm5;
	}

	public function getRgPart6(){
		return $this->rgPart6;
	}

	public function getRgConfirm6(){
		return $this->rgConfirm6;
	}

	
	public static function searchRegisteredTeam($arg){
		$arg='%'.$arg.'%';
		$sql="SELECT * FROM registration WHERE (rg_teamid LIKE '".$arg."') OR (rg_captainid LIKE '".$arg."') OR (rg_part1 LIKE '".$arg."') OR (rg_part2 LIKE '".$arg."') OR (rg_part3 LIKE '".$arg."') OR (rg_part4 LIKE '".$arg."') OR (rg_part5 LIKE '".$arg."') OR (rg_part6 LIKE '".$arg."')";
		$arr=resource2array(dbquery($sql));
		return $arr;
	}
	public function updateTeamReg($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6){
		$sql="DELETE FROM registration WHERE rg_teamid='$rgTeamId'";
		$user=dbquery($sql);
		$this->create($rgEventId,$rgTeamId,$rgCaptainId,$rgPart1,$rgPart2,$rgPart3,$rgPart4,$rgPart5,$rgPart6);
	}
	
	public static function confirmEventParticipation($tid){
		$sql="update registration set rg_cnfrm1 = CASE WHEN rg_part1 = '$tid' then 'Y' ELSE 'N' END,
								rg_cnfrm2 = CASE WHEN rg_part2 = '$tid' then 'Y' ELSE 'N' END,
								rg_cnfrm3 = CASE WHEN rg_part3 = '$tid' then 'Y' ELSE 'N' END,
								rg_cnfrm4 = CASE WHEN rg_part4 = '$tid' then 'Y' ELSE 'N' END,
								rg_cnfrm5 = CASE WHEN rg_part5 = '$tid' then 'Y' ELSE 'N' END,
								rg_cnfrm6 = CASE WHEN rg_part6 = '$tid' then 'Y' ELSE 'N' END,
								rg_captaincnfrm = CASE WHEN rg_captainid = '$tid' then 'Y' ELSE 'N' END";
		dbquery($sql);
	}
}

?>
