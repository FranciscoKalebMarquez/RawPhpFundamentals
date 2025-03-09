
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>
  <form action = 'index.php' method = 'post'>
    <label>user name: </label><input type = 'text' name = 'user_name'><br><br>
    <label>age: </label><input type = 'text' name = 'age'><br><br>
    <label>email: </label><input type = 'text' name = 'email'><br><br>
    <input type = 'submit' name = 'submit' value = 'submit'>

  </form>


</body>

</html>
 

<?php
  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    //$user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT);
    $age = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

    echo "{$user_name} <br> {$age} <br> {$email}";
  }

?> 



