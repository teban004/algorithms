<?php

    require_once(__DIR__ . "/../classes/progression.php");

    $myProgression = new Progression();

    $myProgression->printProgression(10);

    $myArithmeticProgression = new ArithmeticProgression(2);

    $myArithmeticProgression->printProgression(5);

?>