<?php 
namespace demo\controller;
echo 11;
class Demo
{
    
    static public  $name = "100";
    public $age = "200";
    public $sex = "200";
    
    public function __construct(){
        echo self::name."<br>";
        echo $this->age."<br>";
        echo $this->sex."<br>";
    }
    
    
    public function test(){
        return self::name;
    }
    
}

$new  = new Demo();
$new->test();



