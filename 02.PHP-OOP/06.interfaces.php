<?php

//Interfaces (Refference Types): can have methods and variables, but the methods declared in interface are by default abstract 
interface Logger{
  function save_info();
  function status();
}

//Implementing Logger Interfaces
class FileLogger implements Logger{
  function save_info(){
    var_dump("Saved to File.");
  }
  function status(){
    var_dump("Saved to File Successfully.");
  }
}
//Implementing Logger Interfaces
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