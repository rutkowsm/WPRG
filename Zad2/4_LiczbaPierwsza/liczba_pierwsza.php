<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title> Czy podana liczba jest liczbą pierwszą </title>
</head>
<body>
<form method="post">
  <label for="liczba">Insert a number:</label>
  <input type="number" name="number" min=1>
  <input type="submit" name="submit" value="submit">
</form>
<br>

<?php


if($_POST) {
  $num = $_POST['number'];
  $iter = 0;

  function is_prime($num){
    // Zmienna globalna $iter dostępna poza funkcją
    global $iter;
    for($i=2; $i<$num; $i++){
      $iter++;
      if($num % $i == 0) {
        return 0;
      }
    }
    return 1;
  }
  if(is_prime($num) == 0) {
    echo nl2br($num . " is not a prime number!");
  }
  else {
    echo nl2br($num . " is a prime number!");
  }
  echo nl2br("\nIterations performed: " . $iter);
}
?>


</body>
</html>
