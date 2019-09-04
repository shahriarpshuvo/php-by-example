<h2>Conditionals</h2>
<code>
  <?php 
    $age = true;
    if ($age > 18 &&  $age <60) {
      echo "You are between 18 to 60";
    } elseif($age < 18 || $age > 60){
      echo "Your are below 18 or above 60";
    } else {
      echo "Gotcha. You are a Bot!";
    }
    echo "<br>";
    $nums = array(1, 22, 3, 18, 5, 12, 16, 7, 24, 9, 8, 11, 14, 13, 15, 17, 19, 4, 21, 23, 6, 25, 16, 27, 26, 29, 30);

    foreach($nums as $num){
      if($num%2==0){
        continue;
      }
      if($num===27){
        break;
      }
      echo $num.',';
    }
  ?>
</code>