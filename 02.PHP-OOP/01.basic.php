<?php
class Person{
  public $name; //public variables
  public $age;
  private $profession = ''; // private variable

  //Constructor Method
  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  //Setter for Private Variables
  function setProfession($profession){
    $this->profession = $profession; 
  }
  //Getter for Private Variables
  function getProfession(){
    return $this->profession === '' ?  "Not Set" : $this->profession;
  }

  //Class Method
  function getDetails(){
    return "Name:  {$this->name}, Age: {$this->age}, Profession: {$this->profession}";
  }

}

//Object Initialization and Contructor Value Given
$employee = new Person('Shuvo', 13);
//Setting Value for Private Variables
$employee->setProfession('Web Developer');
echo $employee->getProfession(); 
echo "<br>";
echo $employee->getDetails();
echo "<br>";
//Instatiate another Object
$employee2 = new Person('Hansika', 13);
echo $employee2->getProfession();
