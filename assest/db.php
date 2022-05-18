<?php
    define('DB_SERVER', 'localhost');
    define('id18707234_thangdaihua', 'root');
    define('DB_PASSWORD', '#KG&t|GrHUz+dX01');
    define('id18707234_thangport', 'blogggg');

    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $GLOBALS['conn'] = $pdo;

    } catch(PDOException $e){
        $GLOBALS['e'] = $e;
        die("ERROR: Could not connect. " . $e->getMessage());
    }

