<body>

<div id="maincontainer">

	<?php include("header.php"); ?>


	<div id="infocontainer">

		<!-- MY FORM: -->
		<h3>Browse Books</h3>

		    <form id="browsebooksform" action="browsebooks.php" method="POST">
		        Title: <br> <input type="text" name="searchtitle"> <br>
		        Author: <br> <input type="text" name="searchauthor"> <br>
		        <input type="submit" name="submit" value="SEARCH"> <br>
		    </form> <br>
		    


		<h3>Book List</h3>

		<?php 

		$searchtitle = "";
		$searchauthor = "";

		if (isset($_POST) && !empty($_POST)) {
			//Get data from form...
			$searchtitle = trim($_POST["searchtitle"]);
		    $searchauthor = trim($_POST["searchauthor"]);
		}

		#after that it is wise to use addslashes, it adds slashes if there's an apostrophe or quotation mark
		$searchtitle = addslashes($searchtitle);
		$searchauthor = addslashes($searchauthor);

		

		//Open the database
		@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);


		$searchtitle = mysqli_real_escape_string($db, $_POST['searchtitle']);
		$searchauthor = mysqli_real_escape_string($db, $_POST['searchauthor']);

		$searchtitle = htmlentities($searchtitle);
		$searchauthor = htmlentities($searchauthor);



		//Tell the user if it can't connect
		if ($db->connect_error) {
			echo "could not connect: " . $db->connect_error;
			printf("<br><a href=index.php> Return to home page </a>");
			exit();
		}

		//Building my query. 
		$query = " SELECT * FROM books";
		if ($searchtitle && !$searchauthor) { //Title search only...
			$query = $query . " where title like '%" . $searchtitle . "%' ";
		}
		if (!$searchtitle && $searchauthor) { //Author search only...
			$query = $query . " where author like '%" . $searchauthor . "%' ";
		}
		if ($searchtitle && $searchauthor) { //Title and author search...
			$query = $query . " where title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%' "; // unfinished
		}


		//PREPARE my query for execusion... Make it readable for SQL.
		$stmt = $db->prepare($query);
	    $stmt->bind_result($bookid, $title, $author, $reserved, $duedate);
	    $stmt->execute();

	    echo '<table class="book-list" cellpadding="6">';
	    echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> <td>Reserved?</td> </b> </tr>';
	    while ($stmt->fetch()) {

	    	if ($reserved == 0) {
	    		$reserved = 'NO';
	    	} else {
	    		$reserved = 'YES';
	    	}


	        echo "<tr>";
	        echo "<td> $title </td><td> $author </td>";

	        echo '<td><a href="reserveBook.php?bookid=' . urlencode($bookid) . '"> Reserve </a></td>';
	        
	        echo "<td> $reserved </td>";
	        echo "</tr>";
	    }
	    echo "</table>";


		?>
		       



	</div>



	<?php include("footer.php"); ?>

</div>


</body>

</html>