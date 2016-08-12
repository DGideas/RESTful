<?php
//Author:@DGideas
//2016-02-07

require("../../include.php");

$requestHandle = new DGrst();
$sqlHandle = new DGsql();

$sqlHandle->session_clean();
$key = $requestHandle->token();
$requestHandle->add_param("token", $key);

if(!$sqlHandle->session_add($key))
{
	$requestHandle->code("403", "Request too freqently");
	$requestHandle->add_param("token", null);
}

print(json_encode($requestHandle->response()));
?>
