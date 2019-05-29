<?php
$subject = 'coding everybody http://opentutorials.org taogone@gmail.com 010-2738-6682';
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
var_dump($match);
echo "===========================<br/>";
echo "homepage: ".$match[1];
echo "<br/>";
echo "email: ".$match[2];
?>