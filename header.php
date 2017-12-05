<!DOCTYPE html>

<html>
<head>
	<title>Browse Books</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta charset="utf-8">
	<?php include("config.php"); ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>


<header>

	<a href="index.php"><img src="Images/logo.png"></a>

	<ul>
		<li class="<?php echo ($current_page == 'index.php' || $current_page == "") ? 'active' : NULL ?>"><a href="index.php">HOME</a></li>
		<li class="<?php echo $current_page == 'aboutus.php' ? 'active' : NULL ?>"><a href="aboutus.php">ABOUT US</a></li>
		<li class="<?php echo $current_page == 'browsebooks.php' ? 'active' : NULL ?>"><a href="browsebooks.php">BROWSE BOOKS</a></li>
		<li class="<?php echo $current_page == 'mybooks.php' ? 'active' : NULL ?>"><a href="mybooks.php">MY BOOKS</a></li>
		<li class="<?php echo $current_page == 'contact.php' ? 'active' : NULL ?>"><a href="contact.php">CONTACT</a></li>
		<li class="<?php echo $current_page == 'gallary.php' ? 'active' : NULL ?>"><a href="gallary.php">GALLARY</a></li>
	</ul>

</header>