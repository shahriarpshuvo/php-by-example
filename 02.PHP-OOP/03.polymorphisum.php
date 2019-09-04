<?php
//Namespace define package name of the file
namespace App\Poly;
//Person Class
class Person{
  protected $name;

  function __construct ($name){
    $this->name= $name;
  }
}


class Stuff{
  protected $member = [];
  //Taking Person As Arguments
  function __construct (Person $person){
    $this->member[]= $person; //Adding Person to the Stuff Members
  }

  //Adding Person to the Stuff Members
  function add (Person $person){
    $this->member[] = $person;
  }

  //Get All The Stuff Members
  function getMembers(){
    return $this->member;
  }
}


class Business{
  protected $stuff;
  //Business need Stuff
  function __construct (Stuff $stuff){
    $this->stuff = $stuff;
  }

  //Business Can Also Hire a Person
  function hire(Person $person){
   $this->stuff->add($person);
  }

}

$p1 = new Person("Shuvo");
$p2 = new Person("Alamin");
$p3 = new Person('Rakib');

$s = new Stuff($p1);
$s->add($p2);
$b = new Business($s);
$b->hire($p3);
print_r($s->getMembers());