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

    <!-- include banner  -->
    <?php include('banner.php'); ?>

    <!-- main content -->
    <div class="content-container">
      <!-- display links to menu courses -->
      <div class="menu-links">
        <a href="course-details.php?course_id=1">Entrees</a>
        <a href="course-details.php?course_id=2">Vegetarian</a>
        <a href="course-details.php?course_id=3">Children's plates</a>
        <a href="course-details.php?course_id=4">Steak</a>
        <a href="course-details.php?course_id=5">Chicken</a>
        <a href="course-details.php?course_id=6">Pork</a>
        <a href="course-details.php?course_id=7">Mixed Specials</a>
        <a href="course-details.php?course_id=8">Desserts</a>
      </div>
      <?php
      // query database to return all food menu items
        $fullmenu_sql = "SELECT * FROM menu";
        $fullmenu_query = mysqli_query($db_connect, $fullmenu_sql);
        $fullmenu_aa = mysqli_fetch_assoc($fullmenu_query);

        // display all menu items
        do {
          echo "<p>";
          echo "<b>&nbsp;" . $fullmenu_aa['name'] . "</b>&nbsp;";
          echo $fullmenu_aa['description'];
          echo "&nbsp;$" . $fullmenu_aa['price'];
          echo "</p><p>&nbsp;</p>";

        } while ($fullmenu_aa = mysqli_fetch_assoc($fullmenu_query));

       ?>



    </div> <!-- content-container -->


    <!-- footer -->
    <div class="footer-container">
      <div class="footer-left">
        123 Minion Way
      </div>
      <div class="footer-middle">
        Open Tues-Sun 11am-late
      </div>
      <div class="footer-right">
        social media icons
      </div>
    </div>

  </body>
</html>
