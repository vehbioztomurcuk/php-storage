<?php
echo "<h1> <center>";

/*

iron man is tony stark
spider-man is peter parker
batman is bruce wayne
super-man is clark kent

*/

$marvel = array('tony stark' => 'iron man',
                'peter parker' => 'spider-man',
                'bruce wayne' => 'batman',
                 'clark kent' => 'super-man');


    function vehbi($name, $hero){
  echo "$name is $hero" . "<br />\n";
    }

$i = array_walk($marvel, 'vehbi');




echo "</h1> </center>";
?>