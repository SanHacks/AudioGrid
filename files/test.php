<?php ob_start(); 
error_reporting(1);
?>
<?php
include"sessions.php"; 
session_start();
$user_id = $_SESSION['user_id'];
?>
<?php
 //if(!$user_id){
  // header("location: index.php");
 // exit;
// }
?>

<?php

//Initialize Values

require_once('php/php_image_magician.php');
$userid = $_SESSION['user_id'];
$src = NULL;
$ext = "";
$product = $_POST['product'];


//Make sure it was a valid file, if not complain. 
if ((($ext == "mp3") || ($ext == "mp4") || ($ext == "mpeg")) && ($_FILES["file"]["size"] < 5000000))
  {
  	

		
		//Get pic info and upload pic to server
		$RandoNum = "cart";
		$RandomNum = rand(0, 9999999999);
		$nameof = "$RandoNum-$RandomNum-$userid";
		
		$picid = $nameof;
		$picturelocation = "files/im/$picid.$ext";
	
		//move pic
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "$picturelocation");
	  

		
		
      	//Product variables
		$nt = $_POST['content'];
		$typee = $_POST['type'];
		$title = $_POST['brand'];
		$title2 = $_POST['price'];
	
		$shop = $_POST['shop'];
		 $sections  =  $_POST['quantity']; 
		$timestamp = time();
		$timestap = time();

		include"connect.php";

			
			$sql="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
	
		
		
					
					$sqls=mysqli_query($conn, $sql) or die(mysql_error());



		
	   $success = 'success';
header("location: submit.php?pass=$name&process=$success&pull=$pp");
exit();
       
		}elseif($product){
			
			 	//Product variables
		$nt = $_POST['content'];
		$typee = $_POST['type'];
		$title = $_POST['brand'];
		$title2 = $_POST['price'];
		$product = $_POST['product'];
		$shop = $_POST['shop'];
		 $sections  =  $_POST['quantity']; 
		$timestamp = time();
		$timestap = time();

		include"connect.php";

	
			
			$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
			
	
		
		
					
					$sqls=mysqli_query($conn, $sql) or die(mysql_error());

			
		}
		
else
	{
	$post_wid =$_POST[username];
	   $succes = 'succes';
header("location: submit.php?username=$post_wid&successs=$succes");
exit();
	}
?>
<?php ob_end_flush();?>