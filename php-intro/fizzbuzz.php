<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fizzbuzz</title>
  </head>
  <body>
    <!-- code to play Fizz Buzz -->
    <?php
      // loop from 1 to 10
      $number = 1;

      do {
        // display current value


        if ($number % 3 == 0)
        {
          echo "<p>Fizz</p>";
        } else {
          echo "<p>$number</p>";
        }


         // add 1 to current value
        $number = $number + 1;


      } while ($number <= 10);

     ?>
  </body>
</html>
