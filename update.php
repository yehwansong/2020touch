<?php


require_once 'config.php';
$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $Pos_x  = $_POST['pos_x'];
    $Pos_y  = $_POST['pos_y'];
    $Id  = $_POST['id'];
if(isset($_POST["pos_x"]) && ($_POST["pos_y"]) && ($_POST["id"]) && !empty($_POST["pos_x"])){
	$query = ("UPDATE touch SET pos_x = $Pos_x, pos_y = $Pos_y WHERE id = $Id ");
	$result = mysqli_query($dbconn,$query);
}

?> 