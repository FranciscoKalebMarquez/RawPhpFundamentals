<?php
session_start();

if(isset($_SESSION['login'])){

  if($_SESSION['login'] == true){

    header('Location: dashboard.php');
  }
  
}
else{
  header('Location: login.php');
}

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
  



</body>
</html>


<?php



?> 



