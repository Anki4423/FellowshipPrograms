<?php 
class  Node
{
    public $data;
    public $next;
   
    public $size;
    public function Node($data)
    {
    $this->data=$data;
    $this->next=null;
            
     }
}  
class unorderedlist
{
 public static $head;
 public $size=0;
 // Function to insert a new node
     function insertfirst($data)
    {
        $newnode=new Node($data);// Create a new node with given data 
        if(self::$head==null)
        {
         self::$head=$newnode;
            $this->size++;
        }
        else
        {
         
         $newnode->next=self::$head;
         self::$head=$newnode;
        
         $this->size++;
        }
    }
    function display()
    {
        if(self::$head==null)
        {
            echo"nothing to display";
        }
        else
        {
         $temp= self::$head;
   while($temp->next!=null)
   {
       echo $temp->data."-->";
       $temp=$temp->next;
   }
      echo $temp->data;

   }
}
}

$l=new unorderedlist;
$l->insertfirst(10);
$l->insertfirst(20);
$l->insertfirst(30);
$l->insertfirst(40);
$l->display();

?>
