<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file1 = fopen('dataFiles/data1.csv', 'r');
$file2 = fopen('dataFiles/data2.csv', 'r');
$file3 = fopen('dataFiles/commondata.csv', 'w');

while (!feof($file1)) {
    $line1 = fgetcsv($file1);
    print_r($line1);
    while (!feof($file2)) {
        $line2 =fgetcsv($file2);
       print_r($line2);
        if ($line1[0] == $line2[0])
        {
            echo 'same data'."\n";
            fputcsv($file3, $line1);
            echo 'data write='.$line1[0]."\n";
        }
    }
    $file2 = fopen('dataFiles/data2.csv', 'r');
}
while (!feof($file3)) {
    print_r(fgetcsv($file3));
}
fclose($file3);
fclose($file2);

fclose($file1);


