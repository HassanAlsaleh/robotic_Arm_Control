<?php
require_once("connect.php");
if (isset($_GET['save'])){
$engine1=($_GET['engine1']);
$engine2=($_GET['engine2']);
$engine3=($_GET['engine3']);
$engine4=($_GET['engine4']);
$engine5=($_GET['engine5']);
$engine6=($_GET['engine6']);
$enginestatus="0"; //0 is off and 1 is on 
$entry="1";
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
    echo  "<script> window.alert('Updating the engine table was successful');
     location.href='index.php'; </script>";
} else {
    die("Updating the engine values has failed:" . mysqli_error($connection));
}
}
?>

