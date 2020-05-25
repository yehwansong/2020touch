
<?php
require_once 'config.php';
	
	$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	if (!$dbconn) {
	   echo 'Could not connect: ' . mysqli_error($con);
	}
	
	mysqli_select_db($dbconn,"ajax_demo");
	$sql="SELECT * FROM touch";
	$result = mysqli_query($dbconn,$sql);
if (!$result ) {
    echo "Error: %s\n", mysqli_error($con);
    exit();
}
	while($row = mysqli_fetch_array($result)) {
		echo '/';
		echo $row['id'];
		echo ",";
		echo $row['pos_x'];
		echo ",";
		echo $row['pos_y'];
	}

?>