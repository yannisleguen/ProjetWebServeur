<?php
// Include configuration de la connection

require_once 'php_connection.php';

// initialisation des variables

$username = $password = $confirm_password = "";

$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validation du nom d'utilisateur

    if(empty(trim($_POST["username"]))){

        $username_err = "Entrez un nom d'utilisateur non vide.";

    } else{
        // Préparation de la requête SQL
        $sql = "SELECT id FROM users WHERE username = ?";
		
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            // On essaie d'executer le statement

            if(mysqli_stmt_execute($stmt)){

                // On check le résultat

                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ce non d'utilisateur est déjà utilisé.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Il semble y avoir un problème, merci de réessayer plus tard !";
            }
        }
        mysqli_stmt_close($stmt);
    }

    // Validation du password

    if(empty(trim($_POST['password']))){
        $password_err = "Entrez un mot de passe.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Le mot de passe doit faire 6 caractères.";
    } else{
        $password = trim($_POST['password']);
    }

    // Confirmation du password

    if(empty(trim($_POST["confirm_password"]))){

        $confirm_password_err = 'Confirmez le mot de passe.';     

    } else{

        $confirm_password = trim($_POST['confirm_password']);

        if($password != $confirm_password){

            $confirm_password_err = 'Le mot de passe n\'est pas le même !';
        }
    }

    // On vérifie si il y a des erreurs avant l'insertion dans la base de donnée

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement

        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            if(mysqli_stmt_execute($stmt)){

                // Redirection sur la page de connection

                header("location: login.php");
            } else{
                echo "Il semble y avoir un problème, merci de réessayer plus tard !";
            }
        }

        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>