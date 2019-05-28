<?php
$file = 'readme.txt';
$newfile = 'example.txt.back';

if(!copy($file, $newfile)){
    echo "failed to copy $file...\n";
}
?>