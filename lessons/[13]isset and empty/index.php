
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>
    <form action = 'index.php' method = 'post'>
        <label>First name: </label>
        <input type = 'text' name = 'first_name'><br>
        <label>Last name: </label>
        <input type = 'text' name = 'last_name'><br>
        <input type = 'submit' name = 'log_in' value = 'log_in'>
    </form>


</body>

</html>


<?php
// isset() returns TRUE if a variable is declared and not null
// empty() returns TRUE if a variable is not declared, false, null, or '' empty string



// $name = 'kaleb';
// // $name = null;
// // echo isset($name);

// // if(isset($name)){
// //     echo "This variable is set";
// // }
// // else{
// //     echo "This variable is NOT set";
// // }

// if(empty($name)){
//     echo "This variable is empty";
// }
// else{
//     echo "This variable is NOT empty";
// }



if (isset($_POST['log_in'])){

    if(empty($_POST['first_name']) || empty($_POST['last_name'])){
        echo 'username and password must not be empty';
    }
    else{
        echo 'authenticating. . . .';
    }
    
}


?> 



