<h1>Function</h1>
<?php
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,100));
?>
<h1>Object</h1>
<?php
$file = new SplFileObject('data.txt');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite(rand(1,100));
?>

<?php
$file2 = new SplFileObject('data2.txt');
var_dump($file2->isFile());
var_dump($file2->isDir());
var_dump($file2->fread($file2->getSize()));
$file2->fwrite(rand(1,100));

// SplFileObject는 Class임.
// new 'Class Name'은 해당 Class에 기반한 Object(instance)를 리턴함.
// 즉 Object는 Class의 Instance임.
// isFile, isDir, fread, getsize는 "Method"라고 함.
// data.txt, data2.txt는 "State"라고 함.
?>