
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
</head>

<body>
    <form action = 'index.php' method = 'post'>
        <label>hours worked</label>
        <input type = 'text' name = 'hours_worked'><br>
        <input type = 'submit' value = 'submit'>
    </form>

</body>

</html>


<?php
//    $age = 100;

//    if($age >= 18){
//         echo "You may enter this site";
//    }
//    else if($age  == 0){
//         echo "You were just born";
//    }
//    else if($age < 5){
//         echo "You are less than 5";
//    }
//    else if($age >= 100){
//         echo "You are too old to enter this site";
//    }
//    else{
//         echo "You may not enter this site";
//    }

// $adult = false;

// if($adult == true){
//     echo "You may enter this site";
// }
// else{
//     echo "You may not enter this site";
// }

$fixed_max_pay = 600;
$hours = $_POST['hours_worked'];
$rate = 15;
$weekly_pay = null;

if($hours <= 40 && $hours > 0){
    $weekly_pay = $hours*$rate;
}
else if($hours <= 0){
    $weekly_pay = 0;
}
else{
    $weekly_pay = $fixed_max_pay;
}

echo "you made {$weekly_pay} this week"


?> 



