<?php

interface DisplayInterface{

public function DisplayInterfaceDat(array $data);

}

class Display implements DisplayInterface {
    public function DisplayInterfaceDat(array $data){
        echo "I am doing anything I want here"."".$data['name'];
    }

}

$display =new Display();

$display->DisplayInterfaceDat(["name"=>"Innocent"]);