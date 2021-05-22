<!DOCTYPE html>
<html>
<?php
 error_reporting(1);
 $name='AudioGrid'; ?> 
<?php include"header.php"; ?>

<body>

<div data-role="page" data-theme="a">
<div data-role="header" data-theme="a">
   <div class="center"><a href='index.php'><img  height='50%' width='100%' src='img/logo.png' alt="AudioGrid"/></a></div>
	<a href="upload" target="_blank" data-icon="cloud" class="ui-btn-right">
	Upload</a>
</div><!-- /header -->

	<div data-role="content">			
		<form  action='action='search.php'' method='GET' >
      <input type="search" name="search" placeholder="Search Music...e.g Travis Scott"/><a href="#" class="searchbar"></a>
    
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
    <li><a href='song.php?pid=$id'>
        <h2>$artist - $name</h2>
    </a>

	</li>";
	 	}

		
	
	
		?>
</ul>
	</div>
	<div data-role="footer">
		<div data-role="footer" data-id="foo1" data-position="fixed">
	<?php include"footer.php"; ?><!-- /navbar -->
</div>
	</div><!-- /footer -->
	
</div><!-- /page -->
   <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">
        <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Close menu</a></li>
      
                <li><a href="#panel-responsive-page2">Select</a></li>
                <li><a href="#panel-responsive-page2">Slider, single</a></li>
      
        </ul>
    </div>

</body>
</html>