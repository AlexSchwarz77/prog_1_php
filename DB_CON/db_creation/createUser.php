<?php
    // require bindet das Script ein
    // Anders als beim include wird dieses Script benötigt, sollte es nicht abrufbar sein, entsteht ein Error
    require("../inc/conn.php");

    // die $conn Variable ist das PDO aus der conn.php Datei
    // Query werden in SQL auch die Abfragen genannt
    // Mit CREATE wird in SQL alles erstellt! CREATE DATABASE, CREATE TABLE
    // If not exists führt diesen Query nur aus, sollte die Tabelle noch nicht bestehen
    $createUserTable = $conn -> query('
    CREATE TABLE IF NOT EXISTS kunden(
        kunden_id INT AUTO_INCREMENT PRIMARY Key,
        name VARCHAR(255),
        email VARCHAR(255),
        pwd VARCHAR(255),
        plz VARCHAR(20),
        ort VARCHAR(255),
        phone VARCHAR(255),
        userName VARCHAR(255)
    )
    ENGINE= INNODB    
    ');

    // Mit INSERT INTO werden Datensätze eingefügt
    // Beim angeben der Spalten muss auch bei den "Daten" darauf geachtet werden, dass diese an der richtigen Position eingtragen werden
    $createUsers = $conn -> query('
        INSERT INTO kunden(kunden_id, name, email, pwd, plz, ort, phone, userName)
        VALUES(1, "Klaus Peter", "hasi53@hotmail.de", "ich mag kinder", "0190", "Musterstadt", 
        "0180- 666 666", "hasiMausi53"),
        (2, "Petra Klaus", "domina69@gmx.hk", "du kleine sklavensau(password von nicole)",
        "0190", "Musterstadt", "0180 555 555", "dominatrix")
    ');

    // Um keine dauerhafte Verbindung zur Datenbank zu haben, wird $conn auf null gesetzt
    $conn = null;
    if($conn == null){
        echo "<br>Connection closed";
    }
?>