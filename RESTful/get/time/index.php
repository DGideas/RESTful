<?php
//Author:@DGideas
//2016-02-09

require("../../include.php");

$requestHandle = new DGrst();
$sqlHandle = new DGsql();

$microtime = explode(" ", microtime());

$requestHandle->add_param("microtime", $microtime[0]);

print(json_encode($requestHandle->response()));
?>
