<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//class writejson {
//
//    function writejsonfile($passvalue) {
$str_data = file_get_contents("dataFiles/sample.json");
$data = json_decode($str_data, true);

$obj1 = array("employee" => array("name" => "shadab", "emp_id" => "4180", "designation" => "TAP"));
//   $obj2 = array("employee"=>array("name" => "akshay","emp_id"=>"1234321","designation"=>"TAP"));

array_push($data['emp'], $obj1);
//print_r($data);
echo json_encode(array("emp" => $data));
$strNew = json_encode(array($data), JSON_PRETTY_PRINT);
file_put_contents("dataFiles/sample.json", $strNew);

