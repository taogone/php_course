<?php
class Animal{
    function run(){
        print('running...<br>');
    }
    function breathe(){
        print('breathing...<br>');
    }
}

class Human extends Animal{
    function think(){
        print('thinking...<br>');
    }
    function talk(){
        print('talking...<br>');
    }
}
$ani = new Animal();
$ani->run();
$ani->breathe();
echo ('Human----------------<br>');
$human = new Human();
$human->run();
$human->breathe();
$human->think();
$human->talk();
?>