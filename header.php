<?php 
error_reporting(0);
session_start();
	$user_id = $_SESSION['user_id'];
	$imgs =$_COOKIE['img'];
	$menu =$_COOKIE['menu'];
	$background =$_COOKIE['backcolor'];

?>	


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo"$name"; ?></title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<link rel="apple-touch-icon" href="img/f7-icon-square.png">
		<link rel="icon" href="img/f7-icon.png">
		<link rel="shortcut icon" HREF="img/f7-icon.png" />
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>