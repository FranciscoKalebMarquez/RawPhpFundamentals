
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>
    <!-- <form action = 'index.php' method = 'post'>
        <input type = 'checkbox' name = 'cat' value = 'cat'>cat<br>
        <input type = 'checkbox' name = 'dog' value = 'dog'>dog<br>
        <input type = 'submit' name = 'submit' value = 'submit'>
    </form> -->

    <form action = 'index.php' method = 'post'>
        <input type = 'checkbox' name = 'pets[]' value = 'cat'>cat<br>
        <input type = 'checkbox' name = 'pets[]' value = 'dog'>dog<br>
        <input type = 'checkbox' name = 'pets[]' value = 'spider'>spider<br>
        <input type = 'submit' name = 'submit' value = 'submit'>
    </form>
 

</body>

</html>


<?php
    // if(isset($_POST['submit'])){
    //     if(isset($_POST['cat'])){
    //         echo "so you like cats<br>";
    //     }
    //     if(isset($_POST['dog'])){
    //         echo "so you like dogs<br>";
    //     }
    // }

    

    if(isset($_POST['submit'])){

        $pets = $_POST['pets'];
        
        foreach($pets as $pet){
            echo $pet.'<br>';
        }
    }



?> 



