<?php
    // Mit $_POST kann man auf die einzelnen Werte des Formulars durch die name-property des Formularelemets zugreiffen
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