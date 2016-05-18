<?php
	require_once "delete.logic.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./common/main.css">
</head>
<body>

</body>
</html>
	<h1>Verjaardag verwijderen</h1>
	<p>Weet je het zeker dat je de verjaardag van <?php echo strip_tags($birthdays['person']);?> wilt verwijderen</p>
	<form method="post">
	<input type="hidden" name="id" value="<?=$birthdays['id']?>">
		<div>
			
			<input class="yes" type="submit" name="confirmed" value="Yes">
			<input class="no" type="submit" name="canceled" value="No">

		</div>	
	</form>

	</body>
</html>
<?php
	
?>