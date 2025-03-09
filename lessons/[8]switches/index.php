
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
</head>

<body>

     <form action = 'index.php' method = 'post'>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = 'submit' name = 'direction' value = 'up'><br>
        <input type = 'submit' name = 'direction' value = 'left'>
        <input type = 'submit' name = 'direction' value = 'right'><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = 'submit' name = 'direction' value = 'down'>
 
    </form>

</body>

</html>


<?php
$direction = $_POST['direction'];

switch($direction){
    case 'up':
        echo "going up";
        break;
    case 'left':
        echo "going left";
        break;
    case 'right':
        echo 'going right';
        break;
    case 'down':
        echo 'going down';
        break;
    default:
        break;
}





?> 



