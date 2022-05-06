<?php  
abstract class Animal  
{  
public $name;  
public $age;  
abstract public function Greet();  
}  
class cat extends Animal  
{  
public function Greet()  
{  
return "Lion!";      
}  
}  
$animal = new cat();  
$animal->name = "Seru";  
$animal->age = 5;  
echo $animal->Greet();  
  