<?php

    require_once(__DIR__ . "/../classes/progression.php");

    print("Progression: ");
    $myProgression = new Progression();
    $myProgression->printProgression(10);

    print("Arithmetic progression: ");
    $myArithmeticProgression = new ArithmeticProgression(2);
    $myArithmeticProgression->printProgression(5);

    print("Geometric progression: ");
    $myGeometricProgression = new GeometricProgression(3);
    $myGeometricProgression->printProgression(6);

?>