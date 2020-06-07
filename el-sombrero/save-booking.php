<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- connect to database -->
    <?php include('connect.php'); ?>

    <!-- retrieve info about booking and add to database -->
    <?php
    // retrieve info from POST array
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      $number_guests = $_POST['number_guests'];
      $extra_info = $_POST['extra_info'];

      // debugging - echo out info from POST array
      echo "<p>$name</p>";
      echo "<p>$phone</p>";
      echo "<p>$email</p>";
      echo "<p>$date</p>";
      echo "<p>$time</p>";
      echo "<p>$number_guests</p>";
      echo "<p>$extra_info</p>";

      // create query to insert booking data into database
      // Attempt insert query execution
      $booking_sql = "INSERT INTO booking (client_name, booking_date, number_guests) VALUES ('$name', '$date',  $number_guests)";
      if(mysqli_query($db_connect, $booking_sql)){
          echo "Records inserted successfully.";
      } else{
          echo "ERROR: Could not able to execute $booking_sql. " . mysqli_error($db_connect);
      }



     ?>

  </body>
</html>
