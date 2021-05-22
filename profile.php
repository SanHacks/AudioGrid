<!DOCTYPE html>
<html>

<?php $name='Profile'; ?> 
<?php include"header.php"; ?>
<body>

<div data-role="page">
		<?php
 	if($user_id){
		include "connect.php";
		$queryh = "SELECT id,username,avatar,background,name,aboutme,hometown,followers,following,auth,facebook,pbackcolor,backcolor,stats,bback,posts,avatarpro      FROM users 
                              WHERE id='$user_id'
                             ";
						 $query=mysqli_query($conn, $queryh) or die(mysql_error());		 
							 
		mysqli_close($conn);
		$row = mysqli_fetch_assoc($query);
		//This one describes itself
		$username = $row['username'];
		$uid = $row['id'];
		$image = $row['avatar'];
		$imagepro = $row['avatarpro'];
		$back = $row['background'];
		$name = $row['name'];
		$about = $row['aboutme'];
		$followers = $row['followers'];
		$following = $row['following'];
        $hometown = $row['hometown'];
        $facebook = $row['facebook'];
        $auth = $row['auth'];
		$twitter=$row['twitter'];
		$postcolor=$row['pbackcolor'];
		$backgroundc=$row['backcolor'];
		$stats=$row['stats'];
		$bback=$row['bback'];
		$posts=$row['posts'];
				}
				
				
				?>
	<div data-role="header">
		<h1>LyricPedia</h1>
	</div><!-- /header -->
		<p><?php echo"$name"; ?></p>		
<ul data-role="listview" data-inset="true">
    <li data-role="list-divider"><?php echo"$username"; ?> <span class="ui-li-count">2</span></li>
    <li><a href="index.html">
        <h2>Stephen Weber</h2>
        <p><strong>Saved Lyrics</strong></p>
        <p>Favorite Lyrics</p>
    </a></li>

</ul>
	<div data-role="content">	
		<p>Top Saved Lyrics</p>		
<ul data-role="listview" data-inset="true">
    <li data-role="list-divider">Top Song Lyrics <span class="ui-li-count">2</span></li>
    <li><a href="lyric.php?id=$id">
        <h2>Travis Scott-Wonderful</h2>
    </a></li>
    <li><a href="lyric.php?id=$id">
        <h2>Jaden Smith-Icon</h2>
    </a></li>

</ul>
	</div><!-- /content -->
	
	<div data-role="footer">
	<?php include"footer.php"; ?><!-- /navbar -->
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