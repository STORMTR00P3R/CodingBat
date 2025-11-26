<?php

function front_times(string $str, int $n) {
    if (strlen($str) < 3) {
        return str_repeat($str, $n);
    } else {
        return str_repeat(substr($str, 0, 3), $n);
    }
}

var_dump(front_times("Chocolate", 2));
var_dump(front_times("Chocolate", 3));
var_dump(front_times("Abc", 3));