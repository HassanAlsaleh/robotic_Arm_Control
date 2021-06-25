<?php
require_once("connect.php");
if (isset($_GET['start'])){
$q1 = "SELECT * FROM etable where entry='1'";
$res = mysqli_query($connection, $q1);
    $engine1=$engine2=$engine3=$engine4=$engine5=$engine6=0;
    $entry=1;
if (mysqli_num_rows($res) > 0) {
	$row = mysqli_fetch_assoc($res);
	$engine1=$row["Engine1"];
	$engine2=$row["Engine2"];
	$engine3=$row["Engine3"];
	$engine4=$row["Engine4"];
	$engine5=$row["Engine5"];
	$engine6=$row["Engine6"];

	}
$enginestatus=1;
//0 is off and 1 is on 
$sqlq="UPDATE etable SET 
Engine1='$engine1',
Engine2='$engine2',
Engine3='$engine3',
Engine4='$engine4',
Engine5='$engine5',
Engine6='$engine6',
status='$enginestatus'
WHERE entry='$entry'";
if (@mysqli_query($connection, $sqlq)) {
    echo  "$engine1, $engine2, $engine3, $engine4, $engine5, $engine6, $enginestatus";

} else {
    die("Updating the engine values has failed:" . mysqli_error($connection));
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="index.php">
<input type="submit" name="Return" class="btn btn-info btn-lg" value="Return">		
</form>
</body>
</html>