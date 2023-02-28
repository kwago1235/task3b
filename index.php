<?php 
class Person{

    private $name, $age;
    protected $occupation;

    public function __construct($name, $age, $occupation){
        
        $this->name=$name;
        $this->age=$age;
        $this->occupation=$occupation;
    }

    public function job ()
    {
        return "hi I am {$this->name}, I am {$this->age} currently working as $this->occupation"; 

    }

}

class Salesman extends Person{

    public function __construct($name,$age){
        parent::__construct($name,$age,"Salesman");


    }

    public function job(){

        return parent::job() . " I sell  Books.</br></br>";
    }

}
$salesman = new Salesman(name: `jade`, age: 26);

echo $salesman->job() . "<br/>";

?>

