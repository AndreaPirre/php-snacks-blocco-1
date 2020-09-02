<?php

    $mail = $_GET['mail'];
    $name = $_GET['name'];
    $age = $_GET['age'];


    $dotPresent = strpos($mail, '.');
    $atPresent = strpos($mail, '@');
    $lenghtName = strlen($name);
    $ageControl = is_numeric($age);

    echo $mail;
    echo "<br>";
    echo "<br>";

    if ($dotPresent !== false && $atPresent !== false) {

        echo "ok";

    } else {

        echo "ko";
    }

    echo "<br>";
    echo "<br>";


    echo $name;
    echo "<br>";
    echo "<br>";

    if ($lenghtName > 3) {

        echo 'nome valido';

    } else {

        echo 'nome non valido';
    }

    echo "<br>";
    echo "<br>";

    echo $age;
    echo "<br>";
    echo "<br>";



    if ($ageControl == true) {
      echo 'età corretta';
    }else{
      echo 'età non corretta';
    }





?>
