<?php 

try {
    $db=new PDO("mysql:host=localhost; dbname=hospital; charest=utf8", 'root', '');
   // echo 'Datenbankverbindung erfolgreich aufgebaut.';
} catch (Exception $e) {
    echo $e->getMessage();
}

?>