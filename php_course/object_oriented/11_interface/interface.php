<?php
interface ContractInterface
{
    public function promiseMethod(array $param):int;
}
class ConcreateClass implements ContractInterface{
    public function promiseMethod(array $param):int{
        echo '$param[0]: '.$param[0].'<br>';
        echo '$param[1]: '.$param[1].'<br>';
//        echo '$param[1]+$param[2]: '.$param[0]+$param[1].'<br>';
        return 10;
    }
}
$obj = new ConcreateClass();
$obj->promiseMethod([1,2]);
?>