<?php

class Progression {
    public $current;

    function __construct($start=0) {
        $this->$current = $start;
    }

    function nextValue() {
        $answer = $this->$current;
        $this->advance();
        return $answer;
    }

    function advance() {
        $this->$current++;
    }

    function printProgression($n) {
        print($this->nextValue());
        for($j=1; $j<$n; $j++) 
            print(" " . $this->nextValue());
        print("\n");
    }
}

?>