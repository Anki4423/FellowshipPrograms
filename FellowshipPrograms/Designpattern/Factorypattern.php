<?php
// working of Abstract Factory Pattern 

abstract class Computer
{
     // Creating  abstract methods
    abstract public function comput();
   
}
//class for pc
class pc extends Computer
{
    //override 
    public function comput()
    {
        echo "I am pc\n";
    }

}
//class for laptop
class Laptop extends Computer
{
    //override 
    public function comput()
    {
        echo "I am Laptop\n";
    }

}
//class for server
class server extends Computer
{
    //override 
    public function comput()
    {
        echo "I am Server\n";
    }

}
class Computerfactory
{
    //intantiation of class
    public static function  create($computertype)
    {
        if($computertype==null)
        return null;
        else if($computertype=="pc")
        return new pc;
        else if($computertype=="laptop")
        return new Laptop;
        else if($computertype=="server")
        return new server;
    return null;

    }
}

$object=Computerfactory::create("pc");//create instance
$object->comput();//call method using instance
$object=Computerfactory::create("laptop");//create instance
$object->comput();//call method using instance
$object=Computerfactory::create("server");//create instance
$object->comput();//call method using instance


?>
