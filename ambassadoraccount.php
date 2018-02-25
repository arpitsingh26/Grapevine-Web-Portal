<?php
include ('php/database_connection.php');
session_start();
$_SESSION['Currentid']=$_GET['id'];
if ($_SESSION['Currentid']!=$_SESSION['Username']){
  header("Location:php/logout.php");
}
if(!isset($_SESSION['Email']))
header("Location:index.php");

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999.com/xhtml">
  <html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Log in/Sign up">
  <meta name="keywords" content="Log in/Sign up">
  <meta name="author" content="Arpit Singh">
  <title>
    Grapevine
  </title>
  
  <!-- Bootstrap Core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  
  <!-- Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom Theme CSS -->
  <link href="css/ambassadoraccount.css" rel="stylesheet">
</head>

  
 

  <body style="background-color:white">
    
<nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" id="nav" style="min-width:800px;">
        <div class="container">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
              <i class="fa fa-bars">
              </i>
            </button>
            <a class="navbar-brand" href="index.php#home">
              <img id="logo" src="../img/logo.jpg">
            </a>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              
              <li class="page-scroll">
                <a href="index.php#home">
                  Home
                </a>
              </li>
              <li class="page-scroll">
                <a href="index.php#services">
                  Services
                </a>
              </li>
              <li class="page-scroll">
                <a href="index.php#clients">
                  Clients
                </a>
              </li>
              <li class="page-scroll">
                <a href="index.php#can" style="font-weight:900">
                  CAN
                </a>
              </li>
              <li class="page-scroll">
                <a href="index.php#contact">
                  Contact
                </a>
              </li>
              <li >
                <a href="php/logout.php" >
                  Sign out
                  <i class="fa fa-caret-up">
                  </i>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        
        <!-- 
<hr style="top:100px;">
-->
    <!-- /.container -->
  </nav>




<div class="container" style="padding-top:60px;">
  
  <div class="row well">             
    
    <div class="col-md-10">
      
 
        
      <!-- <img class="pic img-circle" src="img/user.jpg" alt="..."> -->
        
        <div class="name" style="text-decoration:none;color:black;vertical-align:left">
          <small>
            <?php echo $_SESSION["Name"]; ?>
          </small>
          <small id="smallx">
            <?php echo $_SESSION["Company"]; ?>
          </small>
        </div>
        

      
      <br>
      <br>
      <br>
      
      <ul class="nav nav-tabs" id="myTab" style="padding-top:70px">
        
        <li   class="active">
          <a href="#assignment" data-toggle="tab">
            <i class="fa fa-file-text-o">
            </i>
            My campaigns
          </a>
        </li>

        <li >
          <a href="#inbox" data-toggle="tab">
            <i class="fa fa-envelope-o">
            </i>
            Contact
          </a>
        </li>

        <li>
          <a href="#event" data-toggle="tab">
            <i class="fa fa-clock-o">
            </i>
            Upcoming campaigns
          </a>
        </li>
        
      </ul>


      
      <div class="tab-content">
<?php 
       //print the rows
$q1=mysqli_query($con,"select * from ambassadorusers where Ambassadoremail='".$_SESSION["Email"]."'");
$row1=mysqli_fetch_assoc($q1);
$id1=$row1['Ambassadorid'];

$q2=mysqli_query($con,"select * from campaigns where trim(Ambassadorid) = '$id1' OR 
Ambassadorid LIKE '$id1*%' OR Ambassadorid LIKE '$id1 *%' OR Ambassadorid LIKE ' $id1*%' OR
Ambassadorid LIKE '%*$id1' OR Ambassadorid LIKE '%* $id1' OR Ambassadorid LIKE '%*$id1 ' OR
Ambassadorid LIKE '%#$id1' OR Ambassadorid LIKE '%# $id1' OR Ambassadorid LIKE '%#$id1 ' OR
Ambassadorid LIKE '$id1#%' OR Ambassadorid LIKE '$id1 #%' OR Ambassadorid LIKE ' $id1#%' OR
Ambassadorid LIKE '%*$id1*' OR Ambassadorid LIKE '%* $id1 *' OR Ambassadorid LIKE '%* $id1*' OR Ambassadorid LIKE '%*$id1 *' OR
Ambassadorid LIKE '%#$id1#' OR Ambassadorid LIKE '%# $id1 #' OR Ambassadorid LIKE '%# $id1#' OR  Ambassadorid LIKE '%#$id1 #' OR 
Ambassadorid LIKE '%#$id1*' OR Ambassadorid LIKE '%# $id1 *' OR Ambassadorid LIKE '%# $id1*' OR Ambassadorid LIKE '%#$id1 *' OR 
Ambassadorid LIKE '%*$id1#' OR Ambassadorid LIKE '%* $id1 #'  OR Ambassadorid LIKE '%* $id1#' OR Ambassadorid LIKE '%*$id1 #' 
order by campaignid ASC ");
//$q2=mysqli_query($con,"select * from campaigns where Ambassadorid='$id1'");
$row2=mysqli_fetch_assoc($q2);
$id2=$row2['Ambassadorid'];

if (is_null($id2))
 echo "<div class='tab-pane active' id='assignment' style='display:none;' >";
else echo "<div class='tab-pane active' id='assignment' >";
?>
         
          
          <a >
            <div  style="margin:0px;">
             <!--   <div  style="margin:0px;background-color:#f9f9f9;">   -->
<div class="table-responsive" >

<?php
$colNames = array();
$data = array();
$data[] = $row2;
while($row2 = mysqli_fetch_assoc($q2))
{    
    $data[] = $row2;
}
$data=array_reverse($data);
$colNames = array_keys(reset($data));
$camp=$colNames[0];
$colNames =array($colNames[2],$colNames[6],$colNames[1]);
$temp2=-1;

    echo "<tr>";
    ?><div class="well" style='background-color:white;'>
    <?php 

    //$x1=mysqli_query($con,"select * from campaigns where Ambassadorid='$id2'");
    //$y1=mysqli_fetch_assoc($x1);
    //$z1=$y1['campaignid'];
    $x3='"'.$id2.'"';
    $q3=mysqli_query($con,"select * from campaignactivities order by campaignid ASC");/* where trim(Ambassadorid) = '$id2' OR 
Ambassadorid LIKE '$id2*%' OR Ambassadorid LIKE '$id2 *%' OR Ambassadorid LIKE ' $id2*%' OR
Ambassadorid LIKE '%*$id2' OR Ambassadorid LIKE '%* $id2' OR Ambassadorid LIKE '%*$id2 ' OR
Ambassadorid LIKE '%#$id2' OR Ambassadorid LIKE '%# $id2' OR Ambassadorid LIKE '%#$id2 ' OR
Ambassadorid LIKE '$id2#%' OR Ambassadorid LIKE '$id2 #%' OR Ambassadorid LIKE ' $id2#%' OR
Ambassadorid LIKE '%*$id2*' OR Ambassadorid LIKE '%* $id2 *' OR Ambassadorid LIKE '%* $id2*' OR Ambassadorid LIKE '%*$id2 *' OR
Ambassadorid LIKE '%#$id2#' OR Ambassadorid LIKE '%# $id2 #' OR Ambassadorid LIKE '%# $id2#' OR  Ambassadorid LIKE '%#$id2 #' OR 
Ambassadorid LIKE '%#$id2*' OR Ambassadorid LIKE '%# $id2 *' OR Ambassadorid LIKE '%# $id2*' OR Ambassadorid LIKE '%#$id2 *' OR 
Ambassadorid LIKE '%*$id2#' OR Ambassadorid LIKE '%* $id2 #'  OR Ambassadorid LIKE '%* $id2#' OR Ambassadorid LIKE '%*$id2 #'
 order by campaignid ASC");*/
    //$row3=mysqli_fetch_assoc($q3);

    $colNames2 = array();
    $data2 = array();
    //$data2[] = $row3;
    while($row3 = mysqli_fetch_assoc($q3))
    {
        $output = split( "[#*]", $row3['Ambassadorid'] );
        if(in_array($id1, $output)){
          $data2[] = $row3;
        }
    }
    $data2=array_reverse($data2);
    $colNames2 = array_keys(reset($data2)); 
    $colNames2 =array($colNames2[5],$colNames2[6],$colNames2[7],$colNames2[8],$colNames2[9],$colNames2[10],$colNames2[11],
                        $colNames2[12],$colNames2[13],$colNames2[14],$colNames2[15],$colNames2[16],$colNames2[17],$colNames2[18]);
/*
    $aTable = new aTable();

    echo "<br>";
    $q5=mysqli_query($con,"select * from campaigns where trim(Ambassadorid) = '$id2' OR 
Ambassadorid LIKE '$id2*%' OR Ambassadorid LIKE '$id2 *%' OR Ambassadorid LIKE ' $id2*%' OR
Ambassadorid LIKE '%*$id2' OR Ambassadorid LIKE '%* $id2' OR Ambassadorid LIKE '%*$id2 ' OR
Ambassadorid LIKE '%#$id2' OR Ambassadorid LIKE '%# $id2' OR Ambassadorid LIKE '%#$id2 ' OR
Ambassadorid LIKE '$id2#%' OR Ambassadorid LIKE '$id2 #%' OR Ambassadorid LIKE ' $id2#%' OR
Ambassadorid LIKE '%*$id2*' OR Ambassadorid LIKE '%* $id2 *' OR Ambassadorid LIKE '%* $id2*' OR Ambassadorid LIKE '%*$id2 *' OR
Ambassadorid LIKE '%#$id2#' OR Ambassadorid LIKE '%# $id2 #' OR Ambassadorid LIKE '%# $id2#' OR  Ambassadorid LIKE '%#$id2 #' OR 
Ambassadorid LIKE '%#$id2*' OR Ambassadorid LIKE '%# $id2 *' OR Ambassadorid LIKE '%# $id2*' OR Ambassadorid LIKE '%#$id2 *' OR 
Ambassadorid LIKE '%*$id2#' OR Ambassadorid LIKE '%* $id2 #'  OR Ambassadorid LIKE '%* $id2#' OR Ambassadorid LIKE '%*$id2 #' order by campaignid DESC");

        $row5=mysqli_fetch_assoc($q5);
        $camploc=$row5['campaignlocation'];
        $campdesc=$row5['campaigndescription'];
        $campdate=$row5['eventroughdates'];
        $campnotif=$row5['Ambassadornotification'];
        $v=(int)$row5['campaignid'];
        //if (count(glob('campaignpics/'.$v.'/*.{jpg,png,gif}', GLOB_BRACE))>0)
        echo "<button method='post' class='btn btn-custom4 imageview' name='imageview' style='float:right' data-toggle='modal' href='.myModal' value='$v' >View Images</button>";       
        echo '<div id="brief"> Campaign Location:<span id="brief2">  '.$camploc."</span></div>";
        echo '<div id="brief"> Event date:<span id="brief2">  '.$campdate."</span></div>";
        echo '<div id="brief"> Brief:<span id="brief2">  '.$campdesc."</span></div>";
        if ($campnotif!='')
          echo '<div id="brief"> Message:<span id="brief2">  '.$campnotif."</span></div>";
        echo "<form  method='post' enctype='multipart/form-data' class='MyUploadForm' name='MyUploadForm' 
        >           
                   <input class='form-control dsa addid' name='addid' type='number' style='visibility:hidden;top:-9999px;left:-9999px' value='$v' readonly>
                    <input name='ImageFile' class='imageInput'  type='file' style='display:inline-block;'>
                    <input class='form-control dsa addcaption' name='addcaption' placeholder='Add caption' type='text' style='display:inline-block;'>
                    <button type='submit'  class='btn-custom5' value='$v' style='display:inline-block;'>Upload</button>
                    </form>
                    <div id='output'></div><br>";
*/
                    $aTable = null;
    $temp2 = 1000000000;
    foreach($data2 as $val2)
    {   
        if ($temp2>(int)$val2[$camp]) 
        {   

            unset($aTable);
            $aTable = new aTable();



         $v=(int)$val2[$camp];
        $q4=mysqli_query($con,"select * from campaigns where campaignid='$v'");
        $row4=mysqli_fetch_assoc($q4);
        $camploc=$row4['campaignlocation'];
        $campdesc=$row4['campaigndescription'];
        $campdate=$row4['eventroughdates'];
        $campnotif=$row4['Ambassadornotification'];
        echo "<br>"; 
        
        //if (count(glob('campaignpics/'.$v.'/*.{jpg,png,gif}', GLOB_BRACE))>0)
        echo "<button class='btn btn-custom4 imageview' name='imageview' style='float:right' data-toggle='modal' href='.myModal' value='$v' >View Images</button>";       
        echo '<div id="brief"> Campaign Location:<span id="brief2">  '.$camploc."</span></div>";
        echo '<div id="brief"> Event date:<span id="brief2">  '.$campdate."</span></div>";
        echo '<div id="brief"> Brief:<span id="brief2">  '.$campdesc."</span></div>";
        if ($campnotif!='')
        echo '<div id="brief"> Message:<span id="brief2">  '.$campnotif."</span></div>";
        echo "<form  method='post' enctype='multipart/form-data' class='MyUploadForm'>
                    <input class='form-control dsa addid' name='addid' type='number' style='visibility:hidden;top:-9999px;left:-9999px' value='$v' readonly>
                    <input name='ImageFile' class='imageInput'  type='file' style='display:inline-block;'>
                    <input class='form-control dsa addcaption' name='addcaption' placeholder='Add caption' type='text' style='display:inline-block;'>
                    <input type='submit'  class='btn-custom5' value='Upload' style='display:inline-block;'>
                  
                    </form>
                    <div class='output'></div><br>";
        }
        $aTable->write_line($colNames2, $val2,(int)$val2[$camp]); $temp2=(int)$val2[$camp];echo "</tr>";

    }
      
    unset($aTable);

    echo "</div><br>";

?>
</div>

          </div>
          </a>
          
        </div>
        <?php
class aTable
{  
    function __construct()
    {
        echo "<table  class='table table-condensed table-striped table-bordered table-hover no-margin well'><thead>
      <tr>
      <thead 
      <tr>
        <th style='width:5%' class='tablehead'>
          Id.No.
        </th>
        <th style=width:30% class='tablehead'>
          Activity description
        </th>
        <th style='width:33%' class='tablehead'>
          My response (with dates)
        </th>
        <th style='width:17%' class='tablehead'>
          Ambassador dates
        </th>
        <th style='width:25%' class='tablehead'>
          Admin response
        </th>
      </tr>
    </thead>
       <tbody>  

<tr>";
    }

    function __destruct()
    {   
        echo "</tr></tbody></table>";
        echo "<hr>"; 
    }

    function write_line($colNames2, $val2,$campaignid)
    {  
        $arr=array();
        for($i=0;$i<8;$i++){
          $arr[$i]="";
          echo "$arr[$i]";
        }
        $i=0;
        foreach($colNames2 as $colName2)
        {   $i++;
            if ($i==1){
              $activityid=(int)$val2[$colName2];
              echo "<td>".$val2[$colName2]."</td>";
            }
            if ($i==2){
            echo "<td>".$val2[$colName2]."</td>";
            }
            else{
              $j=$i-3;
              $arr[$j]=$val2[$colName2];
            }
        }
        //if (is_null($arr[0]))
        //$arr = array_map(function($item) { return $item ?: 0; }, $arr);
      

        $clienta=explode('"*"', $arr[0]);
        $clienta[0]=trim(ltrim($clienta[0],'"*"'));
        $clienta[1]=trim($clienta[1]);
        $clienta[2]=trim($clienta[2]);
        $clienta[3]=trim($clienta[3]);
        if ($clienta[3]!='"*')
        $clienta[4]=trim(rtrim($clienta[4],'"*"'));

        $clientb=explode('"*"', $arr[1]);
        $clientb[0]=trim(ltrim($clientb[0],'"*"'));
        $clientb[1]=trim($clientb[1]);
        $clientb[2]=trim($clientb[2]);
        $clientb[3]=trim($clientb[3]);
        if ($clientb[3]!='"*')
        $clientb[4]=trim(rtrim($clientb[4],'"*"'));

        $clientc=explode('"*"', $arr[2]);
        $clientc[0]=trim(ltrim($clientc[0],'"*"'));
        $clientc[1]=trim($clientc[1]);
        $clientc[2]=trim($clientc[2]);
        $clientc[3]=trim($clientc[3]);
        if ($clientc[3]!='"*')
        $clientc[4]=trim(rtrim($clientc[4],'"*"'));

        $clientd=explode('"*"', $arr[3]);
        $clientd[0]=trim(ltrim($clientd[0],'"*"'));
        $clientd[1]=trim($clientd[1]);
        $clientd[2]=trim($clientd[2]);
        $clientd[3]=trim($clientd[3]);
        if ($clientd[3]!='"*')
        $clientd[4]=trim(rtrim($clientd[4],'"*"'));

        $cliente=explode('"*"', $arr[4]);
        $cliente[0]=trim(ltrim($cliente[0],'"*"'));
        $cliente[1]=trim($cliente[1]);
        $cliente[2]=trim($cliente[2]);
        $cliente[3]=trim($cliente[3]);
        if ($cliente[3]!='"*')
        $cliente[4]=trim(rtrim($cliente[4],'"*"'));

        $amba=explode('"*"', $arr[5]);
        $amba[0]=trim(ltrim($amba[0],'"*"'));
        $amba[1]=trim($amba[1]);
        $amba[2]=trim($amba[2]);
        $amba[3]=trim($amba[3]);
        if ($amba[3]!='"*')
        $amba[4]=trim(rtrim($amba[4],'"*"'));

        $ambb=explode('"*"', $arr[6]);
        $ambb[0]=trim(ltrim($ambb[0],'"*"'));
        $ambb[1]=trim($ambb[1]);
        $ambb[2]=trim($ambb[2]);
        $ambb[3]=trim($ambb[3]);
        if ($ambb[3]!='"*')
        $ambb[4]=trim(rtrim($ambb[4],'"*"'));

        $ambc=explode('"*"', $arr[7]);
        $ambc[0]=trim(ltrim($ambc[0],'"*"'));
        $ambc[1]=trim($ambc[1]);
        $ambc[2]=trim($ambc[2]);
        $ambc[3]=trim($ambc[3]);
        if ($ambc[3]!='"*')
        $ambc[4]=trim(rtrim($ambc[4],'"*"'));

        $ambd=explode('"*"', $arr[8]);
        $ambd[0]=trim(ltrim($ambd[0],'"*"'));
        $ambd[1]=trim($ambd[1]);
        $ambd[2]=trim($ambd[2]);
        $ambd[3]=trim($ambd[3]);
        if ($ambd[3]!='"*')
        $ambd[4]=trim(rtrim($ambd[4],'"*"'));

        $ambe=explode('"*"', $arr[9]);
        $ambe[0]=trim(ltrim($ambe[0],'"*"'));
        $ambe[1]=trim($ambe[1]);
        $ambe[2]=trim($ambe[2]);
        $ambe[3]=trim($ambe[3]);
        if ($ambe[3]!='"*')
        $ambe[4]=trim(rtrim($ambe[4],'"*"'));

        $maxshow=$arr[10];
        $maxres=$arr[11];
        echo "<td>";
        echo "<div id='clientres' class='clientres'>";
       // echo "<div class='clientres2'> Previous input:";
        /*echo "Admin input:";
        if ($cliente[3]!="") echo "Clientstage5";
        else if ($clientd[3]!="") echo "Clientstage4";
        else if ($clientc[3]!="") echo "Clientstage3";
        else if ($clientb[3]!="") echo "Clientstage2";
        else if ($clienta[3]!="") echo "Clientstage1";
        else echo "None";*/

        $a=0;
        if ($ambe[2]!="") $a=5;
        else if ($ambd[2]!="") $a=4;
        else if ($ambc[2]!="") $a=3;
        else if ($ambb[2]!="") $a=2;
        else if ($amba[2]!="") $a=1;
       // echo "</div>";
        echo "<form class='form form-horizontal formselect' method='post' role='form' id='formselect' name='formselect'>
    <fieldset  >   
    <div>    
        <span class='control-group' >
        <span  class='controls'>
            <select id='formcontrol' name='formcontrol' class='form-control formcontrol' style='cursor:pointer;'>";
               
                echo "<option class='opt0' ". ($a == 0 ? "selected='selected'" : "") ." value='0";
                echo "*".$campaignid."*".$activityid;
                echo "'>None</option>";
                if ($maxres>=1){
                echo "<option class='opt1' ". ($a == 1 ? "selected='selected'" : "") ." value='1";
                echo "*".$campaignid."*".$activityid;
                echo "'>";
                echo "$amba[4]";
                echo showdates($amba[0],$amba[1]);
                echo "</option>";
                if ($maxres>=2){
                echo " <option class='opt2' ". ($a == 2 ? "selected='selected'" : "") ." value='2";
                echo "*".$campaignid."*".$activityid;
                echo "'>";
                echo "$ambb[4]";
                echo showdates($ambb[0],$ambb[1]);
                echo "</option>";
                if ($maxres>=3){
                echo "<option class='opt3' ". ($a == 3 ? "selected='selected'" : "") ." value='3";
                echo "*".$campaignid."*".$activityid;
                echo "'>";
                echo "$ambc[4]";
                echo showdates($ambc[0],$ambc[1]);
                echo "</option>";
                if ($maxres>=4){
                echo "<option class='opt4' ". ($a == 4 ? "selected='selected'" : "") ." value='4";
                echo "*".$campaignid."*".$activityid;
                echo "'>";
                echo "$ambd[4]";
                echo showdates($ambd[0],$ambd[1]);
                echo "</option>";
                if ($maxres>=5){
                echo "<option class='opt5' ". ($a == 5 ? "selected='selected'" : "") ." value='5";
                echo "*".$campaignid."*".$activityid;
                echo "'>";
                echo "$ambe[4]";
                echo showdates($ambe[0],$ambe[1]);
                echo "</option>";
              }}}}}
            echo "</select> &nbsp &nbsp<button id='selectbtn' class='selectbtn' name='selectbtn' type='submit'>Save</button>
            
        </span>
        </span></div>

    </fieldset>
   
</form>";
   
        echo"</div></td>";
        echo "<td>"."<div class='btn-group  btn-custom2 ajs'>
              <a  class='dropdown-toggle ajs2' data-toggle='dropdown' href=''>
                 View
                <span class='caret'></span>
               </a>
               <ul class='dropdown-menu dropelem'>
                 <li> <a style='cursor:pointer' >";
                 echo "$clienta[4]";
        echo showdates($clienta[0],$clienta[1]);
        echo "     </a> </li>";
        echo "<li> <a style='cursor:pointer'>";
        echo "$clientb[4]";
        echo showdates($clientb[0],$clientb[1]);
        echo "     </a>  </li>";
        echo "<li> <a style='cursor:pointer'>";
        echo "$clientc[4]";
        echo showdates($clientc[0],$clientc[1]);
        echo "     </a>  </li>";
        echo "<li> <a style='cursor:pointer'> ";
        echo "$clientd[4]";
        echo showdates($clientd[0],$clientd[1]);
        echo "     </a>  </li>"; 
        echo "<li><a style='cursor:pointer'> ";
        echo "$cliente[4]";
        echo showdates($cliente[0],$cliente[1]);
        echo "     </a></li>";              
        echo     "</ul></div>"."</td>";

        if ($cliente[3]!="") echo "<td>".$cliente[4]."</td>";
        else if ($clientd[3]!="") echo "<td>".$clientd[4]."</td>";
        else if ($clientc[3]!="") echo "<td>".$clientc[4]."</td>";
        else if ($clientb[3]!="") echo "<td>".$clientb[4]."</td>";
        else if ($clienta[3]!="") echo "<td>".$clienta[4]."</td>";
        else echo "<td>".""."</td>";
    }
}


function showdates($sdate,$edate){
  if (($edate!="")&& ($sdate!=""))
    return "(".$sdate." to ".$edate.")";
  else if (($edate=="") && ($sdate!="")){
    return "(from ".$sdate.")";
  }
  else if (($sdate=="")&&($edate!=""))
    return "(till ".$edate.")";
  else 
    return "";
}

?>

<div class="modal  myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">
      <br/>
      <br/>
      
      <form class="form-horizontal">
        
        <fieldset>
          
          <!-- Text input-->
          
          <div class="form-group">
            
            <label class="col-md-2 control-label" for="body">
              Body :
            </label>
            
            <div class="col-md-8">
              
              <input id="body" name="body" type="text" placeholder="Message Body" class="form-control input-md">
              
            </div>
            
          </div>
          
          <!-- Textarea -->
          
          <div class="form-group">
            
            <label class="col-md-2 control-label" for="message">
              Message :
            </label>
            
            <div class="col-md-8"><textarea class="form-control" id="message" name="message"></textarea></div>
            
          </div>
          
          <!-- Button -->
          
          <div class="form-group">
            
            <label class="col-md-2 control-label" for="send">
            </label>
            
            <div class="col-md-8">
              
              <button id="send" name="send" class="btn btn-primary">
                Send
              </button>
              
            </div>
            
          </div>
          
        </fieldset>
        
      </form>
      
    </div>
    
  </div>
  
</div>

        <div class="tab-pane" id="inbox">
            <div class="btn-toolbar well well-sm" role="toolbar">
             <br>
<form role="form"  method="post" id="mailform" name="mailform" >
  
  <div class="col-lg-6">
    
    
    <div class="form-group">
          <label for="InputName" style="color:black">
        Subject
      </label>
      <div class="input-group">
        
        <input type="text" class="form-control" name="InputName" id="InputName">
        
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-ok form-control-feedback">
          </i>
        </span>
      </div>
      
    </div>
    <br><br>
 
    
    <div class="form-group">
      <label for="InputMess" style="color:black">
        Message
      </label>
      <div class="input-group" >
        
        <textarea name="InputMess" id="InputMess" class="form-control" rows="5" required >
        </textarea>
        
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-ok form-control-feedback">
          </i>
        </span>
      </div>
    
    </div>

  <div >

    <input  type="submit" name="mysubmit" id="mysubmit" value="Send" class="btn btn-success pull-right" style='margin-top:15px'>
  </div>
  </div>
  
</form>

<hr class="featurette-divider hidden-lg">

<div class="col-lg-5 col-md-push-1">
  
  <address>
    
    <h3 style="color:#522900">
      Office Location:
    </h3>
    
    <p class="lead" >
      <a  style="color:#522900">
        The Grapevine Co.
        <br>
        Powai,<br>
        Mumbai-400076.
      </a>
      <br><br>
      <a href="callto:999-999-9999" style="color:#337f23">Phone: 999-999-9999</a>
      <br>
      <a href="mailto:abcde.fghijk@email.com" style="color:#337f23;"> Email: abcde.fghijk@gmail.com</a>
    </p>
    
  </address>
  
</div>
              
            </div>

        
          
        </div>
        
<?php
      
        
        $q12=mysqli_query($con,"select * from campaigns where Clientid!='-1' and !(trim(Ambassadorid) = '$id1' OR 
Ambassadorid LIKE '$id1*%' OR Ambassadorid LIKE '$id1 *%' OR Ambassadorid LIKE ' $id1*%' OR
Ambassadorid LIKE '%*$id1' OR Ambassadorid LIKE '%* $id1' OR Ambassadorid LIKE '%*$id1 ' OR
Ambassadorid LIKE '%#$id1' OR Ambassadorid LIKE '%# $id1' OR Ambassadorid LIKE '%#$id1 ' OR
Ambassadorid LIKE '$id1#%' OR Ambassadorid LIKE '$id1 #%' OR Ambassadorid LIKE ' $id1#%' OR
Ambassadorid LIKE '%*$id1*' OR Ambassadorid LIKE '%* $id1 *' OR Ambassadorid LIKE '%* $id1*' OR Ambassadorid LIKE '%*$id1 *' OR
Ambassadorid LIKE '%#$id1#' OR Ambassadorid LIKE '%# $id1 #' OR Ambassadorid LIKE '%# $id1#' OR  Ambassadorid LIKE '%#$id1 #' OR 
Ambassadorid LIKE '%#$id1*' OR Ambassadorid LIKE '%# $id1 *' OR Ambassadorid LIKE '%# $id1*' OR Ambassadorid LIKE '%#$id1 *' OR 
Ambassadorid LIKE '%*$id1#' OR Ambassadorid LIKE '%* $id1 #'  OR Ambassadorid LIKE '%* $id1#' OR Ambassadorid LIKE '%*$id1 #') order by eventstartdate DESC ");
        $row12=mysqli_fetch_assoc($q12);

        if (is_null($row12)){

          echo "<div class='tab-pane' id='event'> style='display:none;'";
        }
        else {
          echo "<div class='tab-pane' id='event'>";
        }

        ?>
        
          <div class="well well-sm" style="background-color:white;color:#176e61"><br><br>
          <table  class='table table-condensed table-striped table-bordered table-hover no-margin well'>
      <thead >
      <tr style="color:#176e61">
        <th style='width:5%;' class='tablehead'>
          S.No.
        </th>
        <th style='width:40%' class='tablehead'>
          Description
        </th>
        <th style='width:30%' class='tablehead'>
          Location
        </th>
        <th style='width:25%' class='tablehead'>
          Event date
        </th>
      </tr>
    </thead>
       <tbody>  

        <div style="color:black">
     
        
<?php
        $colNames123 = array();
        $data12 = array();
       // $data12[] = $row12;

        while($row12 = mysqli_fetch_assoc($q12))
        {  
           $data12[] = $row12;
        }
        
        // var_dump($data12);
        $colNames123 = array_keys(reset($data12)); 
        $colNames123 =array($colNames123[0],$colNames123[1],$colNames123[2],$colNames123[6],$colNames123[7]);
        //var_dump($data12[0]);
         $i=1;
        foreach ($data12 as $val12) {
          $j=0;
          if ((strtotime($val12[$colNames123[3]])<strtotime(date("Y-M-d")))||(is_null($val12[$colNames123[3]]))){
            continue;
          }
          if ($val12[$colNames123[3]]=='2100-01-01') continue;
          echo "<tr>";
          foreach ($colNames123 as $colName123) {
            $j++;
            if ($j==4) continue;
            else if ($j==1) echo "<td>$i</td>";
            else {
              echo "<td>".$val12[$colName123]."</td>";
            }
          }
          $i++;
          echo "</tr>";

        }

        ?>
</div>
        <tr>
        </tr>
        </tbody></table>
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>


  </body>

    <script src="js/jquery.min.js">
    </script>
    <script src="bootstrap/js/bootstrap.min.js">
    </script>
    <script src="js/jquery.bootstrap-growl.js">
    </script>
    <script src="js/jquery.bootstrap-growl.min.js">
    </script>
    <script src="js/ambassadoraccount.js">
    </script>
    <script src="js/processupload.js">
    </script>

  </html>

