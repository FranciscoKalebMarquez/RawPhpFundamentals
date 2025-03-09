
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>

     <form action = 'index.php' method = 'post'>

        <label>first name: </label><input type = 'text' name = 'first_name'><br>
        <label>last name: </label><input type = 'text' name = 'last_name'><br>
        <label>age: </label><input type = 'text' name= 'age'><br>
        <label>gender: </label><input type = 'text' name = 'gender'><br>
        <br><input type = 'submit' value = 'submit'>
    </form>

</body>

</html>


<?php

for($i = 0; $i < 10; $i++){
    echo "{$i}<br>";
}

foreach ($_POST as $key => $value) {
        echo "Field name: " . htmlspecialchars($key) . "<br>";
        echo "Value: " . htmlspecialchars($value) . "<br><br>";
    }




?> 



