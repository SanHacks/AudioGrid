<!DOCTYPE html>
<html>

<?php include"header.php"; ?>

<body>
<div data-role="page">

	<div data-role="header">
		<h1>AudioGrid</h1>
	</div><!-- /header -->

	<div data-role="content">	
		 
		<?php
		echo"				

       		  <form enctype='multipart/form-data'   role='form' action='saveaudio.php' method='POST'>
     
       
		
                <input  placeholder='Name' name='name'/>
				
		
			  
            
                <input  placeholder='Artist' name='artist'/>
            
			  
	
                <input  placeholder='Featured Artist(s) [optional]' name='various'/>
				
			
                  <p>   		<input type='file' name='file' id='file' value=''>
  </p>
      

		
			 
              <div class='item-title label'>Lyrics(optional)...</div>
			  
            
			  <input type='hidden' name='post_id' value='$look'>
			   <input type='hidden' name='ip' value='$ip'>
           <input type='hidden' name='location' value='$location'>
			  
                <textarea rows='8' cols='30'  placeholder='Audio Lyrics...' name='content'></textarea>
			
  
            
      
        
      
   ";
	
	     echo" <div class='content-block'>";
		 		$strings = ",";
	
		$u = array('pink','black', 'blue','black');

		$well = $u[rand(0,4)];

    echo" <p class='buttons-row'>	<input type='submit' class='button button-fill ' name='submit' value='Upload' style='background-color:$well' ></p>";
	  
	   echo"
    </div>
    </form>";

?>	
	
		 
	</div><!-- /content -->
	
	<div data-role="footer">
	<?php include"footer.php"; ?><!-- /navbar -->
	</div><!-- /footer -->
	
</div><!-- /page -->


</body>
</html>