	<?php
	
	$db = new mysqli('localhost','sbayram_bday','qwerty','sbayram_calendar');

	$query = "select * from birthdays order by month";
	$result = $db->query($query);
	
	$birthdays = $result->fetch_all(MYSQLI_ASSOC);


?>