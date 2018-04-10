<?php
echo "<h1>" . "<center>";



function all_up($a, $b, $c) {
  echo "<br />";
  $arr = array(
    $a,
    $b,
    $c,
    $a + $b + $c,
    $a + $b - $c,
    $a * $b - $c,
    $a + $b - $c,
    
  );
foreach($arr as $space) {
  echo "<br />";

}

  return $arr;
}

$resultOne =
all_up(21, 10, 8);


print_r($resultOne[0]);
echo "<br />";
print_r($resultOne[1]);
echo "<br />";
print_r($resultOne[2]);
echo "<br />";
print_r($resultOne[3]);
echo "<br />";
print_r($resultOne[4]);
echo "<br />";
print_r($resultOne[5]);
echo "<br />";
print_r($resultOne[6]);






echo "</h1>" . "</center>";
?>