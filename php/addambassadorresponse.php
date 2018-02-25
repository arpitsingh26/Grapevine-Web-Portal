<?php
include ('database_connection.php');
session_start();

$insertid=explode('*', $_POST['formcontrol']);
if ($insertid[0]==1){
$q1=mysqli_query($con,"select * from campaignactivities where campaignid=$insertid[1] and 
  activityid=$insertid[2]");
$row=mysqli_fetch_assoc($q1);
$acs=$row['activityambassadorstage1'];
$acs2=explode('"*"', $acs);
$acs2[2]='y';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage1='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage5'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage5='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage4'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage4='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage3'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage3='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage2'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage2='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);
}

if ($insertid[0]==2){
$q1=mysqli_query($con,"select * from campaignactivities where campaignid=$insertid[1] and 
  activityid=$insertid[2]");
$row=mysqli_fetch_assoc($q1);
$acs=$row['activityambassadorstage2'];
$acs2=explode('"*"', $acs);
$acs2[2]='y';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage2='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage5'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage5='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage4'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage4='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage3'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage3='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);
}

if ($insertid[0]==3){
$q1=mysqli_query($con,"select * from campaignactivities where campaignid=$insertid[1] and 
  activityid=$insertid[2]");
$row=mysqli_fetch_assoc($q1);
$acs=$row['activityambassadorstage3'];
$acs2=explode('"*"', $acs);
$acs2[2]='y';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage3='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage5'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage5='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage4'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage4='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);
}

if ($insertid[0]==4){
$q1=mysqli_query($con,"select * from campaignactivities where campaignid=$insertid[1] and 
  activityid=$insertid[2]");
$row=mysqli_fetch_assoc($q1);
$acs=$row['activityambassadorstage4'];
$acs2=explode('"*"', $acs);
$acs2[2]='y';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage4='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage5'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage5='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);
}

if ($insertid[0]==5){
$q1=mysqli_query($con,"select * from campaignactivities where campaignid=$insertid[1] and 
  activityid=$insertid[2]");
$row=mysqli_fetch_assoc($q1);
$acs=$row['activityambassadorstage5'];
$acs2=explode('"*"', $acs);
$acs2[2]='y';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage5='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);
}

if ($insertid[0]==0){
$q1=mysqli_query($con,"select * from campaignactivities where campaignid=$insertid[1] and 
  activityid=$insertid[2]");
$row=mysqli_fetch_assoc($q1);
$acs=$row['activityambassadorstage5'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage5='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage4'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage4='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage3'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage3='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage2'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage2='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);

$acs=$row['activityambassadorstage1'];
$acs2=explode('"*"', $acs);
$acs2[2]=' ';
$acs=implode('"*"', $acs2);
$q2="UPDATE campaignactivities SET activityambassadorstage1='$acs'
WHERE campaignid=$insertid[1] AND activityid=$insertid[2]";
$q3=mysqli_query($con,$q2);
}
/*
$q1="UPDATE campaignactivities SET Age=36
WHERE FirstName='Peter' AND LastName='Griffin'";
$query1=mysqli_query($dbc,$q1);
*/

echo "done";
?>
