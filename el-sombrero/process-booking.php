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
      <!-- connect to database -->
      <?php include('connect.php'); ?>

      <!-- get info from the form out of POST array -->
      <?php
        // store client's name
        $client_name = $_POST['client_name'];

        // store number of guests
        $number_guests = $_POST['number_guests'];


        /* debugging - check that values from post array
         correctly stored in variables */
         echo "<p>$client_name</p>";
         echo "<p>$number_guests</p>";

       ?>

       <!-- create and run INSERT query -->
      <?php
        // create string to contain SQL INSERT statement
        $booking_sql = "INSERT INTO booking (client_name, number_guests) VALUES ('$client_name', $number_guests)";

        // run INSERT query - to add booking data
        //mysqli_query($db_connect, $booking_sql);
        if(mysqli_query($db_connect, $booking_sql)){
            echo "Records inserted successfully.";
        } else{
          echo "ERROR: not able to execute $booking_sql. " . mysqli_error($db_connect);
        }

       ?>

    </div> <!-- content-container -->


    <!-- include footer -->
    <?php include('footer.php'); ?>

  </body>
</html>
