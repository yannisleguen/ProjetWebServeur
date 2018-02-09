<?php include ('../connexion.php');?>
<?php require ('../login_systeme.php');?>

<form name="login" action="" method="POST">
<p>Username: </p>
        <input class="form-control" type="text" placeholder="Username or Email adress" name="name"> 
<p>Password: </p>
        <input class="form-control" type="Password" placeholder="Password" name="password">  

<input type="submit" value="Connect">
