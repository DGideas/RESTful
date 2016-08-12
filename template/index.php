<?php
//Author:@DGideas
//2016-08-12

require("../../include.php");

$requestHandle = new DGrst();
$sqlHandle = new DGsql();



print(json_encode($requestHandle->response()));
?>
