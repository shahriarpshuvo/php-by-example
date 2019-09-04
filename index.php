<?php 
  $urls = [
    '01.variables.php',
    '02.string.php',
    '03.numbers.php',
    '04.arrays.php',
    '05.m_arrays.php',
    '06.loop.php',
    '07.booleans.php',
    '08.conditionals.php',
    '09.functions.php',
    '01.basic.php',
    '02.inheritance.php',
    '03.polymorphisum.php',
    '04.abstract.php',
    '05.static.php',
    '06.interfaces.php',
    '07.abstract-interfaces.php',
  ] 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learn PHP</title>
</head>
<body>
  <h2>Learning PHP by Examples</h2>
  <h3>Navigation Menu</h3>
  <h4>PHP Basics:</h4>
  <ul>
    <?php for($i = 0; $i < 9; $i++){?>
    <li><a href="01.PHP-Basic/<?=$urls[$i]?>"><?=$urls[$i]?></a></li>
    <?php } ?>
  </ul>

  <h4>PHP OOP:</h4>
  <ul>
    <?php for($i = 9; $i < 16; $i++){?>
    <li><a href="02.PHP-OOP<?=$urls[$i]?>"><?=$urls[$i]?></a></li>
    <?php } ?>
  </ul>

  <h4>PHP PDO:</h4>
  <ul>
    <li><a href="03.PHP-PDO/pdo.php">PDO.php</a></li>
  </ul>
</body>
</html>