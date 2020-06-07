<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>El Sombrero Restaurant - Menu</title>
  </head>
  <body>
    <!-- database connection -->
    <?php include 'connect.php'; ?>


    <!-- main content -->
      <?php
      // query database to return all food menu items
        $fullmenu_sql = "SELECT * FROM menu";
        $fullmenu_query = mysqli_query($db_connect, $fullmenu_sql);
        $fullmenu_aa = mysqli_fetch_assoc($fullmenu_query);

        // display all menu items
        do {
          echo "<p>" . $fullmenu_aa['name'];
          echo $fullmenu_aa['description'];
          echo $fullmenu_aa['price'];
          echo "</p>";

        } while ($fullmenu_aa = mysqli_fetch_assoc($fullmenu_query));

       ?>

  </body>
</html>
