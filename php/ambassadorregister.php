<?php
include ('database_connection.php');
//if($_POST['password']!=$_POST['repassword'])
//die("passworderr");
$q1=mysqli_query($con,"select * from ambassadorusers where Ambassadoremail='".$_POST['Email2']."'");

if(mysqli_num_rows($q1)>0)
	die("emailerr");



do{
	$parts = str_replace(' ','',$_POST['useridup2']);
	$username=uniqid($parts);
}while (mysqli_num_rows(mysqli_query($con,"select * from Ambassadorusers where Ambassadorusername='".$username."'"))>0);

$query="insert into Ambassadorusers (Ambassadorfullname,Ambassadorcompanyname,Ambassadoremail,Ambassadorpassword,Ambassadorusername) 
values ('".mysqli_real_escape_string($con,$_POST['useridup2'])."','".mysqli_real_escape_string($con,$_POST['companyid2'])."','".mysqli_real_escape_string($con,$_POST['Email2'])."',
	'".mysqli_real_escape_string($con,md5($_POST['passwordinputup2']))."','".mysqli_real_escape_string($con,$username)."')";
$q=mysqli_query($con,$query);
session_start();
$_SESSION['Username']=$username;
$_SESSION['Email']=$_POST['Email2'];
$_SESSION['Name']=$_POST['useridup2'];
$_SESSION['Type']=2;
$_SESSION['Company']=$_POST['companyid2'];
$_SESSION['Currentid']=$_SESSION['Username'];
echo "done".$_SESSION['Username'];
?>