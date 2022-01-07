<?php

require_once(__DIR__ . "/../classes/SinglyLinkedList.php");

print("Singly Linked List:");
$myList = new SinglyLinkedList();
$myList->addFirst(1);
while( ! $myList->isEmpty() ) {
    print($myList->removeFirst() . "\n");
}

?>