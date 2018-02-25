<?php
include ('database_connection.php');
session_start();
if(!isset($_SESSION['Email']))
header("Location:../index.php");

$from = $_SESSION["Email"]; // sender
if ($_SESSION["Type"]==1){
    $subject = "[Client]:".$_POST['InputName'];
}
else if ($_SESSION["Type"]==2) {
	$subject = "[Ambassador]:".$_POST['InputName'];
}
    $message = $_POST["InputMess"];

    mail("xyz@gmail.com",$subject,$message,"From: $from\n");
    echo "done";

?>