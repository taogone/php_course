<?php
class MyFileObject{
  function __construct($fname){
    $this->filename = $fname;
  }
  function isFile(){
    return is_file($this->filename);
  }
}
$file = new MyFileObject('data.txt');
// $file->filename = 'data.txt';
var_dump($file->isFile());
var_dump($file->filename);