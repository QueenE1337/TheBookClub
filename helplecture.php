<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<meta charset="utf-8">
</head>


<body>

	<!-- the aciton will tell what's going to happen when you fill out the form. When using the method: GET, it will appear in the URL in your browser -->
	<form action="display.php" method="GET">
		<input type="text" name="name"/>
		<input type="text" name="age"/>
		<input type="submit" name="Submit" value="search bitch"/>
	</form>

	<br>

	<!-- POST = now it wont display the information in the URL. More secret. -->
	<form action="display.php" method="POST">
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="submit" name="Submit" value="search bitch"/>
	</form>


	<!-- Let's make a cookie... Looking for a cookie for 60 sekunds. -->
	<?php setcookie("username", "", time() * 60); ?>


</body>
</html>









