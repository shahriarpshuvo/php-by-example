<h2>Multidimensional Array</h2>
<code>
  <?php 
    //Array within a array
    $users = array(
      [
        'name'  => 'Shuvo',
        'age'   => 13,
        'email' => 'mr.spshuvo@gmail.com'
      ],
      [
        'name'  => 'Rahim',
        'age'   => 15,
        'email' => 'mr.skrahim@gmail.com'
      ],
      [
        'name'  => 'Jaber',
        'age'   => 17,
        'email' => 'mr.jaber@gmail.com'
      ],
    );

    print_r($users[0]);
    echo($users[1]['email']);
  ?>
</code>