<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lists</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="favicon.ico">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.3.2.min.js"></script>
</head>

<body>

<div data-role="page">

	<div data-role="header">
		<h1>LyricPedia</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Result</p>		
<ul data-role="listview" data-inset="true">
    <li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
    <li><a href="index.php">
        <h2>Stephen Weber</h2>
        <p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
        <p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
        <p class="ui-li-aside"><strong>6:24</strong>PM</p>
    </a></li>
    <li><a href="index.php">
        <h2>jQuery Team</h2>
        <p><strong>Boston Conference Planning</strong></p>
        <p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
        <p class="ui-li-aside"><strong>9:18</strong>AM</p>
    </a></li>
    <li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
    <li><a href="index.php" >
        <h2>Avery Walker</h2>
        <p><strong>Re: Dinner Tonight</strong></p>
        <p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
        <p class="ui-li-aside"><strong>4:48</strong>PM</p>
    </a></li>
</ul>
	</div><!-- /content -->
	
	<div data-role="footer">
	<?php include"footer.php"; ?><!-- /navbar -->
	</div><!-- /footer -->
	
</div><!-- /page -->


</body>
</html>