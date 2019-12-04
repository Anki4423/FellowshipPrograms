<?php

/**
 * Summary.search the perticular element 
 *
 * Description.
 *
 *
 * @see Function/method/class relied on
 * @global type $element,$high,$low,$mid
 * @global type $lengthofarray,$element_search
 *
 */

//BINARY SEARCH PROGRAM IN PHP
/**
 * 
 * @param type $var Description.
 * @param type $var Optional. Description. Default.
 * @return type Description.
 */

        
    

class BinarySearch 
{

    private $elements;
    private $mid;
    private $high;
    private $low;
    private $lengthOfArray;
    public $element_search;

    /**
     * 
     * @param type $var Description.
     * @param type $var Optional. Description. Default.
     * @return type Description.
     */
    function constructor()
    {
        $elements[] = array();
        echo "Enter array element";
        fscanf(STDIN,"%d",$elements);
        $n = sizeof($elements);
        $this->sortArray();
        $this->$low = 0;
        $this->$high = $this->$n - 1; 
        $this->search($this->enterSearchElement());
    }

    /**
     * 
     * @function sortArray(): sort element in assending order
     */
    function sortArray(){
        $this->sort($this->$elements);
        for($i=0;$i<$n-1;$i++)
        {
            for($j=$i+1;$j<$n-1;$j++)
            {
                if($this->$elements[$j]<$this->$elements[$i])
                {
                    $temp=$this->$elements[$i];
                    $this->$elements[$i]=$this->$elements[$j];
                    $this->$elements[$j]=$temp;
                }
            }
        }

    }

    /**
     * 
     * @param type $var Description.
     * @param type $var Optional. Description. Default.
     * @return type $element_search
     */
    function enterSearchElement(){
        echo "Enter the number you want to search ";
        fscanf(STDIN,"%d", $element_search);
        return $element_search;
    }

    /**
     * 
     * @param type $element_search Description.
     * @return type Description.
     */
    function search($element_search){
        $this->$element_search = $element_search;
        $this->$mid = ( $this->$low + $this->$high )/2;
        while($this->$low<=$this->$high)
        {
            //check the left array
            if($element_search<$this->$mid)
            {
                $this->$high=$this->$mid-1;
            }
            //check the right array
            else
            {
                $this->$low=$this->$mid+1;
            }
            echo $element_search. " number found ";
        }
        if($element_search==$this->mid)
        {
            echo $element_search. "number found ";
        }
        return ;
    }

}

//create object of class Binarysearch
$b1=new BinarySearch;
$b1->constructor();
$b1->sortArray();
$b1->enterSearchElement();

?>