<?php
	//Declare a variable. Use GET to GET the information from the form in the other php document...
	$Name = $_GET["name"];
	$Age = $_GET["age"];

	//POST will get the information from the form, but won't show it in the URL.
	$username = $_POST["username"];
	$password = $_POST["password"];

	//Set the Cookies value to whatever the USERNAME is.
	$_COOKIE["username"] = $username;

	//You can also make an array with the information: Numbers don't need "" around them.
	$_POST = array("username" => "Emma", "password" => 12345);

?>

<!-- SOME MORE EXAMPLES -->
<?php

	//This code will create an array -> create information for a person -> push in the person-card into the array.
	$contacts = array();
	$person = array("name" => "Emma", "age" => "21");
	$contacts[] = $person;

	//To echo out the name of the person you want to see on your screen: First which person-card (number in the array), then what you're looking for (the name):
	echo $contacts[0]["name"];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<meta charset="utf-8">
</head>


<body>

	
	<h1>Welcome <?php echo $Name; ?></h1>
	<h1>What's 9 + 10? <?php echo $Age; ?></h1>
	<h2>YOU STUPID</h2>

	<br>

	<h1>Your username is: <?php echo $username; ?></h1>
	<h1>Your password is: <?php echo $password; ?></h1>

	<br>

	<a href="helplecture.php?username = <?php echo $username ?>">Click on this link</a>



</body>
</html>









