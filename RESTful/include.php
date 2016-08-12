<?php
//Author:@DGideas
//2016-08-12

// Basic configs
require("private/hooks/database.php"); //$GLOBALS["HOOKS_DATABASE"]
require("private/hooks/session.php"); //$GLOBALS["HOOKS_SESSION"]
require("private/secret.php"); //$GLOBALS["DGDATABASE"]
require("public/timezone.php"); //$GLOBALS["HTTP_STATUS"]
require("public/httpstatus.php");

// Basic libs
require("public/restful.php");
require("public/dgsql.php");
?>
