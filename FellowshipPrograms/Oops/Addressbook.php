<?php
class Address
{
    public $FirstName;
    public $LastName;
    public $AccountDetails=array();
    public $City;
    public $State;
    public $zip;
    public $MobileNo;
    const LEAVING_MESSAGE="Your data successfully update";
    //take user input 
    public function newAccount()
    {
        echo "Enter your Last Name\n";
        fscanf(STDIN,"%s\n",$this->LastName);
        echo "Enter your First Name\n";
        fscanf(STDIN,"%s\n",$this->FirstName);
        echo "Enter your city\n";
        fscanf(STDIN,"%s\n",$this->City);
        echo "Enter your State\n";
        fscanf(STDIN,"%s\n",$this->State);
        echo "Enter your Zip number\n";
        fscanf(STDIN,"%d\n",$this->zip);
        echo "Enter your Mobile Number\n";
        fscanf(STDIN,"%d\n",$this->MobileNo);
         $this->creatAccount();
    }
    //create new account and store in address book
    public function creatAccount()
    {
        $json=json_decode(file_get_contents("Address.json"),true);//convert json object into array
        $this->AccountDetails=$json;//store json array
        $Name=$this->LastName." ".$this->FirstName;
        $this->AccountDetails[$Name]= array('FirstName'=>$this->FirstName,'LastName'=>$this->LastName,'city'=>$this->City,'State'=>$this->State,'Zip'=>$this->zip,'MobileNo'=>$this->MobileNo); 
        
        echo Address::LEAVING_MESSAGE;
        $this->save();
    }
    //Save Address book in json fromat
    public function save()
    {
    $json=json_encode( $this->AccountDetails);//convert into json object
    file_put_contents("Address.json",$json);//create file
    }
    //edit data according to user
    public function edit()
    {
        echo "Enter your Last Name\n";
        fscanf(STDIN,"%s\n",$this->LastName);
        echo "Enter your First Name\n";
        fscanf(STDIN,"%s\n",$this->FirstName);
        $Name=$this->LastName." ".$this->FirstName;
        $json=json_decode(file_get_contents("Address.json"),true);//convert json object into array
        $this->AccountDetails=$json;//store json array
        //if name found 
        if($this->search($Name))
        {
            $array=$this->AccountDetails[$Name];//store data of $Name in $array
            echo "\n1.Last name\n2.First name\n3.City\n4.zip\n5.State\n6.mobile no\n";
            echo "enter your choice\n";
            fscanf(STDIN,"%s\n",$choice);
            switch($choice)
            {
                case 1: echo "Enter your Last Name\n";
                        fscanf(STDIN,"%s\n",$this->LastName);
                        $array['LastName']=$this->LastName;
                        unset($this->AccountDetails[$Name]);//delet array
                        $Name=$this->LastName." ".$this->FirstName;
                        break;
                case 2: echo "Enter your First Name\n";
                        fscanf(STDIN,"%s\n",$this->FirstName);
                        $array['FirstName']=$this->FirstName;
                        unset($this->AccountDetails[$Name]);//delet array
                        $Name=$this->LastName." ".$this->FirstName;
                        break;
                case 3: echo "Enter your city\n";
                        fscanf(STDIN,"%s\n",$this->City);
                        $array['city']=$this->City;                      
                        break;
                case 4: echo "Enter your Zip number\n";
                        fscanf(STDIN,"%d\n",$this->zip);
                        $array['Zip']=$this->zip;                      
                        break;
                case 5: echo "Enter your State\n";
                        fscanf(STDIN,"%s\n",$this->State);
                        $array['State']=$this->State;
                        break;
                case 6: echo "Enter your Mobile Number\n";
                        fscanf(STDIN,"%d\n",$this->MobileNo);
                        $array['MobileNo']=$this->MobileNo;
                        break;
            }
            $this->AccountDetails[$Name]=$array;//store change data at respective position
            $this->save();
        }
        else
        {
            echo "name you type is not present in Addreesbook";
        }

    }
    //Search data by fullname
    public function search($name)
    {
        foreach($this->AccountDetails as $fullname=>$details)
        {
            if($fullname==$name)
                return true;
        }
        return false;
    }
    //Delete Data that you want delete
    public function delete()
    {
        echo "Enter Last Name\n";
        fscanf(STDIN,"%s\n",$this->LastName);
        echo "Enter First Name\n";
        fscanf(STDIN,"%s\n",$this->FirstName);
        $Name=$this->LastName." ".$this->FirstName;
        $json=json_decode(file_get_contents("Address.json"),true);//convert json object into array
        $this->AccountDetails=$json;//store json array
        if($this->search($Name))
        {
            unset($this->AccountDetails[$Name]);
            $this->save();
        }
        else
        {
            echo "The given data not present in Address Book";
        }
        echo"\n" .Address::LEAVING_MESSAGE;
    }

     
}
$object=new Address;
$true=true;
while($true)
    {
        echo "\n1.creat new\n2.Edit\n3.Delete\n4.Exit\n";
        echo "enter your choice\n";
        fscanf(STDIN,"%s\n",$choice);
    
        switch($choice)
        {
            case 1:$object->newAccount();
                    break;
            case 2:$object->edit();
                    break;
            case 3:$object->delete();
                    break;
            
            case 4:$true=false;
                    break;
            default:echo "Invalid choice\n";
                    break;
        }
    }

?>