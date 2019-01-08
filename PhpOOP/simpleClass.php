<?php
class User{
    
    private $id;
    
    private $username;
    
    private $email;
    
    private $password;
    
    public function __construct($username, $password){
        echo 'Constructor called.<br>';
        $this -> username = $username;
        $this -> password = $password;
    }
    
    public function __destruct(){
        echo 'Destructor called.<br>';
    }
    
    public function register(){
        echo 'User registered';
    }
    
    public function login(){
        $this -> auth();    
    }
    
    public function auth(){
        echo($this -> username.' logged in.<br>');    
    }
    
}

class Post{
    private $name;
    
    public function __set($name, $value){
        echo '<br>Setting '.$name.' as '.$value;
        $this -> name = $value;
    }
    
    public function __get($name){
        echo '<br>Getting '.$name.' as '.$this->name;
    }
    
    public function __isset($name){
        echo '<br>Is '.$name.' set?' ;
        return isset($this->name);
    }
}

$post = new Post;
$post -> name = 'Kiru';
echo $post->name;
var_dump(isset($post->name));

//$user = new User('kirtana', 1234);
//$user -> login();

//echo $user -> username.'<br>';
?>