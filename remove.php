
<?php
	
require_once 'config.php';
	$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	$sqla = ("DELETE FROM touch WHERE pos_x = 99999");
	$result = mysqli_query($dbconn,$sqla);
?>