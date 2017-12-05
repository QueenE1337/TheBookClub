<body>
	<div id="maincontainer">

	<?php include("header.php"); ?>

	<div id="infocontainer">


	<?php

		//Open the database...
		@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

		if ($db->connect_error) {
   			echo "could not connect: " . $db->connect_error;
    		printf("<br><a href=index.php>Return to home page </a>");
    		exit();
		}


		if (isset($_POST['username'], $_POST['password'])) {

			$username = mysqli_real_escape_string($db, $_POST['username']);
			//Make everything you write into a string... Can't change code with html entitites. Same for password.
			$username = htmlentities($username);


			$password = sha1($_POST['password']);
			$password = htmlentities($password);



			//echo "SELECT * FROM login WHERE username = '{$username}' AND password = '{$password}'";
    
    		$query = ("SELECT * FROM login WHERE username = '{$username}' "."AND password = '{$password}'");
       
    
    		$stmt = $db->prepare($query);
   			$stmt->execute();
    		$stmt->store_result(); 


    		 $totalcount = $stmt->num_rows();

		}

	?>



		<?php
        
        
	        if (isset($totalcount)) {
	            if ($totalcount == 0) {
	                echo '<h2>You got it wrong. Can\'t break in here!</h2>';
	            } else {
	               	echo '<h2>Welcome '. $username .'! </h2>';
	                echo '<p><a target="_blank" href="fileUpload.php">Upload pictures here...</a></p>';
	            }
	        }
    	?>



		<!-- LOGIN FORM: -->
		<h3>LOGIN</h3>

		<form method="POST" action="">
			Username:<br> <input type="text" name="username"><br>
			Password: <br> <input type="password" name="password"><br>
			<input type="submit" value="SUBMIT"><br>
		</form>	



		<!-- MAKE MY OWN GALLARY  -->

		<ul id="gallary">
			<?php
				$photo = new DirectoryIterator(uploadedfiles);
				foreach ($photo as $fileinfo) {
	   				if (!$fileinfo->isDot() && $fileinfo != '.DS_Store') {
	      			echo "<li><img src=\"uploadedfiles/" . $fileinfo->getFilename() . "\"</li>";
	    			}
				}
			?>
		</ul>








	</div>


	<?php include("sessionHijacking.php"); ?>
	<?php include("footer.php"); ?>

	</div>
</body>