<?php

/**
 * @author:Ankita Dudhe
 * Summary.search the perticular element 
 * @global type $element,$high,$low,$mid
 * @global type $lengthofarray,$element_search
 *
 */

//BINARY SEARCH PROGRAM IN PHP
class BinarySearch 
{

    // private $elements;
    public $mid;
    public $high;
    public $low;
    public $n;
    private $lengthOfArray;
    public $element_search;
    public $elements= array();

    /**
     * @method:elementlist()
     * @param:$low,$high,$n pass as argument
     */
    public function elementlist()
    {
       
        echo "Enter array element:";
        fscanf(STDIN,"%d",$n);
        for($i=0;$i<$n;$i++)
        {
            echo "Enter ".$i." element:";
            fscanf(STDIN,"%d",$this->elements[$i]);
        }
    
        $this->low =  $this->elements[0];

        $this->high =  $this->elements[$n-1];
         echo  $this->low." i am low \n"; 
        echo  $this->high." i am high \n"; 
        $this->search($this->enterElement());
    }

   
    /**
     * 
     * @method: function enterElement()
     * @return type $element_search
     */
    public function enterElement()
    {
        echo "Enter the number you want to search ";
        fscanf(STDIN,"%d", $this->element_search);
        
        return  $this->element_search;
        
    }

    /**
     * @method:function search()
     * @param type $element_search pass as argument
     * @return type search element
     */
    public function search($elementsearch)
    {
        $this->element_search = $elementsearch;
      
       // echo $this->mid." mid \n";
        while($this->low <= $this->high)
        {
            $this->mid = (int)(($this->low + $this->high )/2);
            //check the left array
            if($this->element_search < $this->mid)
            {
                $this->high=$this->mid-1;
            }
            //check the right array
            else
            {
                $this->low=$this->mid+1;
            }
             echo $this->element_search. " number found ";
        }
        if($this->element_search==$this->mid)
        {
            echo $this->element_search. "number found ";
        }
        
    }

}

//create object of class Binarysearch
$b1=new BinarySearch;
$b1->elementlist();
// $b1->enterElement();
// $b1-> search($element_search);

?>