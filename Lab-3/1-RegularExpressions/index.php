<?php
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

$str = 'a1b2c3';
$result = preg_replace_callback('/(\d+)/', function($matches) {
    return pow($matches[0], 3);
}, $str);

echo $result;