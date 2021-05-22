<!DOCTYPE html>
<html>
<?php
 error_reporting(1);
 ?> 
     
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
<?php include"header.php"; ?>
<body>

<div data-role="page">
<div data-role="header" data-theme="b">
   <div class="center"><img  height='50%' width='100%' src='<?php echo'$images';?>' alt="AudioGrid"/></div>
	<a href="upload.php" data-transition="flip" data-icon="cloud" class="ui-btn-right">
	Upload</a>
</div><!-- /header -->

	<div data-role="content">			
		<form  action='action='search.php'' method='GET' >
      <input type="search" name="search" placeholder="Search Music...e.g Travis Scott"/><a href="#" class="searchbar"></a>
    
<label for="flip-2">Order By:</label>
<fieldset data-role="controlgroup" data-type="horizontal">
    <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="Latest" checked="checked">
    <label for="radio-choice-h-2a">Latest</label>
    <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="Alltime">
    <label for="radio-choice-h-2b">All Time</label>

</fieldset>
<button type="submit" id="submit">Search</button>
</form>
</br>

	</div><!-- /content -->
				

		<div data-role="content">	
			
<ul data-role="listview" data-inset="true">

    <li data-role="list-divider">Hot Songs <span class="ui-li-count">5</span></li>
		<?php	
		//Look up for top random lists on the database
		include "connect.php";
		
					if($next) {
							 $queryfor =" SELECT  id,post,image,timestamp,type,name,artist
                              FROM posts
 
						 ORDER BY timestamp ASC  LIMIT  5

                             ";	
							 $query=mysqli_query($conn, $queryfor) or die(mysql_error());
							 }else{
		$queryfor = "SELECT id,post,image,timestamp,type,name,artist
                              FROM posts 
                      

					 ORDER BY views DESC  LIMIT  5

                             ";	
							 	 $query=mysqli_query($conn, $queryfor) or die(mysql_error());
							 }
				
		
		mysqli_close($conn);
		
		
		while ($row = mysqli_fetch_assoc($query)) {
	

			
	
	
		
		$description = $row['post'];
		$name = $row['name'];
		$id = $row['id'];
		$artist = $row['artist'];
		$uid= $row['user_id'];
		$t_time = $row['timestamp'];

  
	

				mysqli_close($conn);	
			
	
		
		

		//Lists rendered from the database

         			 echo"
    <li><a href='lyric.php?id=$id'>
        <h2>$artist - $name</h2>
    </a>

	</li>";
	 	}

		
	
	
		?>
</ul>
	</div><!-- /content -->
	
	<div data-role="footer">
		<div data-role="navbar">
<?php include"footer.php"; ?>
	</div><!-- /navbar -->
	</div><!-- /footer -->
	
</div><!-- /page -->


</body>
</html>