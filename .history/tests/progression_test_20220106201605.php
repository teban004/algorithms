<?php

    require_once(__DIR__ . "/../classes/progression.php");

    $myProgression = new Progression();

    $myProgression->printProgression(5);

    $myArithmeticProgression = new ArithmeticProgression();

    $myArithmeticProgression->printProgression(10);

?>