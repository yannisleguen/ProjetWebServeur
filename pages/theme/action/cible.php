<?php
$monfichier = fopen('listeMdp.txt', 'r+');
 fputs($monfichier, $_POST['prenom']);
 fclose($monfichier);
?> 