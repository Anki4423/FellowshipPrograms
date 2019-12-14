<?php
//program for stockaccount management
 class StockAccount
 {
     //class variable
    public $amount=1500000;  
    public $balance;
    public $file;
    public $date;
    public $time;
    public $companyShare=array('TCS'=>150,'INFOSYS'=>125,'ACCENTURE'=>160,'TECH M'=>200,'CISCO'=>250);
    public $stockAcc=array();
    //constructor 
    public function __construct($name)
    {
        $this->file=$name.".json"; //create new file
       
     StockAccount::valueOf();

    
    }
   // totalvalue of amount
    function valueOf()
    {
        $this->balance=(double)$this->amount;
        echo$this->balance;
        
    }
  //  function for buy share
    public function buy()
    {
        echo "Enter Share name you want to buy\n";
        fscanf(STDIN,"%s\n",$name);
        echo "Enter how many shares  you want to buy\n";
        fscanf(STDIN,"%d\n",$number);
        $result=(int)($this->companyShare[$name]*$number);
        echo $this->balance;
        if($result<=$this->balance)
        { 
            $this->balance= $this->balance-$this->companyShare[$name]*$number;
            $this->stockAcc[$name]=$number;
           
            $this->date=date("Y/m/d");
            $this->time=date("h:i:sa");
            $array=array('Share_number'=>$number,'Date'=> "of buy $this->date",'Time'=>"at $this->time");
            $this->stockAcc[$name]=$array;
            
        }
        else 
        {
            echo "you have insufficient balance\n";
        }
        
        
        StockAccount::save($this->file);
        StockAccount::printReport();

    }
    //function for sell
    public function sell()
    {
        
        echo "Enter Share name you want to sell\n";
        fscanf(STDIN,"%s\n",$name);
        echo "Enter how many shares  you want to Selln";
        fscanf(STDIN,"%d\n",$number);
        $temp=$this->stockAcc[$name];
        $total=$temp['Share_number'];
        
        if($total>=$number)
        {
            $this->balance=$this->balance+$this->companyShare[$name]*$number;
        
            $number=$total-($number);

        $this->date=date("Y:m:d");
        $this->time=date("h:i:sa");
        $array=array('Share_number'=>$number,'Date'=> "of sell $this->date",'Time'=>"at $this->time");
        $this->stockAcc[$name]=$array;
        StockAccount::save($this->file);
            
        }
        else
        {
            echo "you have insufficient number of share or invalid numbers are entered";
        }
        
        StockAccount::printReport();

    }
    public function save($file)
    {
    
    $json=json_encode( $this->stockAcc);
    file_put_contents($file,$json);
    }
    public function printReport()
    {
        $json=json_encode( $this->stockAcc);
        echo $json;

    }

}
//company share
$companyShare=array('TCS'=>150,'INFOSYS'=>125,'ACCENTURE'=>160,'TECH M'=>200,'CISCO'=>250);
echo "enter your name\n";
fscanf(STDIN,"%s\n",$name);
$json=json_encode($companyShare);
echo $json;
$object=new StockAccount($name);//create object
$true=true;
while($true)
    {
        echo "\n1.buy\n2.sell\n3.exit\n";
        echo "enter your choice\n";
        fscanf(STDIN,"%s\n",$choice);
    
        switch($choice)
        {
            case 1:$object->buy();
                    break;
            case 2:$object->sell();
                    break;
            case 3:$true=false;
                    break;
        }
    }
    valueOf();
?>