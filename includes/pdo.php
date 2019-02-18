<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=rfd-php',
        'root',
        '',
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
}

catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}