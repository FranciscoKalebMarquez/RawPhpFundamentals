
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>

     <!-- <form action = 'index.php' method = 'post'>
        <label>age: </label><input type = 'text' name= 'age'><br>
    </form> -->

</body>

</html>


<?php

$names = array('Richard', 'jennifer', 'Arnold', 'Sunny');



//echo "{$names[0]}";
array_push($names, 'mark');
array_pop($names);
array_shift($names);
$names = array_reverse($names);


$name_list = '';

foreach($names as $name){
    $name_list = $name_list . $name . '<br>';
}

echo "{$name_list}";


?> 



