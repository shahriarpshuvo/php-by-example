<?php
class Profit{
  private $amount;
  //Constant Variables
  public const TAX = 0.9;

  function __construct($amount){
    $this->amount = $amount;
  }

  function set_amount($amount){$this->amount = $amount;}
  function get_amount(){return $this->amount;}

  //Static Method
  public static function min_withdraw(){
    var_dump('minimum: 500Tk');
  }

  public function net_profit(){
    return $this->amount * static::TAX;
  }
}

echo Profit::TAX; //Static Variable Access without Instantiation
echo "<br>";
echo Profit::min_withdraw(); //Static Method Access without Instantiation
echo "<br>";
$p = new Profit(5000);
echo $p->net_profit();
echo "<br>";