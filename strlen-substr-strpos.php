<?php





$name = 'Ahmet Vehbi Oztomurcuk';


$lenght = strlen($name);

echo $lenght . "<br />\n";


$i = strpos($name, 'Vehbi');

$order = substr($name, $i);

echo $order;





?>



