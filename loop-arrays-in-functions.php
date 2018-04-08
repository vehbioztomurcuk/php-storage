<?php



// how we can take an array of values and loop through them in the function
// task: multiple Hello from single Function.

function hello($arr) {
  if(is_array($arr)){
    foreach ($arr as $name){
      echo "Hello $name, welcome. " . "\n";
     } 
  } else {
    echo "Hello stranger.";
   }
  
}



$names = array('ismet',
              'vehbi',
               'asli');


hello($names);


?>