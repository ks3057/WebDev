<?php 

//class Animal
abstract class Animal{
    public $name;
    public $color;
    
    public function describe(){
        return $this->name.' is '.$this->color.'<br>';
    }
    
    abstract public function makeSound();
}

//class Duck extends Animal, implements parent abstract function
class Duck extends Animal{
    public function describe(){
        return parent::describe();
    }
    
    public function makeSound(){
        return 'QUACK!<br>';
    }
}

//class Dog extends Animal, implements parent abstract function
class Dog extends Animal{
    public function describe(){
        return parent::describe();
    }
    
    public function makeSound(){
        return 'BARK!<br>';
    }
}

$animal = new Duck();
$animal-> name = 'Scrooge McDuck';
$animal-> color = 'white';
echo $animal->describe();
echo $animal->makeSound();

$animal = new Dog();
$animal-> name = 'Scooby Doo';
$animal-> color = 'brown with black spots';
echo $animal->describe();
echo $animal->makeSound();

?>