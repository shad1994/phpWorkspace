<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Read the file contents into a string variable,
// and parse the string into a data structure


class class1 {

    private $classobj;

    public function __construct() {
        $this->classobj = new class3("file1");
    }

    function readjsonfile($passkey) {


       return $this->classobj->readjsonfile($passkey);
    }

    function writejsonfile($passvalue) {

       $this->classobj->readjsonfile($passvalue);
    }

}

class class2 {

    private $classobj;

    public function __construct() {
        $this->classobj = new class3("file2");
    }

    function readjsonfile($passkey) {


        return $this->classobj->readjsonfile($passkey);
    }

    function writejsonfile($passvalue) {

       $this->classobj->readjsonfile($passvalue);
    }

}

class class3 {

    private $filename;

    public function __construct($file) {
        $this->filename = $file;
    }

    function readjsonfile($passkey) {

        $str_data = file_get_contents("dataFiles/" . $this->filename . ".json");
        $data = json_decode($str_data, true);
        foreach ($data as $key => $value) {
            if ($passkey == $key) {
                return $value;
            }
        }
    }

    function writejsonfile($passvalue) {
        $str_data = file_get_contents("dataFiles/" .$this->filename. ".json");
        $data = json_decode($str_data, true);

        $data["key"] = $passvalue;
        print_r($data);

        $strNew = json_encode($data);
        file_put_contents("dataFiles/" .$this->filename. ".json", $strNew);
    }

}
