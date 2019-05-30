<?php
class ParentClass{
    function a(){
        echo 'Parent function a()<br>';
    }
    final function b(){
        echo 'Parent function b()<br>';
    }
}
class ChildClass extends ParentClass{
    function a(){
        parent::a();
        echo 'Child function a()<br>';
    }
    // function b(){
    //     echo 'Child function b()';
    // }
}
$obj = new ChildClass();
$obj->a();
?>