

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body class = 'main_container'>
  
  <form action = 'index.php' method = 'post'>
    <label>user name: </label>
    <input type = 'text' name = 'user_name'><br>
    <label>password: </label>
    <input type = 'text' name = 'password'><br>
    <input type = 'submit' name = 'submit' value = 'submit'>
  </form>



</body>
</html>


<?php

if(isset($_POST['submit'])){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo password_hash($_POST['password'],PASSWORD_DEFAULT);
  }
}
  



?> 



