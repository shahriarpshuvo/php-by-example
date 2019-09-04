<h2>String</h2>
<code>
<?php 
  $name = "Shahriyar Shuvo"; //Using Double Quation Mark
  $email = 'mr.shahriyarshuvo@gmail.com'; //Using Single Quation Mark
  //String Concatenation using . (dot) operators
  echo 'Name: ' . $name; 
  echo "<br>"; //Printing HTML elements on the Web Pages. (Using Double Quations);
  echo "Email: $email"; //Use double quotes (single quote string doesn't render variables)
  echo "<br>";
  echo strlen($email); //String Length
  echo "<br>";
  echo 'Updated Email: ' . str_replace('g', 'y', $email); //Replacing G with Y in Email
  echo "<br>";
  echo $email[17]; //Character at 18 (Start form 0)
  echo "<br>";
  echo strtoupper($name); //Uppercase
  echo "<br>";
  echo strtolower($name); //Lowercase
  echo "<br>";
  echo "This's how we \"Escaping Characters\" in 'PHP'."; //Escaping
?>
</code>