

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Confirm your reservation</title>
   </head>
   <body>
     <h1>Your reservation details</h1>
     <?php
       if(isset($_POST['submit'])) {
         $arrival = $_POST['arrival'];
         $departure = $_POST['departure'];
         $apartment_type = $_POST['apartment_type'];
         $adults = $_POST['adults'];
         $children = $_POST['children'];
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $payment = $_POST['payment'];

         echo nl2br("Date of arrival: " . $arrival . ";\n\n");
         echo nl2br("Date of departure: " . $departure . ";\n\n");
         echo nl2br("Apartment type: " . $apartment_type . ";\n\n");
         echo nl2br("Number of adult guests: " . $adults . ";\n\n");
         echo nl2br("Number of children under 10 y.o.: " . $children . ";\n\n");
       }

      ?>

      <h1>Your personal details</h1>
      <?php
      echo nl2br("First name: " . $firstname . ";\n\n");
      echo nl2br("Last name: " . $lastname . ";\n\n");
      echo nl2br("Phone: " . $phone . ";\n\n");
      echo nl2br("eMail: " . $email . ";\n\n");
      echo nl2br("Payment type: " . $payment . ";\n\n");
       ?>

      <br><br>
      <h2>Confirm your reservation</h2>
        <br><br>
        <form class="confirm" action="confirmation.php" method="post">
          <input type="submit" name="confirm" value="Confirm">  
        </form>

   </body>
 </html>
