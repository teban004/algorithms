<?php

class SinglyLinkedList {
    
    private $head = null; // head node of the list (or null if empty)
    private $tail = null; // last node of the list (or null if empty)
    private $size = 0; // number of nodes in the list

    public function __construct() {} // constructs an initially empty list

    public function size() { return $this->size; }

    public function isEmpty() { return $this->size == 0; }

    public function first() { // returns (but does not remove) the first element
        if( isEmpty() ) {
            return null;
        }
        return $this->head->getElement();
    }

    public function last() { // returns (but does not remove) the last element
        if( isEmpty() ) {
            return null;
        }
        return $this->tail->getElement();
    }
    
    public function addFirst($e) { // adds element e to the front of the list
        $this->head = new Node($e, $this->head); // create and link a new node
        if( $this->size == 0 ) {
            $this->tail = $this->head;
        }
        $this->size++;
    }

    public function addLast($e) { // adds element e to the end of the list
        $newest = new Node($e, null); // Node will eventually be the tail
        if( isEmpty() ) {
            $this->head = $newest; // special case: previously empty list
        }
        else {
            $this->tail->setNext($newest); // new node after existing tail
        }
        $this->tail = $newest; // new node becomes the tail
        $this->size++;
    }

    public function removeFirst() { // removes and returns the first element
        if( isEmpty() ) {
            return null; // nothing to remove
        }
        $answer = $this->head->getElement();
        $this->head = $this->head->getNext(); // will become null if list had only 1 node
        $this->size--;
        if( $this->size == 0) {
            $this->tail = null; // special case as list is now empty
        }
        return $answer;
    }
}

class Node {
    private $element; // reference to the element stored at this node
    private $next; // reference to the subsequent node in the list

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