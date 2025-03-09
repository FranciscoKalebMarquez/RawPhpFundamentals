
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
</head>

<body>
    <!-- <form action = 'index.php' method = 'post'>
        <label>temperature</label>
        <input type = 'text' name = 'temperature'><br>
        <input type = 'submit' value = 'submit'>
    </form> -->

     <form action = 'index.php' method = 'post'>
        <label>type a number</label>
        <input type = 'text' name = 'number'><br>
        <input type = 'submit' value = 'submit'>
    </form>

</body>

</html>


<?php
// $temperature = $_POST['temperature'];

// if($temperature < 25 && $temperature > 15){
//     echo "The weather is cold today";
// }

// else if ($temperature <= 15){
//     echo "its freezing cold";
// }

$number = $_POST['number'];

if($number < 0){
    echo "number is negative";
}
else if($number == 0){
    echo "number is 0";
}
else if($number >= 1 && $number <=5){
    echo "number is between 1 & 5";
}
else if($number >= 6 && $number <= 10){
    echo "number is between 6 and 10";
}
else{
    echo "number is greater than 10";
}


?> 



