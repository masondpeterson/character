<?php require_once('database.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Monster Search</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Bootstrap-->
    <meta charset="utf-8">
    <!--what makes containers work-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- end what makes containers work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$monsterList = $db->get_monsters();
echo "<pre>"; 
//Makes the output formatted on the page (HTML tag needs echo because php)
print_r($monsterList); //print_r is needed to print out an array
echo "</pre>";
?>
</body>
</html>
