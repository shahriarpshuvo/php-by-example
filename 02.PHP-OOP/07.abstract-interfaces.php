<?php
namespace App\AbstractInterface;
//Interfaces
interface Logger{
  function save_info();
  function status();
}
//Abstract Class Implements Interfaces
abstract class AbstractLogger implements Logger{
  protected $log_info;
  abstract function state_info();
  abstract function save_info();
  abstract function status();
}
//Interitted Abstract Class
class FileLogger extends AbstractLogger{
  protected $log_info = 'File Log Info';
  function state_info(){
    var_dump("File State Info.");
  } 
  function save_info(){
    var_dump("Saved to File.");
  }
  function status(){
    var_dump("Saved to File Successfully.");
  }
}

//Class Implements Interfaces
class DatabaseLogger implements Logger{
  function save_info(){
    var_dump("Saved to Database.");
  }
  function status(){
    var_dump("Saved to Database Successfully.");
  }
}

function execute(Logger $logger){
  $logger->save_info();
  $logger->status();
}

$f_logger = new FileLogger();
$d_logger = new DatabaseLogger();

execute($f_logger);
execute($d_logger); 