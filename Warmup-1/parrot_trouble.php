<?php

function parrot_trouble(bool $talking, int $hour) {
    if($talking && ($hour < 7 || $hour > 20)) {
        return true;
    } else {
        return false;
    }
}

var_dump(parrot_trouble(true, 6));
var_dump(parrot_trouble(true, 7));
var_dump(parrot_trouble(false, 6));