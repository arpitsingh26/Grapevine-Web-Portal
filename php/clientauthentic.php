<?php
include ('database_connection.php');
$q1=mysqli_query($con,"select * from clientusers where Clientemail='".$_POST['useridin']."'");
if(mysqli_num_rows($q1)==0)
	die("emailerr");
$row=mysqli_fetch_assoc($q1);
$email=$row['Clientemail'];
$password=$row['Clientpassword'];
$username=$row['Clientusername'];
$name=$row['Clientfullname'];
$companyname=$row['Clientcompanyname'];
if(md5($_POST['passwordinputin'])==$password)
{
	session_start();
	$q2=$email;
	$_SESSION['Username']=$username;
    $_SESSION['Email']=$q2;
    $_SESSION['Name']=$name;
    $_SESSION['Type']=1;
    $_SESSION['Company']=$companyname;
    $_SESSION['Currentid']=$_SESSION['Username'];
die("done".$_SESSION['Username']);
}
else
die(md5($_POST['passwordinputin']));

?>
