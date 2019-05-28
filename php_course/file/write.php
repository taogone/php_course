<?php
$file = 'readme.txt';
echo '1st reading ===========================<br/>';
echo file_get_contents($file).'<br/>';
echo '<br/>';
file_put_contents($file, 'Today is Tuesday. And the future is in mist.\n');
echo '2nd reading ===========================<br/>';
echo file_get_contents($file).'<br/>';
file_put_contents($file, 'Today is Tuesday. And the future is in mist.\n');
echo '3rd reading ===========================<br/>';
echo file_get_contents($file).'<br/>';
//echo lstat($file);
?>