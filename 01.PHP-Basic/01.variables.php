<h2>Variables</h2>
<?php 
  //single line comment

  /** Multi-line Comments:
   * Variable names start with $ (dollar sign). After that it 
   * cann't start with numbers. Uses camelCase sytax-style.
   * Constant Variables are all CAPITAL words. and can't be 
   * reassigned.
   */

  //Printing Value to Screen
  echo "Hello World!";

  define('CONSTANT_VARIABLES', 'ashiq'); //Constant Variables 
  const AGE = 13; //Constant Variables The PHP7 Way
  $variableName = "shuvo"; //Regular Variables
  $variableName = "hamim"; //Changes The Variable Name
  // define('CONSTANT_VARIABLES', 'rakib'); cann't be reassigned.

  
  echo CONSTANT_VARIABLES;
  echo AGE;
?>