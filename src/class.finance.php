<?php
/**
* Finance class for handling credit/debits at the Tathva registration desk.
* @author Addy Singh <addy689@gmail.com>
* @package content
*/

/**
* Includes files for database connectivity.
*/

include_once 'database.php';

/**
* Class finance for handling credit/debits at the Tathva registration desk.
* @package finance
*/
class finance
{
	private $fno, $fdeb, $fcred, $fcomm, $ftime;
	
	/**
	* The constructor selects the appropriate function based on the number of
	* arguments and calls the appropriate protected function.
	*/
	public function __construct(){
		$a = func_get_args();
		$i = func_num_args(); 
		if($i==3)
			call_user_func_array(array($this,'create'),$a);
	}

	public function __destruct() { }

	/**
	* Function to add an finance transaction. The team captain's ID is given by acaptid.
	* @param string $aitems Items issued to the team.
	* @param string $aroom Room allotted to the team.
	* @param character $adereg Whether participant has unregistered from finance.
	*/
	protected function create($fdeb,$fcred,$fcomm){
		$this->fdeb=pg_escape_string($fdeb);
		$this->fcred=pg_escape_string($fcred);
		$this->fcomm=pg_escape_string($fcomm);
		
		$sql="INSERT INTO finance (fn_credit,fn_debit,fn_detail) VALUES ('".$this->fdeb."','".$this->fcred."','".$this->comm."')";
		
		$dbquery($sql);
	}

	public static getCredSum(){
		$sql="SELECT SUM(fn_credit) FROM finance";
		$r=dbquery($sql);
		$amt=pg_fetch_row($r);
		return $amt[0];
	}
	
	public static getDebSum(){
		$sql="SELECT SUM(fn_debit) FROM finance";
		$r=dbquery($sql);
		$amt=pg_fetch_row($r);
		return $amt[0];
	}
	
	public static function getAllData(){
		$sql="SELECT * FROM finance";
		return resource2array(dbquery($sql));
	}
}
?>

