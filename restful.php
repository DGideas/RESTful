<?php
$GLOBALS["mysqli_location"] = "localhost";
$GLOBALS["mysqli_username"] = "username";
$GLOBALS["mysqli_password"] = "password";
$GLOBALS["mysqli_database"] = "database";
class restful
{
	protected $response = array();
	
	function __construct()
	{
		$this->response["api_version"] = "1.0";
		$this->response["response_time"] = (int)time();
		$this->response["response_version"] = "1.0";
	}
	
	function append($key, $value)
	{
		$this->response[$key] = $value;
	}
	
	function pop($key)
	{
		if (isset($this->response[$key]))
		{
			unset($this->response[$key]);
		}
	}
	
	function response()
	{
		return json_encode($this->response, JSON_UNESCAPED_UNICODE);
	}
	
	function query($sql)
	{
		$db_connection = new mysqli($GLOBALS["mysqli_location"], $GLOBALS["mysqli_username"],
			$GLOBALS["mysqli_password"], $GLOBALS["mysqli_database"]);
		$db_connection->set_charset("utf8");
		$result = $db_connection->query($sql);
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}
?>
