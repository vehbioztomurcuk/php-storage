<?php
echo "<h1> <center>";




$v = array('iron man', 'spider-man', 'batman', 'super-man');

$k = array('tony stark ', 'peter parker ', 'bruce wayne ', 'clark kent ');


$marvel = array_combine($k, $v);


function vehbi($value, $key) {
  echo "$value's name is $key" . "<br />\n";
}

$i = array_walk($marvel, 'vehbi');

echo $i;





echo "</h1> </center>";
?>