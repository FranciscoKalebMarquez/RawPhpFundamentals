

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
  // setcookie('user_name', 'kaleb', time() + 100000);
  // setcookie('id', '0012', time() + 100000);
  setcookie('user_name', 'kaleb', time() + 100000,'/');
  setcookie('id', '0012', time() + 100000,'/');

  // if(isset($_COOKIE['user_name'])){
  //   echo "{$_COOKIE['user_name']}";
  // }
  foreach($_COOKIE as $key => $value){
    echo "{$key}: {$value}<br>";
  }
?> 



