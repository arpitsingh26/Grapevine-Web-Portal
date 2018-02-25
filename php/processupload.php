<?php
include ('database_connection.php');
session_start();
if(!isset($_SESSION['Email']))
header("Location:../index.php");


$campaignpicpath = "../campaignpics/";

if (!file_exists($campaignpicpath)) {
    mkdir($campaignpicpath);
}
$y='$';

if(stripos( $_POST['addcaption'], $y) !== false)
{
	die("done6");
}

$x=trim($_POST['addid']);
if(isset($_POST))
{ 
	############ Edit settings ##############
	//$ThumbSquareSize 		= 200; //Thumbnail will be 200x200
	$BigImageMaxWidth 		= 500; //Image Maximum height or width
	$BigImageMaxHeight 		= 400; //Image Maximum height or width
	//$ThumbPrefix			= "thumb_"; //Normal thumb Prefix
	$DestinationDirectory	= "../campaignpics/".$x."/"; //specify upload directory ends with / (slash)
	$Quality 				= 70; //jpeg quality
	##########################################
	if (!file_exists($DestinationDirectory)) {
    mkdir($DestinationDirectory);
}
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die("done1");
	}
	
	// check $_FILES['ImageFile'] not empty
	if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name']))
	{
			die( "done2"); // output error when above checks fail.
	}

	$ImageName 		= str_replace(' ','-',strtolower($_FILES['ImageFile']['name'])); //get image name
	$ImageSize 		= $_FILES['ImageFile']['size']; // get original image size
	$TempSrc	 	= $_FILES['ImageFile']['tmp_name']; // Temp name of image file stored in PHP tmp folder
	$ImageType	 	= $_FILES['ImageFile']['type']; //get file type, returns "image/png", image/jpeg, text/plain etc.

	//Let's check allowed $ImageType, we use PHP SWITCH statement here
	switch(strtolower($ImageType))
	{
		case 'image/png':
			//Create a new image from file 
			$CreatedImage =  imagecreatefrompng($_FILES['ImageFile']['tmp_name']);
			break;
		case 'image/gif':
			$CreatedImage =  imagecreatefromgif($_FILES['ImageFile']['tmp_name']);
			break;			
		case 'image/jpeg':
		case 'image/pjpeg':
			$CreatedImage = imagecreatefromjpeg($_FILES['ImageFile']['tmp_name']);
			break;
		default:
			die("done3"); //output error and exit
	}
	
	//PHP getimagesize() function returns height/width from image file stored in PHP tmp folder.
	//Get first two values from image, width and height. 
	//list assign svalues to $CurWidth,$CurHeight
	list($CurWidth,$CurHeight)=getimagesize($TempSrc);
	if ($CurWidth<50 || $CurHeight<50) die("done4");
	if (filesize($_FILES['ImageFile']['tmp_name'])>10485760) die ("done5");

	//Get file extension from Image name, this will be added after random name
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
  	$ImageExt = str_replace('.','',$ImageExt);
	
	//remove extension from filename
	//$ImageName 		= preg_replace("/\\.[^.\\s]{3,4}$/", "", $ImageName); 
	
	//Construct a new name with random number and extension.
	$NewImageName = trim($_POST['addcaption']).'$'.time().'$'.$_SESSION['Username'].'$'.$_SESSION['Company'].'.'.$ImageExt;
	
	//set the Destination Image
	//$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumbnail name with destination directory
	
	$DestRandImageName 			= $DestinationDirectory.$NewImageName; // Image with destination directory
	//Resize image to Specified Size by calling resizeImage function.
	//echo "$DestRandImageName";
    if(resizeImage($CurWidth,$CurHeight,$BigImageMaxWidth,$BigImageMaxHeight,$DestRandImageName,$CreatedImage,$Quality,$ImageType))
	{
        	echo "done" ;

	}else{
		die("done7"); //output error
	}
}


// This function will proportionally resize image 
function resizeImage($CurWidth,$CurHeight,$MaxWidth,$MaxHeight,$DestFolder,$SrcImage,$Quality,$ImageType)
{
	//Check Image size is not 0
	if($CurWidth <= 0 || $CurHeight <= 0) 
	{
		return false;
	}
	
	//Construct a proportional size of new image
	//$ImageScale      	= min($MaxSize/$CurWidth, $MaxSize/$CurHeight); 
	if (($MaxWidth>500)||($MaxHeight>500)){
		$NewWidth=500;
		$NewHeight=400;
	}
	else{
	$NewWidth  			= $CurWidth;
	//$NewHeight 			= ceil($ImageScale*$CurHeight);
	$NewHeight = $CurHeight;
    }
	$NewCanves 			= imagecreatetruecolor($NewWidth, $NewHeight);
	
	// Resize Image
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight))
	{
		switch(strtolower($ImageType))
		{
			case 'image/png':
				imagepng($NewCanves,$DestFolder);
				imagealphablending($NewCanves, false);
                imagesavealpha($NewCanves, true);  
                imagealphablending($SrcImage, true);
				break;
			case 'image/gif':
				imagegif($NewCanves,$DestFolder);
				break;			
			case 'image/jpeg':
			case 'image/pjpeg':
				imagejpeg($NewCanves,$DestFolder,$Quality);
				break;
			default:
				return false;
		}
	//Destroy image, frees memory	
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;
	}

}

function format_size($size) {
      $sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
      if ($size == 0) { return('n/a'); } else {
      return (round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $sizes[$i]); }
}
?>