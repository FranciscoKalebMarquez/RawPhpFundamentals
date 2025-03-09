
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
</head>

<body>
    <!-- <form action = 'index.php' method = 'post'>
        <label>username:</label><br>
        <input type = 'text' name = 'user_name'><br>
        <label>password:</label><br>
        <input type = 'password' name = 'password'><br>
        <button type = 'submit'>log in</button>
    </form> -->

    <form action = 'index.php' method = 'post'>
        <label>quantity</label><br>
        <input type = 'text' name = 'quantity'>
        <input type = 'submit' value = 'total'>

    </form>

 
</body>

</html>
<?php
    // echo "{$_POST['user_name']}<br>";
    // echo "{$_POST['password']}<br>";

    $item = 'pizza';
    $price = 6;
    $quantity = $_POST['quantity'];
    $total = null;

    $total = $quantity*$price;
    echo "You have ordered {$quantity} x {$item}/s<br>";
    echo "Your total is \${$total}";
?> 



