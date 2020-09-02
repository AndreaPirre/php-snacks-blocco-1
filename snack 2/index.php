<?php

    $mail = $_GET['mail'];
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo $mail;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $age;

    $dotPresent = strpos($mail, '.');
    $atPresent = strpos($mail, '@');

    var_dump($dotPresent);
    echo "<br>";
    var_dump($atPresent);


?>
