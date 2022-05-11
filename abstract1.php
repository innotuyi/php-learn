<?php 

abstract class Cars {
    public $brand = 'BMW';
    public function showBrand(){
        return $this->brand;
    }
}

class Bmw extends Cars {
    public function displayData(){

        return $this->showBrand();

    }
}

(new Bmw())->displayData();