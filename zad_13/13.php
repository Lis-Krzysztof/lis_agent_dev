<?php
class Meeseeks
{
    protected $purpose = "Make Summer popular at school.\n";
    private $number = '1 ';
    public $words = "I\'m Mr Meeseeks, look at me!\n";

    function wimp() //stays for "What is my purpose"
    {

        //echo $this->words; Works
        //echo $this->number; Works
        echo $this->purpose;
    }
    function __construct(){
      echo "\nPuff! ".$this->words;
    }
}


$obj = new Meeseeks();
echo $obj->purpose;  //Fatal Error
echo $obj->number;  //Fatal Error
echo $obj->words;  //Works
$obj->wimp(); // Shows Public, Protected and Private

class Meeseks2 extends Meeseeks
{

    public $words = "Can Do...\n";
    protected $purpose = "Make Beth feel more complete women.\n";
    function wimp()
    {
        //echo $this->words; Works
        //echo $this->number; Fatal Error
        echo $this->purpose; //Works
    }
}

$obj2 = new Meeseks2();
//echo $obj2->words;  Works
//echo $obj2->number;
//echo $obj2->purpose;
$obj2->wimp(); // Shows Public2, Protected2, Undefined

?>
