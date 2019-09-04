<?php
//Abstract Class
abstract class Shape{
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

  //Abstract Method: declared, but contains no implementation
  //Must be Implemented on Subclass
  abstract protected function area();

}

//Extending Abstract Class
class Square extends Shape{

  function __construct($base){
    $this->base = $base;
  }

  //Must be Implemented Method;
  function area(){
    return pow($this->base, 2);
  }
}

class Triangle extends Shape{
  //Must be Implemented Method;
  function area(){
    return 0.5 * $this->base * $this->height;
  }
}

$s = new Square(5);
echo $s->area(). "<br>";
$s->setBase(5);
echo $s->getBase(). "<br>";
echo $s->getHeight(). "<br>";
$t = new Triangle(5, 10);
echo $t->area(). "<br>";