<?php
include ('database_connection.php');
//if($_POST['password']!=$_POST['repassword'])
//die("passworderr");
$q1=mysqli_query($con,"select * from clientusers where Clientemail='".$_POST['Email']."'");

if(mysqli_num_rows($q1)>0)
	die("emailerr");



do{
	$parts = str_replace(' ','',$_POST['useridup']);
	$username=uniqid($parts);
}while (mysqli_num_rows(mysqli_query($con,"select * from clientusers where Clientusername='".$username."'"))>0);

$query="insert into clientusers (Clientfullname,Clientcompanyname,Clientemail,Clientpassword,Clientusername) 
values ('".mysqli_real_escape_string($con,$_POST['useridup'])."','".mysqli_real_escape_string($con,$_POST['companyid'])."','".mysqli_real_escape_string($con,$_POST['Email'])."',
	'".mysqli_real_escape_string($con,md5($_POST['passwordinputup']))."','".mysqli_real_escape_string($con,$username)."')";
$q=mysqli_query($con,$query);
session_start();
$_SESSION['Username']=$username;
$_SESSION['Email']=$_POST['Email'];
$_SESSION['Name']=$_POST['useridup'];
$_SESSION['Company']=$_POST['companyid'];
$_SESSION['Type']=1;
$_SESSION['Currentid']=$_SESSION['Username'];
echo "done".$_SESSION['Username'];
?>