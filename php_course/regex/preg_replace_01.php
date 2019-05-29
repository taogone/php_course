<?php
$string = 'April 15, 2003';
// (\w+) === 'April'
// (\d+) === '15'
// (\d+) === '2003'
$pattern = '/(\w+) (\d+), (\d+)/i';
// ${1} === 'April'
// $3 === '2003'
$replacement = '${1}1, $3';  // April1, 2003
echo preg_replace($pattern, $replacement, $string);
?>