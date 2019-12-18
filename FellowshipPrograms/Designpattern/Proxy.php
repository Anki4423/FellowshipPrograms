<?php 
//proxy design pattern example
interface Image
{
    public function display();
}
//class Realimage implement Image
class Realimage implements Image
{
 private $filename;
 //constructor 
 public function __construct($filename)
 {
     $this->filename=$filename;
     $this->loaddisk($this->filename);
 }
  public function display()
  {
      echo "display in ".$this->filename."\n";
  } 
  //load the file
  public function loaddisk($filename)
  {
    echo "loading file ".$filename."\n";  
  }
}
//class Proxyimage implements Image interface
class Proxyimage implements Image
{
   private $filename;
   public $realimage;
   public function __construct($filename)
   {
    $this->filename=$filename;
   }
   public function display()
   {
       if($this->realimage==null)
       {
           $this->realimage=new realimage($this->filename);
       }
       $this->realimage->display();
  
   }
}
//object  of class Proxyimage  
$object=new Proxyimage('file.txt');
//calling method display
$object->display();
$object->display();
?>