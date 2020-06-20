<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>El Sombrero Restaurant - Homepage</title>
  </head>
  <body>
    <!-- include banner  -->
    <?php include('banner.php'); ?>

    <!-- main content -->
    <div class="homepage-container">
      <!-- form to accept booking data -->
      <form class="" action="process-booking.php" method="post">
        <!-- user enters name -->
        <p>Name: <input type="text" name="client_name" placeholder="Enter name"></p>


        <!-- user enters number of guests -->
        <p>Number of guests:
          <select class="" name="number_guests">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </p>

        <!-- user enters time of booking -->
        <p>Time:
          <select class="" name="hour">
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
            <option value="11">11</option>
            <option value="12">12</option>
          </select>

          <select class="" name="minutes">
            <option value="00">00</option>
            <option value="15">15</option>
            <option value="30">30</option>
            <option value="45">45</option>
          </select>

          <select class="" name="am-pm">
            <option value="0">AM</option>
            <option value="1">PM</option>
          </select>
        </p>


        <!-- sumbit button -->
        <button type="submit" name="submit">Go!</button>
      </form>

    </div> <!-- content-container -->


    <!-- include footer -->
    <?php include('footer.php'); ?>

  </body>
</html>
