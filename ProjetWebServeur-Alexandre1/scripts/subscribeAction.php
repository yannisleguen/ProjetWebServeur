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
	 $query = "INSERT INTO user (id_User,pseudo_User,name_User,first_Name_User,tel_User,email_User,sexe_User,birthsday,passwrd_User,User_Description) VALUES (NULL,:pseudo_User,:name_User,:first_Name_User,:tel_User,:email_User,:sexe_User,:birthsday,:passwrd_User,:User_Description);";
	  $statement = $db->prepare($query);
	  $statement->bindValue(':pseudo_User', $user);
		$statement->bindValue(':first_Name_User', $firstName);
		$statement->bindValue(':name_User', $name);
		$statement->bindValue(':tel_User', $phone);
		$statement->bindValue(':email_User', $email);
		$statement->bindValue(':sexe_User', $sexe);
		$statement->bindValue(':birthsday', $birthdate);
		$statement->bindValue(':passwrd_User', $password);
		$statement->bindValue(':User_Description', $description);
		echo ($query); 
		
      if (!$statement->execute()) {
		  echo "Nico";
		  print_r($db->errorInfo());
	  }
	 // $db->commit();
	/*$db->exec("INSERT INTO user(pseudo_User,name_User,first_Name_User,birthsday,tel_User,email_User,passwrd_User,sexe_User) VALUES('$user','$name','$firstName','$birthdate','$phone','$email','$password','$sexe')");

	/*$sql = "INSERT INTO user(pseudo_User,name_User,first_Name_User,tel_User,email_User,sexe_User,birthsday,passwrd_User) VALUES(:user,:nom,:prenom,:tel,:email,:sexe,:birth,:psw)";
	$statement = $db->prepare($sql);
	//On bind toutes les values avec les valeurs des variables
	$statement->bindValue(':user', $user);
	$statement->bindValue(':prenom', $firstName);
	$statement->bindValue(':nom', $name);
	$statement->bindValue(':tel', $phone);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':sexe', $sexe);
	$statement->bindValue(':birth', $birthdate);
	$statement->bindValue(':psw', $password);
	$statement->execute();*/
}

?>
