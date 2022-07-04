<?php
ini_set('display_errors',1);

$file = file_get_contents("https://api.github.com/repos/adixmr/leetcode");

print_r($file);

?>