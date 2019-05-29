<?php
class Person{
    private $name;
    function sayHi(){
        print("Hi, I am {$this->name}.");
    }
    function setName($_name){
        if(!$_name){
            die('I need name.');
        }
        $this->name = $_name;
    }
    function getName(){
        return $this->name;
    }
}
$taogone = new Person();
// $taogone->name = 'Young Ki Kim';
$taogone->setName('Young Ki Kim');
$taogone->sayHi();
$taogone->getName();
?>