<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','sbayram_bday','qwerty','sbayram_calendar');
		
		// Prepare data for insertion
		$person = $db->escape_string($_POST["person"]);
		$day = $db->escape_string($_POST["day"]);
		$month = $db->escape_string($_POST["month"]);
		$year = $db->escape_string($_POST["year"]);
		
		// Prepare query and execute
		$query = "insert into birthdays (person, day, month, year) values ('$person','$day','$month','$year')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;
?>