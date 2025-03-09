
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>
    <form action = 'index.php' method = 'post'>
        <input type = 'radio' name = 'payment_method' value = 'Gcash'>Gcash<br>
        <input type = 'radio' name = 'payment_method' value = 'Maya'>Maya<br>
        <input type = 'radio' name = 'payment_method' value = 'Smart'>Smart<br>
        <input type = 'submit' name = 'submit' value = 'submit'>
    </form>
 

</body>

</html>


<?php

    if(isset($_POST['submit'])){

        if(!empty($_POST['payment_method'])){

            switch($_POST['payment_method']){
                case 'Gcash':
                    echo "pay thru Gcash";
                    break;
                case 'Maya':
                    echo "pay thru Maya";
                    break;
                case 'Smart':
                    echo "pay thru Smart";
                    break;
            }

        }
        else{
            echo 'Please select a Payment method';
        }
        
    }


?> 



