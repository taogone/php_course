<?php
$str = "foobar: 2008";

// Back Reference, ?P<name> ==> match[name]
// Back Reference, ?P<digit> ==> match[digit]
preg_match('/(?P<name>\w+): (?<digit>\d)/', $str, $match);

print_r($match);

?>