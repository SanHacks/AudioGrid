<!DOCTYPE html>
<html>
<?php
 error_reporting(1);
 $name='Latest'; ?> 
<?php include"header.php"; ?>
<body>

<div data-role="page">
<div data-role="header" data-theme="b">
   <div class="center"><img  height='50%' width='100%' src='img/logo.png' alt="AudioGrid"/></div>
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

    <li data-role="list-divider">Hot Songs <span class="ui-li-count">10</span></li>
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
                      

					 ORDER BY timestamp DESC  LIMIT  10

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
    <li><a href='song.php?pid=$id'>
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