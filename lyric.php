<!DOCTYPE html>
<html>

<?php $name='Saved Lyrics'; ?> 
<?php include"header.php"; ?>

<body>

<div data-role="page">

	<div data-role="header">
		<h1>LyricPedia</h1>
	</div><!-- /header -->

	<div data-role="content">	
	<ul data-role="listview" data-inset="true">

			<?php	
		$idg=$_GET['id'];
		include"connect.php";
		
		
		
		$queryfor = "SELECT id,post,user_id,timestamp,comments,views,likes,image,type,user2_id,tribe_id,role,op,repuser,roles,value1,value2,value1a,value2a,value1link,value2link
                              FROM posts 
								WHERE id='$idg'
					 ORDER BY timestamp DESC  LIMIT  10

                             ";	
							 	 $query=mysqli_query($conn, $queryfor) or die(mysql_error());
					
				
		
		mysqli_close($conn);
		
		
		while ($row = mysqli_fetch_assoc($query)) {
	

			
	
	
		
		$content = $row['post'];
		$imagess = $row['image'];
		$id = $row['id'];
		$uid= $row['user_id'];
		$views = $row['views'];
		$likes = $row['likes'];
		$comments = $row['comments'];
		$type = $row['type'];
		$userwhoid = $row['user2_id'];
		$tribed = $row['tribe_id'];
		$t_time = $row['timestamp'];
		$role= $row['role'];
		$realp= $row['op'];
		$repo= $row['repuser'];
		$value1= $row['value1'];
		$value2= $row['value2'];
		$value1a= $row['value1a'];
		$value2a= $row['value2a'];
		$roles= $row['roles'];
		$artist= $row['value1link'];
		$songname= $row['value2link'];
		$post_id= $row['post_id'];
         
		 	}
	
	echo"
    <li>
        <h2>$artist-$songname</h2>
    

	</li>
	$content
	</ul>";
	?>
	<?php	echo"<div data-role='controlgroup' data-type='horizontal' data-mini='true'>
    <a href='#' class='ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-plus ui-btn-b'>Save</a>
    <a href='#' class='ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-star ui-btn-b'>Favorite</a>";
?>
</div>

	</div><!-- /content -->
	
	<div data-role="footer">
	<?php include"footer.php"; ?><!-- /navbar -->
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>