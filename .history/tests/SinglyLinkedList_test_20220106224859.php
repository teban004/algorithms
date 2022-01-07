<?php

require_once(__DIR__ . "/../classes/SinglyLinkedList.php");

print("Singly Linked List:\n");
$myList = new SinglyLinkedList();
$myList->addFirst(1);
$myList->addFirst(5);
$myList->addFirst(7);
$myList->addFirst(4);
while( ! $myList->isEmpty() ) {
    print($myList->removeFirst() . "\n");
}

?>