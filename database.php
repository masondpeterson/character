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
	function get_monsters(){
		global $conn;
		$query = "SELECT * FROM characters.monsters";
		$result = $conn->query($query); //marker moves to the end and must be moved back
		$monsterList = array(); //establishes this variable as an array for later use
		$result->data_seek(0);//Sets the marker to the first element
		//While there is an entry (temp variable) fetch it and add it to the array
		while($entry=$result->fetch_object()){
			$monsterList[]=$entry;
		}
		return $monsterList; //stores this contents and sends to page
	}
	//This function retrieves the list of env from the env's table
	function get_environments(){
		global $conn;
		$query = "SELECT env_id, env_name FROM characters.environments";
		$result=$conn->query($query);
		$environments=array();
		$result->data_seek(0);
		while($entry=$result->fetch_object()){
			$environments[]=$entry;
		}
		return $environments;
	}
	//This is the function that is used to update a monster in the DB
	function update_monsters(){
		global $conn;
		$query = "";
		return $conn->query($query);
	}
	//This function retrieves the columns from the monster table for input fields
	// function get_monDetails(){
	// 	global $conn;
	// 	$query = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='characters' AND `TABLE_NAME`='monsters'";
	// 	$result=$conn->query($query);
	// 	$monDetails=array();
	// 	$result->data_seek(0);
	// 	while($entry=$result->fetch_object()){
	// 		$monDetails[]=$entry;
	// 	}
	// 	echo $query;
	// 	return $monDetails;		
	// }
}

global $db;
$db = new database();
?>
