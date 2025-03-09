
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>



</body>

</html>


<?php

$info = array(
    'first_name'=>'Kaleb',
    'last_name'=>'marquez',
    'age'=>32
);


$keys = array_keys($info);
foreach($keys as $key){
    echo "{$key}<br>";
}

$values = array_values($info);
foreach($values as $value){
    echo "{$value}<br>";
}


foreach($info as $key=>$value){
    echo "{$key} : {$value}<br>";
}

echo "{$info['first_name']}<br>";

?> 



