<?php
// get hostname from URL
// "?" means 0 or 1.
// [^/] means all characters until meet "/". 
$url = "http://www.php.net/index.html";
preg_match('@^(?:http://)?([^/]+)@i', $url, $match);
print_r($match);
echo "<br/>";
echo "==============================<br/>";
$host = $match[1];
echo "Host Name is: ".$host; // www.php.net

// get last two segments of hostname
preg_match('/[^.]+\.[^.]+$/', $host, $match);
echo "<br/>";
echo "==============================<br/>";
echo "Domain Name is: {$match[0]}\n";  // php.net
?>