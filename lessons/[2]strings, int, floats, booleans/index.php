<?php
    //strings
    $name = 'Francisco Kaleb Marquez';
    $food = "pizza";
    $email = "kaleb@gmail.com";

    //numbers
    $age = 27;
    $users = 5;
    $quantity = 7;

    //float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    //booleans
    $employed = true;
    $online = false;
    $for_sale = true;

    // echo $name;
    echo "<br>Hello {$name} <br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";
    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";
    echo "Your gpa is {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "The sales tax rate is {$tax_rate}%<br>";
    echo "Online status: {$online} <br>"; // nothing is displayed
    echo "You have ordered {$quantity} {$food}s<br>.";
    $total = $quantity*$price;
    echo "Your total bill is \${$total}<br>";

?>