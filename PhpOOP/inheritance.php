<?php 
class First{
    public $id = 10;
    protected $name = 'John';
    
    public function saySomething(){
        echo 'Hey my name is '.$this->name.'<br>';
    }
}

class Second extends First{
    
    public function getName(){
        return $this->name;
    }
    
}

$second = new Second;
//$first = new First;
echo $second -> getName();
//echo $first -> saySomething();
?>