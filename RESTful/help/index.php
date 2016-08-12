<?php
//Author:@DGideas
//2016-02-07

require("../include.php");

$requestHandle = new DGrst();
$sqlHandle = new DGsql();

$requestHandle->add_param("help_page", "https://github.com/DPSTeam/remote-course-arrangement-api/wiki");

print(json_encode($requestHandle->response()));
?>
