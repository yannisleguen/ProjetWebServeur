<?php include ('../connexion.php');?>
<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($DB_NAME,$_POST['name']);
      $mypassword = mysqli_real_escape_string($DB_NAME,$_POST['password']);
      
      $sql = "SELECT id FROM user WHERE name_user = '$myusername' and passwrd_User = '$mypassword'";
      $result = mysqli_query($DB_NAME,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_NUM);
      
      $count = mysqli_num_rows($result);
        
      if($count == 1) {
         echo "Session Valide";
      }else {
         $error = "Votre login ou votre mot de passe est invalide";
      }

      mysqli_close($DB_NAME);
   }
?>