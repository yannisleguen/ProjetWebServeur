<?php

require("connect.php");

$db = db_connect();

$user = $_POST['name'];
$password_entered = $_POST['password'];

if($db) {
	$query = "SELECT passwrd_User FROM user WHERE email_User = :name";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $user);
	$statement->execute();
	while($row = $statement->fetch(PDO::FETCH_ASSOC)){
		$password_base = $row['passwrd_User'];
	}
}

if($password_entered == $password_base) {
	echo  'Identification réussie';
}
else{
	echo  'ERREUR';
}

?>
