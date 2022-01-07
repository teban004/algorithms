<?php

class Progression {
    public $current;

    function __construct($start=0) {
        $this->current = $start;
    }

    function nextValue() {
        $answer = $this->current;
        $this->advance();
        return $answer;
    }

    function advance() {
        $this->current++;
    }

    function printProgression($n) {
        print($this->nextValue());
        for($j=1; $j<$n; $j++) 
            print(" " . $this->nextValue());
        print("\n");
    }
}

class ArithmeticProgression extends Progression {
    public $increment;

    // Constructs arithmetic progression with arbitrary start and increment
    function __construct($stepSize=1, $start=0) {
        parent::__construct($start);
        $this->increment = $stepSize;
    }

    function advance() { // Adds the arithmetic increment to the current value
        $this->current += $this->increment;
    }

}

?>