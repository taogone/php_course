<?php
class ParentClass{
    public $_public = '<h1>public</h1>';
    protected $_protected = '<h1>protected</h1>';
    private $_private = '<h1>private</h1>';

}
class ChildClass extends ParentClass{
    function callPublic(){
        echo $this->_public;
    }
    function callPrivate(){
        echo $this->_private;
    }
    function callProtected(){
        echo $this->_protected;
    }
}
$obj = new ChildClass();
echo '[from Object 1]'.$obj->_public;
// echo '[from Object 2]'.$obj->_private;
// echo '[from Object 3]'.$obj->_protected;
$obj->callPublic();
// $obj->callPrivate();
$obj->callProtected();
?>