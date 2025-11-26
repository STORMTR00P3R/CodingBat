<?php

function diff21(int $n) {
    if ($n > 21) {
        return 2 * abs($n - 21);
    } else {
        return abs($n - 21);
    }
}

var_dump(diff21(19));
var_dump(diff21(10));
var_dump(diff21(21));