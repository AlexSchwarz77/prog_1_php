
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Output</title>
</head>
<body>
    <?php
        require_once("../inc/conn.php");

        // SELECT gibt Daten aus einer Datenbank wieder
        $ausgabe = "SELECT * FROM kunden";

        // Mit einer Foreach-Schleife kann man über das Ergebnis eines Queries "laufen"
        // Um die Daten anzuzeigen
        foreach($conn->query($ausgabe) as $row){
            echo "<p>";
            echo $row["name"]. "  <br>";
            echo $row["email"]. "  <br>";
            echo "</p>";
        };   
    ?>

    <h1>Nächste Block</h1>
    <?php
        echo "<pre>
        „DIE LEBENDIGEN BERVFE ICH / 
        DIE DOTEN BEKLAGE ICH / 
        DEN DONNER BRICHE ICH / 
        WER DAS NICHT GLAVBT DER LESE MICH.“ 
        </pre>"
    ?>
</body>
</html>