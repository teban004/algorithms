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

class GeometricProgression extends Progression {
    public $base;

    // Constructs geometric progression with arbitrary base and start
    function __construct($b=2, $start=1) {
        parent::__construct($start);
        $this->base = $b;
    }

    function advance() {
        $this->current *= $this->base;
    }
}

class FibonacciProgression extends Progression {
    public $prev;

    // Constructs generalized Fibonacci, with first and second values
    function __construct($first=0, $second=1) {
        parent::__construct($first);
        $this->prev = $second - $first; //fictitious value preceding the first
    }

    function advance() {
        
    }
}

?>