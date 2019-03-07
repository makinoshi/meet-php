<?php

function inc(int $i): int {
    return $i++;
}

$x = 11;
$y = 'foo';

print inc($x);
print inc($y);
