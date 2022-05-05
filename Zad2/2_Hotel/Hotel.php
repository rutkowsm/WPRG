<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotel Podlasie</title>
  </head>
  <body>
    <form class="rezerwacja" action="reservation.php" method="post">
      <h1>Book your apartment now</h1>
      <label for="arrival">Date of arrival</label>
      <input type="date" name="arrival" value="arrival" min=timestamp>
      <br><br>
      <label for="departure">Date of departure</label>
      <input type="date" name="departure" value="departure">
      <br><br>
      <label for="apartment_type">Apartment type</label>
      <select class="apartment_type" name="apartment_type">
        <option disabled selected value="">Select your apartment...</option>
        <option value="Standard">Standard</option>
        <option value="Premium">Premium</option>
        <option value="Family">Family</option>
        <option value="Double">Double size</option>
        <option value="VIP">VIP</option>
      </select>
      <br><br>
      <label for="adults">Adults (max. 4 persons)</label>
      <input type="number" name="adults" value="adults" min=1 max=4>
      <br><br>
      <label for="children">Children under 10 y.o. (max. 4 children)</label>
      <input type="number" name="children" value="children" min=0 max=4>
      <br><br>
      <h3>Enter your personal details</h3>
      <label for="firstname">First name</label>
      <input type="text" name="firstname" placeholder="Enter your first name">
      <br><br>
      <label for="lastname">Last name</label>
      <input type="text" name="lastname" placeholder="Enter your last name">
      <br><br>
      <label for="phone">Phone</label>
      <input type="phone" name="phone" placeholder="000000000">
      <br><br>
      <label for="email">eMail</label>
      <input type="email" name="email" placeholder="email@email.com">
      <br><br>
      <h3>Payment details</h3>
      <label for="payment">Payment type</label>
      <select class="payment" name="payment">
        <option disabled selected value="">Select preferred payment type...</option>
        <option value="Bank transfer">Bank transfer</option>
        <option value="Credit card">Credit card</option>
        <option value="Cash">Cash</option>
      </select>
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
