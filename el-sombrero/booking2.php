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
        <p>Number of guests: <input type="text" name="number_guests" placeholder="Enter a number"></p>

        <!-- sumbit button -->
        <button type="submit" name="submit">Go!</button>
      </form>

    </div> <!-- content-container -->


    <!-- include footer -->
    <?php include('footer.php'); ?>

  </body>
</html>
