<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pawd = $_POST['pwd'];

    require('../inc/conn.php');

    $stmt = "
        INSERT INTO kunden(name, email, password)
        VALUES('$name', '$email', '$pawd');
    ";

    $conn->query($stmt);
    $conn = null;

?>