<?php ob_start(); ?>
<?php 
session_start();
$user_id = $_SESSION['user_id'];
?>
<?php
 if(!$user_id){
   header("location: index.php");
  exit;
 }
?>

<?php

//Initialize Values

require_once('php/php_image_magician.php');
$userid = $_SESSION['user_id'];
$src = NULL;
$ext = "";

//Based upon file, convert for use in database
if (($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))
{
	$ext = "jpg";
	$src = imagecreatefromjpeg($_FILES['file']['tmp_name']);
}
else if ($_FILES["file"]["type"] == "image/png")
{
	$ext = "png";
	$src = imagecreatefrompng($_FILES['file']['tmp_name']);
}
else if ($_FILES["file"]["type"] == "image/gif")
{
	$ext = "gif";
	$src = imagecreatefromgif($_FILES['file']['tmp_name']);
}


//Make sure it was a valid file, if not complain. 
if ((($ext == "jpg") || ($ext == "png") || ($ext == "gif")) && ($_FILES["file"]["size"] < 5000000))
  {
  	
  	//Check for errors, make sure upload worked
  	if ($_FILES["file"]["error"] > 0)
    	{
		$post_wid =$_POST[username];
	   $success = 'success';
header("location: userprofile.php?name=$post_wid&successs=$success");
exit();
    	}
 	 else
    	{
    	//Check image size
    	list($width,$height)=getimagesize($_FILES["file"]["tmp_name"]);
    	if ($width > 600)
    	{
    	
    	//Resize image
    	$newwidth=300;
		$newheight=($height/$width)*$newwidth;
		$tmp = imagecreatetruecolor($newwidth, $newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$width = $newwidth;
		$height = $height;
		$oldsrc = $src;
		$src = $tmp;
		$ext="jpg";
		imagedestroy($oldsrc);
		}
    

		
		//Get pic info and upload pic to server
		$RandoNum = "IntelliFeed";
		$RandomNum = rand(0, 9999999999);
		$nameof = "$RandoNum-$RandomNum-$userid";
		
		$picid = $nameof;
		$picturelocation = "userfiles/photos/$picid.$ext";
	
		//move pic
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "$picturelocation");
      	if($ext==gif){
		
		
		
		}else{
		     	$magicianObj = new imageLib($picturelocation);
				$magicianObj -> roundCorners(15, 'transparent');
				
     $contentv = $_POST['content'];
     $tgged = $_POST['tag'];

     $valueme = "#";
	
	$strings = $_POST['content'];
 $result = explode('#',$strings);
 array_shift($result);
 
 

 
 //print_R($result);
//echo $cleantexts = implode($result, " 	"); 
 
  //  foreach($result as $key => $resul) {
   // $key = $result;
	//echo "$key 
//	";
	$value0 = $result[0];
   $value1 = $result[1]; 
   $value2 = $result[2];   
   $value3 = $result[3];   
   
	
		if($tgged){
		if($value0){
    $magicianObj -> addCaptionBox('b', 115, 0, '#000',   65);
	$magicianObj -> addText($valueme.$value0, 'bl', 20,'#FFF',90);
	//$magicianObj -> addTextToCaptionBox($value0);
	//$magicianObj -> addText($value0, '460x460', 65, '#000', 65, 65, 'php/fonts/windsong.ttf');
	//$magicianObj -> addWatermark('images/logo.png', '50x 50', 180, 30);
    }
    }
	
    $magicianObj -> resizeImage(460,460, 'portrait', true);
	$magicianObj -> roundCorners(15, 'transparent');
   
		$magicianObj -> saveImage($picturelocation, 65);
		
		}
      	//post variables
$content = $_POST['content'];
$contento = $_POST['content'];
$artist = $_POST['artist'];
$songname = $_POST['songname'];
$post_id =$_POST['post_id'];
$location ="WorldWide";
$sec ="music";
$timestamp = time();

		include "connect.php";
	
	 $id = $rows['id'];

		

		$sql="INSERT INTO posts(post,user_id,image,timestamp,location,section,value1link,value2link)
VALUES
('$content','$user_id','$picturelocation','$timestamp ','$location','$sec','$artist','$songname')";
$sqls=mysqli_query($conn, $sql) or die(mysql_error());

 
	   $yi="UPDATE users
					 SET posts = posts + 1
					 WHERE id='$user_id'
					";
					$com=mysqli_query($conn, $yi) or die(mysql_error());
						//Get hashtags from user text
	
   
   
   
   
		
	$stringse = $_POST['content'];
 $resulte = explode('@',$stringse);
 array_shift($resulte);
 
 

 


	  
	 $pp = $rows['id'];


		
	   $success = 'success';
header("location: index.php?username=$name&success=$success&pull=$pp");
exit();
      } 
}
else
	{
	$post_wid =$_POST[username];
	   $succes = 'succes';
header("location: index.php?username=$post_wid&successs=$succes");
exit();
	}
?>
<?php ob_end_flush();?>