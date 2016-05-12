<?php
define('SQL_HOST','localhost');
define('SQL_USER','root');
define('SQL_PASS','');
define('SQL_DB','characters');

$conn = new mysqli(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class database {
	function add_monster($monsterName, $monsterCr, $monsterSize, $monsterType, $monsterAlignment){
		global $conn;
		$query = "INSERT INTO characters.monsters (monster_name, monster_CR, monster_size, monster_type, monster_alignment) VALUES ('$monsterName', '$monsterCr', '$monsterSize', '$monsterType', '$monsterAlignment')";
		// echo $query;
		return $conn->query($query);
	}
}

global $db;
$db = new database();
?>
