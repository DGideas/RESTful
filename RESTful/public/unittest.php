<?php
	require("../include.php");
	$classHandle = new DGrst();
	var_dump($classHandle->response());
	$classHandle = new DGsql();
	print("Done\n");
?>
