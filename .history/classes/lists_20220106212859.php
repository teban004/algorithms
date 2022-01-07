<?php

class SinglyLinkedList {
    
    private $head;
    private $tail;

    
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