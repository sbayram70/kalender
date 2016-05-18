<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$birthdays = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','sbayram_bday','qwerty','sbayram_calendar');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from birthdays where id=$id";
			$result = $db->query($query);
		
			$birthdays = $result->fetch_assoc();		
		endif;
		if ($birthdays == NULL):
			// No birthdays found
			http_response_code(404);
			include("./common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','sbayram_bday','qwerty','sbayram_calendar');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "delete from birthdays where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>