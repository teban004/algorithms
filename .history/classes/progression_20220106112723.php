<?php

class Progression {
    protected $current;

    function __construct($start=0) {
        $current = $start;
    }

    function nextValue() {
        $answer = $current;
        advance();
        return answer();
    }

    function advance() {
        $current++;
    }

    function printProgression($n) {
        print(nextValue());
        for($j=1; $j<$n; $j++) 
            print(" " . nextValue());
        print("\n");
    }
}

?>