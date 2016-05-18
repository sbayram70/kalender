
<h2 class="titel"> Verjaardagskalender</h2>

<?php
    require_once "calendar.logic.php";
?>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="./common/main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
     
<?php 


    $oldMonth = 0;
    if (!empty($birthdays)): 
        foreach($birthdays as $birthdays):
            if($oldMonth != $birthdays["month"]):
?>
        <h1><?php echo date("F", strtotime('00-'.$birthdays["month"].'-01'));?></h1>
<?php          $oldMonth = $birthdays["month"];
            endif; 
?>
        
                <h2><?=$birthdays['day']?></h2> 
                 
            <ul>
                <li>  
                    <a href="edit.php?id=<?=$birthdays['id']?>"><?php echo strip_tags($birthdays['person']);?>
                    <?=$birthdays['year']?></a>               
                </li>
             </ul>
            <a class='del' href="delete.php?id=<?=$birthdays['id']?>">Delete</a>
       

       

<?php 
        endforeach; 
    endif;  
?>
 <p><a class="add" href="create.php">+ Add</a></p>
 <hr>


<footer> Deze website is gemaakt door Suleyman Bayram. </footer>
<hr>
	</body>     
    </html>