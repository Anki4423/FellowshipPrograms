<?php 
/**
 * @author:Ankita Dudhe
 * @description:display linkedlist
 * @globaltype:$data,$next,$size
 */
class  Node
{
    public $data;
    public $next;
   
    public $size;
/**
 * @method:function Node() 
 * @param:$data pass as argument 
 */
    public function Node($data)
    {
    $this->data=$data;
    $this->next=null;
            
     }
}  
/**
 * @globaltype:$size variable
 * 
 */
class Linkedlist
{
 public static $head;
 public $size=0;
 // Function to insert at begin new node
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
    //function to insert at last position
    function insertlast($data)
    {
        $lastnode=new Node($data);

        if(self::$head==null)
		{
			self::$head=$lastnode;
			$this->size++;
		}
		else
		{
			 $temp=self::$head;
			while($temp->next!=null)
			{
				$temp=$temp->next;
			}
			$temp->next=$lastnode;
			$this->size++;
        }
    }
    // function to search element in linkedlist
   function search($data)
    {
     $node1=new Node($data);
     if($node1==self::$head)
     {
         echo"nothing for search";

     }
     else
     {
         while($node1!=null)
         {
             echo "element found ";
            return $node1;
         }
         $node1=$node1->next;
     }
     return null;

    }
    //function to display the list 
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
     function remove_last()
     {
         $temp=new Node();
         $temp1=new Node();
         $temp=self::$head;
         $temp1=$temp->next;
         if(self::$head==null)
         {
       echo"nothing to delele";
         }
         else
         {
             while($temp1->next!=null)
             {
                 $temp1=null;
               $temp->next=null;
             }
         }
     }
 }
//create object of class
// $l=new unorderedlist;
// $l->insertfirst(10);
// $l->insertfirst(20);
// $l->insertfirst(30);
// $l->insertfirst(40);
// $l->insertlast(88);
// $l->display();
// $l->search(20);



?>
