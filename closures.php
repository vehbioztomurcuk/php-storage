<?php
echo "<h1>" . "<center>";



$name = 'Vehbi';


$vehbi = function() use ($name) {
  echo "Hello, $name welcome.";
};

echo $vehbi();




echo "</h1>" . "</center>";
?>