<?php

// Like Clojure's slup and spit
// $s = file_get_contents('sample.csv');
// print $s;
// file_put_contents('sample_copied.csv', $s);

// print '<ul>';
// foreach(file('sample.csv') as $line) {
//     $line = trim($line);
//     $row = explode(',', $line);
//     print '<li>' . implode(' | ', $row) . '</li>';
// }
// print '</ul>';

// print '<ul>';
// $fh = fopen('sample.csv', 'rb');
// while((! feof($fh)) && ($line = fgets($fh))) {
//     $line = trim($line);
//     $row = explode(',', $line);
//     print '<li>' . implode(' | ', $row) . '</li>';
// }
// fclose($fh);
// print '</ul>';

print '<ul>';
$fh = fopen('sample.csv', 'rb');
$fh_copy = fopen('sample_copied.csv', 'wb');
while((! feof($fh)) && ($row = fgetcsv($fh))) {
    print '<li>';
    foreach($row as $i => $cell) {
        print $cell;
        if (++$i < count($row)) {
            print " | ";
        }
    }
    print '</li>';

    fputcsv($fh_copy, $row);
}
fclose($fh);
fclose($fh_copy);
print '</ul>';
