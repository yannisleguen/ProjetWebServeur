<?php

    $DB_SERVER ='localhost';

    $DB_USERNAME = 'root';

    $DB_PASSWORD = '';

    $DB_NAME ='tripmylife';

     

    /* Connection à la base de données */

    $DB_NAME = new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME) or die("impossible de se connecter");

?>