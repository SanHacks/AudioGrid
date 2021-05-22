<!DOCTYPE html>
<html>

     
<?php


	$look= $_GET[pid];

		
				include"connect.php";
$sqlCommandd="SELECT id,post,artist,timestamp,type,name,song,image,ip,views,image_small
                              FROM posts
                          WHERE id = $look";
$query=mysqli_query($conn, $sqlCommandd) or die(mysql_error());   
	
							 $que	= "UPDATE posts
					 SET views = views + 1
					 WHERE id= $look  LIMIT 5
					";
					$queryx=mysqli_query($conn, $que) or die(mysql_error());  
		//mysqli_close($conn);
			while ($row = mysqli_fetch_array($query)) {
		$content = $row['post'];
		$proim = $rows['image'];
	$thisone = $rows['product'];
			$description = $row['post'];
		$name = $row['name'];
		$song = $row['song'];
		$artist = $row['artist'];
		$id = $row['id'];
		$artist = $row['artist'];	
		$contento = $row['post'];
		$id = $row['id'];
		$uid = $row['user_id'];
		$art = $row['image_small'];
		$views = $row['views'];
		$images = $row['image'];
		$t_time = $row['timestamp'];
		$look= $_GET['pid'];
		$reposts= $row['reposts'];
		$type = $row['type'];
	
	
		     $url = 'http://www.audiogrid.xyz/song.php?id=' ;
  $via = 'audiogrid';
 //   $vias = 'www.appdate.co.za';
	
			function getTime($t_time){
		$pt = time() - $t_time;
		if ($pt>=1)
			$p = date(" F  Y  ",$t_time);
		elseif ($pt>=3600)
			$p = (floor($pt/3600))."h";
		elseif ($pt>=60)
			$p = (floor($pt/60))."m";
		else 
			$p = $pt."s";
		return $p;
	}
	
	
	





			 
			 //Replace youtube url  with video


       $ago=  getTime($t_time);
	   

				


				}
				
 
 ?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title><?php echo"$name $artist"; ?>-AudioGrid</title>
   <meta name="description" content="<?php echo"$name  $artist $various ";?>"/>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<link rel="apple-touch-icon" href="img/f7-icon-square.png">
		<link rel="icon" href="img/f7-icon.png">
		<link rel="shortcut icon" HREF="img/f7-icon.png" />
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">

	<div data-role="header">
		<h1>AudioGrid</h1>
	</div><!-- /header -->

	<div data-role="content">	
	<ul data-role="listview" data-inset="true">

<?php 
		
				$string     = $content;
$search     = '/www.youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';

$replace    = "
<iframe  width='100%' height='100%' src='https://youtube.com/embed/$1' frameborder='0' allowfullscreen></iframe><a href='//www.youtubeinmp3.com/fetch/?video=https://www.youtube.com/watch?v=$1'>
<br>
 
";    
$content = preg_replace($search,$replace,$string);
$ur = preg_replace($search,$replace,$string);

	 if($images)				{
				echo "<a href='#' class='ks-pb-popup-dark'>
										
										<img src='$art' width='100%'/></a>
										";
					}
	echo "  
	
	
	<li><a href='song.php?pid=$id' class='item-link item-content'>
       
            <div class='item-inner'>
              <div class='item-title-row'>
                <div class='item-title'>$name</div>
                <div class='item-after'>$artist</div>
              </div>
              <div class='item-text'></div>
            </div></a></li>";
			  
	echo"<audio controls loop preload=metadata width=100%  poster='$image'> <source src='upload/$images' type='audio/$type '> </audio>	
	";
	
	 if($content){
		 echo"</br><em>Lyrics<em/>";
	 }
	 
	 
		echo"	<p>$content</p>
";
		
		?> 
							<?php
							
							
						$finish = $_GET['success'];
						
							if($finish){
								if(!$art){
									echo"<H3>Uploaded!  Add Song Art (optional) </h3>";
		echo"				

       		  <form enctype='multipart/form-data' class='store-data list-block' role='form' action='saveart.php' method='POST'>
      <ul>
        <li>
       <input name='pid' type='hidden' value='$id' />
		            <div class='item-content'>
     
            <div class='item-inner'> 
		
			
			  	  <div class='item-title label'>Clip/Song Art</div>
              <div class='item-input'>
                  <p>  <input name='file' type='file' id='file' size='24'> 
  </p>
            </div>
          </div>
        </li>
        
          <li>
		  

        </li>
      </ul>";
	
	     echo" <div class='content-block'>";
		 		$strings = ",";
	
		$u = array('pink','black', 'blue','black');

		$well = $u[rand(0,4)];

    echo" <p class='buttons-row'>	<input type='submit' class='button button-fill ' name='submit' value='Upload' style='background-color:$well' ></p>";
	  
	   echo"
    </div>
    </form>
	
	
	";

								}
							}
						echo"
	<div data-role='controlgroup' data-type='horizontal' data-mini='false'>
    <a href='http://www.facebook.com/sharer.php?u=$url$look&t=$socialtext' class='ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-facebook ui-btn-b'>facebook</a>
<a href='whatsapp://send?text=$what$url$look' class='ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-whatsapp ui-btn-b'>Whatsapp</a>
</br></br>
<a href='$song#' class='ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-arrowstop-1-s ui-btn-b'>Download  $views</a>
";?>	

</div>

	</div><!-- /content -->
	
	<div data-role="footer">
	<?php include"footer.php"; ?><!-- /navbar -->
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>