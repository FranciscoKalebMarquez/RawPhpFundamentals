
<!DOCTYPE html>

<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

</head>

<body>
    <form action = 'index.php' method = 'post'>
        <input type = 'text' name = 'f'>type Fahrenheit<br>
        <input type = 'submit' name = 'get_celcius' value = 'submit'>
    </form>

    <form action = 'index.php' method = 'post'>
        <input type = 'text' name = 'c'>type Celcius<br>
        <input type = 'submit' name = 'get_fahrenheit' value = 'submit'>
    </form>


    <form action = 'index.php' method = 'post'>
        <input type = 'text' name = 'a'><br>
        <input type = 'text' name = 'b'><br>
        <input type = 'submit' name = 'get_sum' value = 'submit'>
    </form>

</body>

</html>


<?php



function getCelcius($f){
    $c = ($f - 32)*(5/9);
    return $c;
}

if(isset($_POST['get_celcius'])){

    if(is_numeric($_POST['f'])){

        echo getCelcius($_POST['f']);

    }

    else{

        echo "must be numeric";

    }
    
}




function getFahrenheit($c){
    $f = (9/5)*$c+32;
    return $f;
}

if(isset($_POST['get_fahrenheit'])){

    if(is_numeric($_POST['c'])){

        echo getFahrenheit($_POST['c']);

    }

    else{

        echo "must be numeric";

    }
    
}



class BasicArithmetic{

    function add($a, $b){
        return $a+$b;
    }

}

if(isset($_POST['get_sum'])){

    if(!empty($_POST['a']) && !empty($_POST['b'])){

        if(is_numeric($_POST['a']) && is_numeric($_POST['b'])){

            $obj = new BasicArithmetic();
            $result = $obj->add($_POST['a'],$_POST['b'] );
            echo $result;

        }
        
        else{
            echo "must be a number";
        }
        
    }
    else{
        echo "must not be empty";
    }

    
}


?> 



