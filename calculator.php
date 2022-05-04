<?php
  $result = "";
  class calculator {

    var $n1;
    var $n2;

    function operation($operator) {
      switch ($operator) {
        case 'add':
          return $this->n1 + $this->n2;
          break;
        case 'subtract':
          return $this->n1 - $this->n2;
          break;
        case 'multiply':
          return $this->n1 * $this->n2;
          break;
        case 'divide':
          return $this->n1 / $this->n2;
          break;
        default:
          return "Unknown";
      }
    }

    function calculate($n1, $n2, $op){
      $this->n1 = $n1;
      $this->n2 = $n2;
      return $this->operation($op);
    }

  }

  $calc = new calculator();

  if(isset($_POST['submit'])){
    $result = $calc->calculate($_POST['number1'], $_POST['number2'], $_POST['operator']);
  }

 ?>

 <!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form method="post">
  <p>
    Number 1
    <input name="number1" type="number"/>

    <br>
    <p>
      <select  name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>

      </select>

    </p>

    <br>
    Number 2
    <input name="number2" type="number" />
    <br><br>
    <input type="submit" name="submit" value="CALCULATE!">
    <br><br>RESULT: <?php echo $result ?>


  </p>


</body>
</html>
