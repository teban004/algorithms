<?php

class SinglyLinkedList {
    
    // nested Node class
    static class Node {
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
}

?>