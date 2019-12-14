<?php
//Address Book program
class AddressBook
{
    //declare the variables and arrays
    public $firstname;
    public $lastname;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $phone_number;
    public $userarray;
    public $account_array;
    //constructor to initialize the variables and arrays
    function __construct(){
        $this->firstname=null;
        $this->lastname=null;
        $this->address=null;
        $this->city=null;
        $this->state=null;
        $this->zip=null;
        $this->phone_number=null;
        $this->userarray=array();
        $this->account_array=array();
    }
    //function to add new contact details from user input
    function add(){
        echo "Enter first name:\n";
        fscanf(STDIN,"%s",$this->firstname);
        echo "Enter last name:\n";
        fscanf(STDIN,"%s",$this->lastname);
        echo "Enter Address:\n";
        fscanf(STDIN,"%s",$this->address);
        echo "Enter City:\n";
        fscanf(STDIN,"%s",$this->city);
        echo "Enter State:\n";
        fscanf(STDIN,"%s",$this->state);
        echo "Enter Zip:\n";
        fscanf(STDIN,"%d",$this->zip);
        echo "Enter phone number:\n";
        fscanf(STDIN,"%d",$this->phone_number);
        //read the json file Address.json
        $jsonfile=file_get_contents("Address.json");
        $this->account_array=json_decode($jsonfile,true);
        //store user entered details in userarray
        $this->userarray=array("Firstname"=>$this->firstname,"Lastname"=>$this->lastname,"Address"=>$this->address,
        "City"=>$this->city,"State"=>$this->state,"Zip"=>$this->zip,"PhoneNumber"=>$this->phone_number);
        //push the entered details into account_array
        array_push($this->account_array,$this->userarray);
    }
    //function to save updated details into json file
    function save()
    {
        $result=file_put_contents("Address.json",json_encode($this->account_array));
        if(!$result){
            echo "Nothing to print in AddressBook\n";
        }
        else{
            echo "AddressBook Updated Successfully\n";
        }
    }
    //function to edit the existing contact details
    function edit(){
        //read Address.json file
        $jsonfile=file_get_contents("Address.json");
        $this->account_array=json_decode($jsonfile,true);
        echo "Enter first name whose details you want to edit:\n";
        fscanf(STDIN,"%s",$first_name);
        echo "Enter last name whose details you want to edit:\n";
        fscanf(STDIN,"%s",$last_name);
        //match name with all the contacts to edit
        for($i=0;$i<count($this->account_array);$i++){
            //if match found
            if($first_name==$this->account_array[$i]["Firstname"] && $last_name==$this->account_array[$i]["Lastname"])
            {
               echo "Which details do you want to edit?\n";
               echo "Enter 1 for firstname\nEnter 2 for lastname\nEnter 3 for Address\nEnter 4 for City\nEnter 5 for State\nEnter 6 for Zip\nEnter 7 for PhoneNumber\n";
               fscanf(STDIN,"%d",$choice);
               switch($choice){
                   case 1:
                   echo "Enter new Firstname:\n";
                   fscanf(STDIN,"%s",$new_firstname);
                   $this->account_array[$i]["Firstname"]=$new_firstname;
                   break;
                   case 2:
                   echo "Enter new Lastname:\n";
                   fscanf(STDIN,"%s",$new_lastname);
                   $this->account_array[$i]["Lastname"]=$new_lastname;
                   break;
                   case 3:
                   echo "Enter new Address:\n";
                   fscanf(STDIN,"%s",$new_address);
                   $this->account_array[$i]["Address"]=$new_address;
                   break;
                   case 4:
                   echo "Enter new City:\n";
                   fscanf(STDIN,"%s",$new_city);
                   $this->account_array[$i]["City"]=$new_city;
                   break;
                   case 5:
                   echo "Enter new State:\n";
                   fscanf(STDIN,"%s",$new_state);
                   $this->account_array[$i]["State"]=$new_state;
                   break;
                   case 6:
                   echo "Enter new Zip:\n";
                   fscanf(STDIN,"%s",$new_zip);
                   $this->account_array[$i]["Zip"]=$new_zip;
                   break;
                   case 7:
                   echo "Enter new PhoneNumber:\n";
                   fscanf(STDIN,"%s",$new_phone_number);
                   $this->account_array[$i]["PhoneNumber"]=$new_phone_number;
               }
              
            }
            //if match does not found
            else{
                echo "Sorry Name does not Match\n";
            }
        }
        
    }
    //function to delete particular contact
    function delete(){
        //read Address.json file
        $jsonfile=file_get_contents("Address.json");
        $this->account_array=json_decode($jsonfile,true);
        echo "Enter first name whose details you want to delete:\n";
        fscanf(STDIN,"%s",$first_name);
        echo "Enter last name whose details you want to delete:\n";
        fscanf(STDIN,"%s",$last_name);
        //match name with all the contacts
        for($i=0;$i<count($this->account_array);$i++){
            //if match found
            if(($first_name==$this->account_array[$i]["Firstname"] )&& ( $last_name==$this->account_array[$i]["Lastname"])){
               //use unset function to remove particular element
               unset($this->account_array[$i]);
               $temp=array_values($this->account_array);
               //use array_values for re-indexing
               $this->account_array=array_values($temp);
            }
            //if match not found
            else{
                echo "Sorry Name does not match\n";
            }
        }
    }
    //function to sort contacts by name in json file
    function sortbyName()
    {
        //read the Address.json file
        $jsonfile=file_get_contents("Address.json");
        $this->account_array=json_decode($jsonfile,true);
        //use asort function to sort array by a value
        asort($this->account_array);
        print_r($this->account_array);
    }
    
       
}
//create an object of class AddressBook
$object=new AddressBook;
$true=true;
//while loop for user enter options
while($true){
    echo "Enter 1 to Add\nEnter 2 to save in AddressBook\nEnter 3 to Edit\nEnter 4 to Delete\nEnter 5 to Sort by Name\nEnter 6 to Exit\n";
    fscanf(STDIN,"%d",$choice);
    switch($choice){
        //to add new contact
        case 1:
        $object->add();
        break;
        //to save update in json file 
        case 2:
        $object->save()
        ;
        break;
        //to edit existing contacts
        case 3:
        $object->edit();
        break;
        //to delete particular contact 
        case 4:
        $object->delete();
        break;
        //to sort contacts by name
        case 5:
        $object->sortbyName();
        break;
      
        //to exit the program
        case 6:
        exit(0);
        echo "\n";
    }
}
?>