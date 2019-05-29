<?php
// '\s*': the space might be exist or not.
// '$1' == '\1'
$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
                   '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');
// $startDate = 5/27/1999
echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27');
?>