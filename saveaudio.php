<?php ob_start(); ?>

<?php

//Initialize Values

$src = NULL;
$ext = "";

//Based upon file, convert for use in database
if ($_FILES["file"]["type"] == "audio/mp3")
{
	$ext = "mp3";
	$src = $_FILES['file']['tmp_name'];
}else if ($_FILES["file"]["type"] == "audio/wav")
{
	$ext = "wav";
	$src = $_FILES['file']['tmp_name'];
}else if ($_FILES["file"]["type"] == "audio/ogg")
{
	$ext = "ogg";
	$src = $_FILES['file']['tmp_name'];
}else if ($_FILES["file"]["type"] == "audio/mpeg")
{
	$ext = "mp3";
	$src = $_FILES['file']['tmp_name'];
}



  	
 
    	//Check image size
 
    	$name = $_POST['name'];
		$artist = $_POST['artist'];
		$typed = $_POST['type'];

	
		//Get pic info and upload pic to server
		$RandoNum = "Audiogrid.ga $name-$artist ";
		$RandomNum = rand(0, 9999999999);
		$nameof = "$RandoNum";
		$nameofs = "$RandomNum-$userid";
		
		$picid = $nameof;
		$picturelocation = "img/$picid.$ext";
	
		//move pic
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "$picturelocation");


	  
	  	$role = "mp3";
		$exta = "mp3";
		$content = $_POST['content'];
	
		$tribe = $_POST['tribe'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$location = $_POST['location'];
		$type = "Tribe";
		$timestamp = time();
	
		include "connect.php";
		
		
		
		if($picturelocation){
		$sql="INSERT INTO posts(post,ip,timestamp,type,image,song,name,artist,image_small)
VALUES
('$content','$ip','$timestamp ','$ext','$picturelocation','$picturelocation','$name','$artist','$picturelocation3')";
 $result=mysqli_query($conn, $sql) or die(mysql_error());
	   $yi=  	"UPDATE users
					 SET posts = posts + 1
					 WHERE ip='$ip'
					";
					$com=mysqli_query($conn, $yi) or die(mysql_error());

		}
						$strings =$_POST['content'];
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
   
   
   
   
   


					
    $gotosmss = "SELECT id,user_id
                          FROM posts 
                          WHERE ip='$ip' ORDER BY timestamp DESC
                          ";
		$queryme=mysqli_query($conn, $gotosmss) or die(mysql_error());
						 
    

     
      $rowse = mysqli_fetch_assoc($queryme);
	  
	  
	 $pp = $rowse['id'];
	

		if($com){
			
	   $success = 'success';
header("location: song.php?username=$name&success=$success&pid=$pp");
exit();

      }else{
	
	   $success = 'success';
header("location: index.php?success=$success");
exit();
	}
?><?php ob_end_flush();?>