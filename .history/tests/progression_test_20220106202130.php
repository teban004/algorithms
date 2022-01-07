<?php

    require_once(__DIR__ . "/../classes/progression.php");

    print("Progression: ");
    $myProgression = new Progression();

    $myProgression->printProgression(10);

    print("Arithmetic progression: ");
    $myArithmeticProgression = new ArithmeticProgression(2);

    $myArithmeticProgression->printProgression(5);

?>