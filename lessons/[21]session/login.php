<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body class = 'main_container'>
  

  <form action = 'login.php' method = 'post'>

    <label>user name: </label>
    <input type = 'text' name = 'user_name'><br>
    <label>password: </label>
    <input type = 'text' name = 'password'><br>
    <input type = 'submit' name = 'submit' value = 'submit'>

  </form>
  


</body>
</html>


<?php
$user_name = 'Kaleb';
$password = '1234';

if(isset($_SESSION['login'])){

  if($_SESSION['login'] == true){

    header('Location: dashboard.php');
  }
  
}

else{
    
  if(isset($_POST['submit'])){

    if($_POST['user_name'] == $user_name && $_POST['password'] == $password){
      //set session cookie
      $_SESSION['login'] = true;
      $_SESSION['user_id'] = '01333036';
      //echo 'successfully logged in';
      header('Location: dashboard.php');
      
    }

    else{
      echo 'wrong credentials';
    }
  }
}


?> 



