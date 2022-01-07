<?php

class SinglyLinkedList {
    
    private $head = null; // head node of the list (or null if empty)
    private $tail = null; // last node of the list (or null if empty)
    private $size = 0; // number of nodes in the list

    public function __construct() {} // constructs an initially empty list

    function size() { return $this->size; }

    function isEmpty() { return $this->size == 0; }

    function first() { // returns (but does not remove) the first element
        if( isEmpty() )
            return null;
            return $this->head->getElement();
    }

    
}

class Node {
    private $element;
    private $next;

    public function __construct($e, $n) {
        $this->element = $e;
        $this->next = $n;
    }

    public function getElement() {
        return $this->element;
    }

    public function getNext() {
        return $this->next;
    }

}
?>