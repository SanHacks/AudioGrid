<!DOCTYPE html>
<html>
<? if($user_id){
				}
		else{
		header("index.php");
		exit;
		}
?>
<?php include"header.php"; ?>
<body>

<div data-role="page">

	<div data-role="header">
		<h1>LyricPedia</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Submit Lyrics</p>			
		<form   enctype='multipart/form-data'  action='save.php' method='POST'>
     <label for="artist">Artist:</label>
     <input type="text" name="artist" id="artist" value="">
     <label for="Songname">Song name:</label>
     <input type="text" data-clear-btn="true" name="songname" id="songname" 				value="">
	  <label for="content">Lyrics:</label>    <textarea row="75" name="content" id="content"></textarea>
		<label for="file">Song Art:</label>
		<input type="file" name="file" id="file" value="">

		<input type="submit"  value="Save">
			</form>
		
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<div data-role="navbar">
<?php include"footer.php"; ?>
	</div><!-- /navbar -->
	</div><!-- /footer -->
	
</div><!-- /page -->


</body>
</html>