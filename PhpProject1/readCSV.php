<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file = fopen("dataFiles/data1.csv","r");

while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);


