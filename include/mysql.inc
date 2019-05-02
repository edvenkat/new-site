<?
class DBConnection
{
	
	function openDB($host,$username,$password,$dbname)
	{
		$this->dbconn = mysqli_connect($host,$username,$password);
		if(!(mysqli_select_db($this->dbconn,$dbname)))
			die("Database not Connected : ".mysqli_connect_error());
		return $dbconn;
	}

	function execute($qry)
	{
		$result = mysqli_query($this->dbconn,$qry);
		return mysqli_insert_id($this->dbconn);
	}

	function query($query)
	{
		mysqli_query ($this->dbconn,"set character_set_results='utf8'");
		$result = mysqli_query($this->dbconn,$query);
		if (!$result) return false;
		return $result;
	}

	function fetchRow($result) {
		if (!$result) return false;
		return mysqli_fetch_row($result);
	}

	function fetchArray($result) {
		if (!$result) return false;
		return mysqli_fetch_array($result,MYSQL_BOTH);
	}

	function fetchAll($result) {
		$array = Array();
		if(!$result) return $array;
		while ($row = mysqli_fetch_assoc($result)) {
            $array[] = array_change_key_case($row, CASE_LOWER);
        }
		return $array;
	}
	
	function DataSeek($result) {
		if (!$result) return false;
		return mysqli_data_seek($result,0);
	}

	function FreeResult($result) {
		if (!$result) return false;
		return mysqli_free_result($result);
	}

	function rsCount($result) {
		if(!$result) return false;
		return mysqli_num_rows($result);
	}
	function AffectRows() {
		return mysqli_affected_rows();
	}
}
?>