<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>El Sombrero Restaurant - Bookings</title>
  </head>
  <body>
    <!-- include banner  -->
    <?php include('banner.php'); ?>

    <!-- main content -->
    <div class="booking-container">
      <h1>Booking details</h1>
      <!-- form to collect details about booking -->
      <form class="" action="save-booking.php" method="post">
        <!-- client name -->
        <p>Name: <input type="text" name="name" placeholder="Enter name" required></p>
        <!-- client phone number -->
        <p>Phone: <input type="text" name="phone" placeholder="Enter phone number" required> </p>
        <!-- client email  -->
        <p>Email: <input type="email" name="email" placeholder="Enter email address" required></p>
        <!-- date of booking restricted to 6 months from current month -->
        <p>Date: <input type="date" name="date" min="2020-06-01" max="2020-12-31" required> </p>
        <!-- time of booking -->
        <p>Time: <input type="time" name="time" required></p>
        <!-- number of guests - max 10 -->
        <p>Number of Guests:
          <select name="number_guests" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select> </p>
          <p>Additional info:</p>
          <p><textarea name="extra_info" rows="8" cols="80" placeholder="Add any additional info about your booking here e.g. need a highchair"></textarea> </p>
          <button type="submit" name="submit">Book now!</button>
          <button type="reset" name="reset">Reset</button>
      </form>

    </div> <!-- booking-container -->


    <!-- include footer -->
    <?php include('footer.php'); ?>

  </body>
</html>
