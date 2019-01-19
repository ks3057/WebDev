<?php 
class User{
    public $username;
    public static $minPassLength = 4;
    
    public static function validatePass($password){
        if(strlen($password) >= self::$minPassLength){
            return true;
        }
        return false;
    }
}

$password = 'pass';

if(User::validatePass($password)){
    echo 'Password is valid';
} else {
    echo 'Password is not valid';
}

echo '<br>'.User::$minPassLength;

?>