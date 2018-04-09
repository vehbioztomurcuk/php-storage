<?php

include 'list.php';


function fuseTitle($arr) {
   if(is_array($arr)) {
     foreach($arr as $klex){
     echo "<h2>" . "Task title appears to be this: " . $klex['title'] . "<br />\n" . "</h2>";
     
     }
   }

}
function fusePriority($arr) {
  if(is_array($arr)) {
    foreach($arr as $klex){
    echo "<h2>" . "Task priority appears to be this: " . $klex['priority'] . "<br />\n" . "</h2>";
    }
  }

}
function fuseDue($arr) {
  if(is_array($arr)) {
    foreach($arr as $klex){
    echo "<h2>" . "Task due appears to be this: " . $klex['due'] . "<br />\n" . "</h2>";
    }
  }

}



// Note: added 'nodue' key to list array.

function fuseAll($arr) { 
  if(is_array($arr)) {
    foreach($arr as $klex) {
      if ($klex['due'] == null) {
        foreach ($klex as $key => $value) {
          $klex['due'] = $klex['nodue'];
        }
      }
        echo "<h2>" . "All task information appears to be this: " 
      . "<u> Title </u> : " . $klex['title'] 
      . "<u> Priority </u> : " . $klex['priority'] 
      . "<u> Due : </u>"  . $klex['due']  
      . "<br />\n" . "</h2>";
  
    }
  }
}



fuseAll($list);






?>

