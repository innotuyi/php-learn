<?php
class A {   
    const CONST_INT = 10;
   
    public function getSelf(){
        return self::CONST_INT;
    }
   
    public function getThis(){
        return $this::CONST_INT;
    }
}

$one = new A();
$one->getSelf();
var_dump($one);
?>


