<h2>Arrays</h2>
<code>
  <?php
    // Indexed Array
    $people = ['Shuvo', 'Rahim', 'Karim', 'Ashiq'];
    print_r($people); echo "<br>"; //Pritty Printed
    $age = array(50, 30, 33, 42); //another way
    print_r ($age); echo "<br>";
    echo $people[2]; echo "<br>";
    print_r(array_merge($people, $age)); echo "<br>"; //Merging Arrays Togather
    $people[3] = 'Judu';
    print_r($people); echo "<br>";
    array_push($people, 'Duke'); //Adding Items to the Array
    print_r($people); echo "<br>";
    print_r(count($people)); echo "<br>"; //Counting Array Elements


    // Associatative Array
    $person = [
      'name'  => 'Shahriyar Shuvo',
      'email' => 'mr.spshuvo@gmail.com',
      'age'   => 24,
    ];
    echo $person['name']; echo "<br>";
    $person['age'] = 25;
    print_r($person);
  ?>
</code>