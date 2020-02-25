<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<!--PhP tag-->
<?php 
$home = "myButtons";
$index = "myButtons";
$about = "myButtons";
$support = "myButtons";
//this line gets the file name without the dot and extension.
$navMenu = basename($_SERVER['PHP_SELF'], ".PHP");
 if ($navMenu == "index"){
	$index = 'myActiveButton';
}else if ($navMenu == "about"){
	$about = 'myActiveButton';
}else if ($navMenu == "support"){
	$support = 'myActiveButton';
}
?>
<!-- the body section -->
<body>
<header><h1><img src="images\My Guitar Shop.png" alt="My Guitar Shop" style="width:150px;height:100px;"></h1></header>
<div class= "container">
<div class= "nav_bar">
<nav>
<?php
echo '
<a href="./index.php">Menu</a> 
<a href="./about.php">About Us</a> 
<a href="./support.php">Support</a>';
?>
</nav>
</div>
</div>
</body>