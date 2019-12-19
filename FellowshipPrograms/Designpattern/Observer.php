<?php
//Observer Design Pattern
//interface observer 
interface Observer
{
    // function update
    public function update(Subject $subject_in);
}
//interface subject 
interface Subject
{
    //public functions register,unregister,notify
    public function register(Observer $object_in);
    public function unregister(Observer $object_in);
    public function notify();
}
//function writeln to echo
function writeln($write_ln)
{
    echo $write_ln."\n";
}
//Observer class 
class PatternObserver implements Observer
{
    public function __construct()
    {

    }
    //function update
    public function update(Subject $subject_in)
    {
        writeln('IN PATTERN OBSERVER-NEW PATTERN ALERT');
        writeln('new favourite patterns:'.$subject_in->getFavorites());
        writeln('IN PATTERN OBSERVER-PATTERN GOSSIP ALERT OVER');
    }
}
//Subject class
class PatternSubject implements Subject
{
    private $favorites=NULL;
    //array to store objects of Observer class
    private $observers=array();
    function __construct()
    {

    }
    //function register to add objects in array
    function register(Observer $observer_in)
    {
        array_push($this->observers,$observer_in);
    }
    //function unregister to remove objects from array
    function unregister(Observer $observer_in)
    {
        foreach($this->observers as $key=>$value)
        {
            if($value==$observer_in)
            {
                unset($this->observers[$key]);
                // array_pop($this->observers);
            }
        }
    }
    function notify()
    {
        foreach($this->observers as $value)
        {
            $value->update($this);
        }
    }
    function updateFavorites($newFavorites)
    {
        $this->favorites=$newFavorites;
        $this->notify();
    }
    function getFavorites()
    {
        return $this->favorites;
    }
}

writeln('BEGIN OBSERVER PATTERN');
writeln('');
//create objects of Observer class and pass it into functions of class Subject
$pattern=new PatternSubject;
$object=new PatternObserver;
$object2=new PatternObserver;
$object3=new PatternObserver;
//pass objects of observer class into register and unregister function to add or remove
$pattern->register($object);
$pattern->updateFavorites('abstract factory,decorator,visitor');
$pattern->register($object2);
$pattern->updateFavorites('abstract factory,observer,decorator');
$pattern->unregister($object2);
$pattern->register($object3);
$pattern->updateFavorites('abstract factory,observer,paisley');
//end the pattern 
writeln('');
writeln('END OBSERVER PATTERN');
?>