<?php
class Person{
  private $name;
  function sayHi(){
    print("Hi, I'm {$this->name}.");
  }
  function setName($_name){
    if(empty($_name)){
      die('I need name');
    }
    $this->name = $_name;
  }
  function getName(){
    return $this->name;
  }
}
$egoing = new Person();
$egoing->setName('egoing');
$egoing->sayHi();
print($egoing->getName());
?>