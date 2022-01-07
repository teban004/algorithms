<?php

class SinglyLinkedList {
    
    // nested Node class
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

    }
}

?>