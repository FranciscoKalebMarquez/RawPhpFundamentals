
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>
    <form action = 'index.php' method = 'post'>
        <label>first name:  </label><input type = 'text' name = 'first_name'><br>
        <input type = 'submit' name = 'submit' value = 'capitalize'>
        <input type = 'submit' name = 'submit' value = 'lower'><br>
        <label>Phone number:  </label><input type = 'text' name = 'phone'><br>
        <input type = 'submit' name = 'submit' value = 'clean'><br>
    </form>



</body>

</html>


<?php

if(isset($_POST['submit']) && $_POST['submit'] == 'capitalize'){

    if(!is_numeric($_POST['first_name'])){

        echo strtoupper($_POST['first_name']);
        echo ", length is ";
        echo strlen($_POST['first_name']);

    }

}

if(isset($_POST['submit']) && $_POST['submit'] == 'lower'){

    if(!is_numeric($_POST['first_name'])){

        echo strtolower($_POST['first_name']);

    }

}

if(isset($_POST['submit']) && $_POST['submit'] == 'clean'){

        echo str_replace('-','',$_POST['phone']);

}

//explode
//implode



?> 



