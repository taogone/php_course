<?php
$subject = 'conding everybody http://opentutorials.org egoing@egoing.com 010-2738-6682';
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
echo "homepage: ".$match[1];
echo "<br/>";
echo "email: ".$match[2];
?>