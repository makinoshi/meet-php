<?php

print 'I would like a bowl of soup.';
print '</br>';
print '"I would like a bowl of soup.", he said';

print '</br></br>';

print <<<BLOCK
This is
in a
here document.
BLOCK;

print '</br></br>';

print '1' . '+' . '1' . '=' . '2';

print '</br></br>';

print strlen(trim(' hello, world! '));

print '</br></br>';

print 'hello' == 'hello';

print '</br></br>';

print strcasecmp('hello', 'HELLO');

print '</br></br>';

$foo = 'bar';
$bar = 100;
print "$foo is $bar.";
print " ";
print "{$foo} is $bar";
