<?php
//Author:@DGideas
//2016-02-07

require("../../include.php");

$requestHandle = new DGrst();

$requestHandle->add_param("api_version", "1.0");
print(json_encode($requestHandle->response()))
?>
