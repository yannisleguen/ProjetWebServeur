<?php

require("connect.php");

$db = db_connect();

$user = $_POST['usr'];
$name= $_POST['name'];
$firstName= $_POST['fstname'];
$birthdate= $_POST['birthdate'];
$phone= $_POST['phone'];
$email= $_POST['mail'];
$password = $_POST['password'];
$sexe= $_POST['chosen_sexe'];
$description= $_POST['description'];


if($db) {
	$query = "INSERT INTO user(pseudo_User,name_User,first_Name_User,tel_User,email_User,sexe_User,birthsday,passwrd_User) VALUES(:user,:nom,:prenom,:tel,:email,:sexe,:birth,:psw)";
	$statement = $db->prepare($query);
	//On bind toutes les values avec les valeurs des variables
	$statement->bindValue(':user', $user);
	$statement->bindValue(':prenom', $firstName);
	$statement->bindValue(':nom', $name);
	$statement->bindValue(':tel', $phone);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':sexe', $sexe);
	$statement->bindValue(':birth', $birthdate);
	$statement->bindValue(':psw', $password);
	$statement->execute();

	if($statement = true){
		echo "test réussi";
	}
}

?>
