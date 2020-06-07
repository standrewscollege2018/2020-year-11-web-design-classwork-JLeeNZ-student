<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test query</title>
  </head>
  <body>
    <!-- connect to database -->
    <?php include('connect.php'); ?>

    <!-- query database -->
    <?php
      $menu_sql = "SELECT * FROM menu";
      $menu_query = mysqli_query($dbconnect,$menu_sql);
      $menu_aa = mysqli_fetch_assoc($menu_query);

     ?>

     <!-- display result of query -->


  </body>
</html>
