<?php


include 'list.php';

$order = array();
$status = 'all';
$field = '';
$offReason = '';




// first task: show complete incomplete or all
if($status === 'all') {
 $order = array_keys($list);
} else { 
    foreach ($list as $key => $item) {
        if ($item['complete'] == $status) {
         $order[] = $key;
        }
      
      }
}





// first task: show complete incomplete or all



//second task: sort by field


// ---> u left here. 05.38 <---


if($field) {
    $sort = array();
    foreach($order as $id) {
     $sort[$id] = $list[$id][$field];
    }
   asort($sort);
   $order = array_keys($sort);
}


//second task: sort by field











if($offReason) {
 echo "<h2>" . "To do app is not available. The reason is: " . "</h2>" . "<h1>" . "$offReason" . "</h2>";
 } else {
    echo "<table>";
//visual html
echo "<tr>";
echo "<th> Title  </th>";
echo "<th> Priority </th>";
echo "<th> Due </th>";
echo "<th> Complete</th>";
echo "</tr>";
//visual html
    foreach ($order as $id) {
        echo "<tr>";
        echo "<td>" . $list[$id]['title']  . "</td>";
        echo "<td>" . $list[$id]['priority']  . "</td>";
        echo "<td>" . $list[$id]['due']  . "</td>";
        
        if ($list[$id]['complete'] == true) {
          echo "<td>" . "YES" . "</td>";
        } else {
          echo "<td>" . "NO" . "</td>";
  
        }
  
        echo "</tr>";
  
  }

}
    














echo "</table>";


?>