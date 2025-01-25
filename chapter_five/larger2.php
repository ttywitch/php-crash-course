<?php
function which_is_larger (int|float $x, int|float $y): int|float|NULL {
    if ($x > $y) {
        return $x;
    } else if ($x < $y) {
        return $y;
    } else {
        return NULL;
    }
}