<?php
class Shape{
  protected $base;
  protected $height;

  function __construct($base, $height){
    $this->base = $base;
    $this->height = $height;
  }

  function setBase($base){$this->base = $base;}
  function getBase(){return $this->base;}
  function setHeight($height){$this->height = $height;}
  function getHeight(){return $this->height;}

}

//Extending Base/Parent Class(Shape) - Inheriting all Properties
class Square extends Shape{
  //Overriding Class Constructor
  function __construct($base){
    $this->base = $base;
    $this->height = $base;
  }
  //Extentending Functionalites
  function area(){
    return pow($this->base, 2);
  }
}

//Extending Base/Parent Class(Shape) - Inheriting all Properties
class Triangle extends Shape{
  function area(){
    return 0.5 * $this->base * $this->height;
  }
}
//Initiate Square Object
$s = new Square(5); 
echo $s->area(). "<br>";
$s->setBase(5);
echo $s->getBase(). "<br>";
echo $s->getHeight(). "<br>";
//Initiate Triangle  Object
$t = new Triangle(5, 10);
echo $t->area(). "<br>";