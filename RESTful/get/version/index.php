<?php
//Author:@DGideas
//2016-02-07

require("../../include.php");

$requestHandle = new DGrst();
$sqlHandle = new DGsql();

$requestHandle->add_param("api_version", $sqlHandle->config_query("api_version"));
print(json_encode($requestHandle->response()))
?>
