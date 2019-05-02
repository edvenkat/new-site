<?PHP
class UserFunctions
{
	function getVariable($key, $defval="")
	{
		if(isset($_POST[$key]))
			return $_POST[$key];
		else if(isset($_GET[$key]))
			return $_GET[$key];
		else
			return $defval;
	}
	function filecheck($filename) {
		return is_file($filename);
	}
	function tmp_filecheck($filename) {
		return $this->filecheck(_PATH_TEMPLATE.$filename.".php");
	}
	function code_filecheck($filename) {
		return $this->filecheck(_PATH_CODE.$filename.".php");
	}
	function splitword($word,$offset) {
		$temp = "";
		if($temp1 = explode(" ",$word))
		{
			for($i=0;$i<$offset;$i++)
			{
				$temp .= " ".$temp1[$i];
			}
			if(isset ($temp1[$offset+1]))	
			{
				$temp .= "... ";
			}
		}
		return $temp;
	}
	function splitchar($word,$offset=140) {
		$temp="";
		$wordlen = strlen($word);
		if( $offset < $wordlen ) {
			$temp = substr($word,0,$offset)."...";
		} else {
			$temp = $word;
		}
		return $temp;
	}
	function formcheck($fields,$alretmsg) {
		$msg = "";
		for($i=0;$i<count($fields);$i++) {
			if($this->getVariableFromRequest($fields[$i])==""){
				$msg = "Please fill the ".$alretmsg[$i].".";
				break;
			}
		}
		return $msg;
	}
	function covertDatetoTimestamp($date) {
		if($date!="") {
			$date_array = split('/',$date);
			return mktime (0,0,0,$date_array[0],$date_array[1],$date_array[2]);
		}
		return "";
	}

	 function XOREncryption($InputString, $KeyPhrase){
		$KeyPhraseLength = strlen($KeyPhrase);
		for ($i = 0; $i < strlen($InputString); $i++) {
			$rPos = $i % $KeyPhraseLength;
			$r = ord($InputString[$i]) ^ ord($KeyPhrase[$rPos]);
			$InputString[$i] = chr($r);
		}
		return $InputString;
	}
	function XOREncrypt($InputString, $KeyPhrase="terence"){
		$InputString="<!<enc>!>".$InputString;
		$InputString = $this->XOREncryption($InputString, $KeyPhrase);
		$InputString = base64_encode($InputString);
		return $InputString;
	}
	function XORDecrypt($InputString, $KeyPhrase="terence"){
		$InputString_old=$InputString;
		$InputString = base64_decode($InputString);
		$InputString = $this->XOREncryption($InputString, $KeyPhrase);
		if(!stristr($InputString,"<!<enc>!>")) {
			$InputString=$InputString_old;	
		} else {
			$InputString=str_replace('<!<enc>!>','',$InputString);
		}
		return $InputString;
	}
	function get_current_url() {
		$protocol = "http";
		if($_SERVER["SERVER_PORT"]==443 || (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"]=="on")) {
			$protocol .= "s";
			$protocol_port = $_SERVER["SERVER_PORT"];
		} else {
			$protocol_port = 80;
		}
		$host = $_SERVER["HTTP_HOST"];
		$port = $_SERVER["SERVER_PORT"];
		$request_path = $_SERVER["PHP_SELF"];
		$querystr = $_SERVER["QUERY_STRING"];
		$url = $protocol."://".$host.(($port!=$protcol_port && strpos($host,":")==-1)?":".$port:"").$request_path.(empty($querystr)?"":"?".$querystr);
		return $url;
	}		
		
}
?>