<?php
    $hostname = 'localhost';
    $dbname = "eshop";
    $user = "root";
    $pwd = "";
    
    try{
        $conn = new PDO('mysql:host=' 
        . $hostname . ';dbname='
        . $dbname .';charset=utf8', $user, $pwd);

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Connected successfully";
    }catch(PDOException $e){
        echo "Connection failed: " . $e -> getMessage();
    }

?>