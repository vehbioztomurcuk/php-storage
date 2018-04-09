<?php
echo "<h1>" . "<center>";



function all_up($a, $b) {
  $arr = array(
   $a,
   $b,
   $a * $b 
  );

  return $arr;
}

$generate = all_up(10, 8);


print_r($generate[2]);






echo "</h1>" . "</center>";
?>