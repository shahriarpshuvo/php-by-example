<h2>Numbers</h2>
<code>
  <?php

  $radius = 4; //Integer
  $pi = 3.14; //Float

  /** Basic Operations:
   * Addition (+)
   * Substraction (-)
   * Division (/)
   * Multiplication (*)
   * Exponents (**)
   * Modulus (%)
   */

  $area = $pi * ($radius ** 2);
  // Following P.E.M.D.A.S Rules
  echo ($area);

  echo "<br>";

  /** Increment and Decrement Operators:
   * ++ : increments by 1
   * -- : decrements by 1 
   */

  $age = 49;
  $age++;
  echo $age; //50
  echo "<br>";
  echo (--$age); //49 
  echo "<br>";

  /** Short Hand Operators:
   * +=, -=, *=, /=, **=, %=
   */
  $num = 10;
  $num += 5; echo $num; echo "<br>"; // 15
  $num -= 5; echo $num; echo "<br>"; // 10
  $num /= 5; echo $num; echo "<br>"; // 2
  $num *= 5; echo $num; echo "<br>"; // 10
  $num **= 2; echo $num; echo "<br>"; // 100
  $num %= 3; echo $num; echo "<br>"; // 1

  //Number Functions
  echo floor($pi); echo "<br>"; // Drop the fraction
  echo ceil($pi); echo "<br>"; // Round up to closest number
  ?>
</code>