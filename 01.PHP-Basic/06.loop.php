<h2>Loop</h2>
<code>
  <?php
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

  // While Loop
  echo "While Loop: <br>";
  $i = 0;
  while ($i < count($users)) {
    print_r($users[$i]);
    echo "<br>";
    $i++;
  }
  echo "<hr>";
  // For loop
  echo "For Loop: <br>";
  for ($i = 0; $i < count($users); $i++) {
    print_r($users[$i]);
    echo "<br>";
  }
  echo "<hr>";
  // For Each loop
  echo "For Each Loop: <br>";
  foreach ($users as $user) {
    print_r($user);
    echo "<br>";
  }

  ?>
</code>

<h3>User Information:</h3>
<table border="1">
  <thead>
    <td>Name</td>
    <td>Age</td>
    <td>Email</td>
  </thead>
  <tbody>
    <?php foreach ($users as $user) : ?>
      <tr>
        <td><?= $user['name']; ?></td>
        <td><?= $user['age']; ?></td>
        <td><?= $user['email']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>