<?php
require_once 'config.php';
$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
$sqlb = ("DELETE FROM touch WHERE time_arc < DATE_ADD(NOW(),INTERVAL -10 SECOND)");
	$result = mysqli_query($dbconn,$sqlb);
?> 