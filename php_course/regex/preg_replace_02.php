<?php
$string = 'The quick brown fox jumps over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[2] = 'slow';
$replacements[1] = 'black';
$replacements[0] = 'bear';
// The slow black bear jumps over the lazy dog.
echo preg_replace($patterns, $replacements, $string);
?>