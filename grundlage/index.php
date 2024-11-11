<?php
    // PhP ist eine Interpretersprache, welche auf dem Server interpretiert wird und als HTML Datei übermittelt wirds
    // Die Datentypen sind dynamisch und werden erst während der Laufzeit festegelegt
    $zahl = 1;
    $Zahl = 2;
    $zAhl = 3;
    $string = "5";
    // var_dump gibt Zusatzinformationen zu den Variablen, Objekten usw aus
    var_dump($zahl,  '<br>', $string , '<br>' , $Zahl ,  $zAhl);
    // ecco dient der Darstellung auf einer Webseite
    echo "<h1>$string</h1>";
    EchO' Buuuhh';
    echo '<br>';
    echo( $zAhl + $string);
    echo '<br>';
    var_dump("a">"A");
    var_dump( 0.1 + 0.2);

    // DieKontrollstrukturen ähneln der Schreibweise von JS
    if($zahl <=> "1"){
        echo 'true';
    } else{
        echo 'false';
    }

    // if($zahl !== "1"){
    //     echo 'true';
    // } else{
    //     echo 'false';
    // }

    // Terary Operator wie in JS
    $retVal = ($zahl == 3) ? true : false ;
    echo '<br>';
    var_dump($retVal);
    if(false){

    }elseif(true){
        echo 'Pause';
    }

    $i =0;
    while($i <= 10){
        // echo $i, "<br>";
        $j = "j";
        $i++;
    }

    do{
        // echo $j;
    }while($i < 11);

    for($i = 12; $i > 10; $i--){ //$i = $i -1
        echo $i;
    }

    echo '<br>';
    echo '<br>';
    $arr = [1,2,3,4,5];

    var_dump($arr);

    // In PhP werden Maps assossiatives Arryy genannt, aber auch dieses ist eigentlich nur eine KEy-Value-Pair
    $ass = array("name" => "Max Mustermann", "Alter" => 55, "pwd" => "Dies ist kein gültiges Passwort!");

    $user = "Max Mustermann";
    $pwd = "Dies ist kein gültiges Passwort!";

    if($user === $ass["name"]){
       if($pwd === $ass["pwd"]){
        echo "<h2> Wilkommen zurück! Sie sind erfolgreich eingeloggt</h2>";
       }else {
        // In log pwd falsch
        echo "Username oder Passwort nicht gefunden";
       }
    } else {
        echo "Username oder Passwort nicht gefunden";
    }

    if($user === $ass["name"] && $pwd === $ass["pwd"]){ // && || und oder
        echo " || Username oder Passwort nicht gefunden";
    }

   $tern = ($user === $ass["name"]&& $pwd === $ass["pwd"]) ?  "<h2> Wilkommen zurück! Sie sind erfolgreich eingeloggt</h2>" : " Username oder Passwort nicht gefunden";

   echo $tern;


   foreach($arr as $v){
    echo $v, "<br>";
   }

   $h = "Hello";
   $w = "World";

   echo $h ." ". $w; // Strings konkatenieren
   echo "<br>";
    // mit dem Keyword function werden Funktionen oder Methoden definiert
   function add($zahl1, $zahl2){
    if(!$zahl1){
        echo $zahl2;
    } elseif(!$zahl2){
        echo $zahl1;
    } elseif($zahl1 && $zahl2){
        echo $zahl1 + $zahl2;
    }
    
   }

   add(2, $_);

//    Mit include lassen sich mehrere PhP-Dateien zu einer Webseite zusammenführen
   include("header.php");
   include("content.php");
   include("footer.php");

?>