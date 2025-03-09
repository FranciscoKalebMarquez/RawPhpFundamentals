

<?php
//Arithmetic
   $x = 10;
   $y = 2;
   $z = null;

   //addition
   $z = $x + $y;
   echo "{$z}<br>";

   //subtraction
   $z = $x - $y;
   echo "{$z} <br>";

   //multiplication
   $z = $x*$y;
   echo "{$z} <br>";

   //power 10^2
   $z = $x**$y;
   echo "{$z} <br>";

    // modulo - gets remainder
   $z = $x%$y;
   echo"{$z}<br>";   

   // Increment or decrement

   $counter = 0;

   $counter = $counter + 1;
   echo"{$counter}<br>";
   $counter++;
   echo"{$counter}<br>";
   $counter+=2;
   echo"{$counter}<br>";


   //Operator Precedence

   $total = 1 + 3 * 4 / 6**2;
    echo "{$total}<br>";

?>



