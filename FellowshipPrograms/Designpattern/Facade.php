<?php 
//Facade Design Pattern Example
//A Google class to share on url
class Google
{
    public function share($url)
    {
  var_dump("share on google".$url);
    }
}
// A Reddiator class to post on Reddiator
class Reddiator
{
    function reddit($url,$title)
    {
        var_dump("reddit".$url. "title".$title);
    } 
}
//A CodeTwit class to tweet on twitter
class Codetwit
{
    function twit($status,$url)
    {
        var_dump("twited".$status."from".$url);
    } 
}
//class Facade to simplify class and method
class Facade
{
    //hold the referance to all classes
   private $twitter;
   private $google;
   private $reddit;
    // object are injected to constructor
    function __construct($twitobj,$googleobj,$redditobj)
    {
        $this->twitter=$twitobj;
        $this->google=$googleobj;
        $this->reddit=$redditobj;
    }
    //single method to share post social network 
    function show($status,$url,$title)
    {
      $this->twitter->twit($status,$url);
      $this->google->share($url);
      $this->reddit->reddit($url,$title);

    }

}
//create object of social network
      $twitobj=new Codetwit;
      $googleobj=new Google;
      $redditobj=new Reddiator;
      //pass object to the Facade class object
      $facadeobj=new Facade($twitobj,$googleobj,$redditobj);

//call only one method to share on all social networks
$facadeobj->show('https://myBlog.com/post-Awesome','My Greatest Post',"Read my all the Posts here");
?>