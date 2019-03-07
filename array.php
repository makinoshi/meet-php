<?php

$color = array('blue' => 'like',
               'yellow' => 'dislike',
               'red' => 'like');
$num = [0 => 'foo', 1 => 'bar', 2 => 'baz'];

print 'color: ' . count($color) . ', num: ' . count($num);

print '</br>';

foreach ($color as $k => $v) {
    print "key is $k, value is $v";
    print '</br>';
}

print '</br>';

foreach ($num as $k => $v) {
    print "key is $k, value is $v";
    print '</br>';
}

print '</br>';

if (array_key_exists('blue', $color)) {
    print "blue is included";
} else {
    print "blue is not included";
}

print '</br>';

if (in_array('baz?', $num)) {
    print 'baz is included';
} else {
    print 'baz is not included';
}

print '</br>';

print implode(', ', $color);
print '</br>';
print implode(', ', [1, 2, 3]);

print '</br>';
