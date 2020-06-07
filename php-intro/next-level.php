<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Process user input from GET array</title>
  </head>
  <body>
    <?php
       // get user choice from GET array
      $choice = $_GET['door'];
      
      // display message based on user input
      if ($choice == 1) {
        echo "<p>You are safe! Go the next level</<p>";
      } else {
        echo "Oh no!  You choose the wrong door.  You are heading to the dungeon :-(";
      }

    ?>
  </body>
</html>
