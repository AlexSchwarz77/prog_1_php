<?php
    // Der Hostename ist die Adresse des Servers, also wäre hier auch 127.0.0.1 möglich
    $hostname = 'localhost';
    // WIe heist die Datenbank auf unserem MariaDB-Server?
    $dbname = "eshop";
    $user = "root";
    $pwd = "";
    
    // Try besagt, versuche den nachfolgenden Code auszuführen, sollte es nicht gelingen, führe den catch-Block aus
    try{
        // PDO -> PHP Data Object
        // Welcher DB-Server? Welcher host? welche DB?
        $conn = new PDO('mysql:host=' 
        . $hostname . ';dbname='
        . $dbname .';charset=utf8', $user, $pwd);

        // Innerhlab des PDO's können bestimmte Attribute gesetzt werden, um zum Beispiel nur Fehler der Kategorie Exception ausgeben zu lassen
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Connected successfully";
    }catch(PDOException $e){
        echo "Connection failed: " . $e -> getMessage();
    }

?>