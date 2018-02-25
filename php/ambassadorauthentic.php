<?php
include ('database_connection.php');
$q1=mysqli_query($con,"select * from ambassadorusers where Ambassadoremail='".$_POST['useridin2']."'");
if(mysqli_num_rows($q1)==0)
	die("emailerr");
$row=mysqli_fetch_assoc($q1);
$email=$row['Ambassadoremail'];
$password=$row['Ambassadorpassword'];
$username=$row['Ambassadorusername'];
$name=$row['Ambassadorfullname'];
$companyname=$row['Ambassadorcompanyname'];
if(md5($_POST['passwordinputin2'])==$password)
{
	session_start();
	$q2=$email;
	$_SESSION['Username']=$username;
    $_SESSION['Email']=$q2;
    $_SESSION['Name']=$name;
    $_SESSION['Type']=2;
    $_SESSION['Company']=$companyname;
    $_SESSION['Currentid']=$_SESSION['Username'];
die("done".$_SESSION['Username']);
}
else
die(md5($_POST['passwordinputin2']));

?>