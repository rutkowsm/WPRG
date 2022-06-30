
 <?php
   $a = 5;
   $b = 6;

   if(!is_numeric($a) || !is_numeric($b)) {
       exit("Error! Pick numeric values!");
   }
   echo("a = " . $a . "<br>b = " . $b . "<br>Pole powierzchni : " . $a . " * " . $b  . " = " . $a * $b);
 ?>
