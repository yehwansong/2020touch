 <?php
ini_set('display_errors', 1);
require_once 'config.php';

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);


    $Pos_x  = $_POST['pos_x'];
    $Pos_y  = $_POST['pos_y'];
    $Id  = $_POST['id'];

if(isset($_POST["pos_x"]) && ($_POST["pos_y"]) && ($_POST["id"]) && !empty($_POST["pos_x"])){
	$query = ("INSERT INTO touch (id,pos_x,pos_y) VALUES ('$Id','$Pos_x','$Pos_y')");
	$result = mysqli_query($dbconn,$query);
}
?>
