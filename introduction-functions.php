<?php

function hello() {
   echo 'Hello Vehbi' . "<br />\n";
}


hello();


$current_user = 'vehbi';

function is_vehbi() {
  global $current_user;
  if($current_user == 'vehbi') {
    echo 'Yes it is Vehbi.';
  } else { 
    echo 'Error: You have no permission';
  }
} 

is_vehbi();


?>