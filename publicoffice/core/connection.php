<?php
// Page pour se connecter à la DB
try {
    $connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
} 

catch (PDOException $e) {  
    echo $e->getMessage();
}
