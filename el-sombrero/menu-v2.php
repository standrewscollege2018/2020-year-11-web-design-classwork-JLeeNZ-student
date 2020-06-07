<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>El Sombrero Restaurant - Course</title>
  </head>
  <body>
    <!-- database connection -->
    <?php include 'connect.php'; ?>

    <!-- include banner  -->
    <?php include('banner.php'); ?>

    <!-- main content -->
    <div class="menu-container">
      <!-- display links to menu courses -->
      <div class="menu-links-container">
          <p class="menu-links" ><a href="menu.php?course_id=1&course_name=Entree">Entrees</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=2&course_name=Vegetarian">Vegetarian</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=3&course_name=Childrens">Children's plates</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=4&course_name=Steak">Steak</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=5&course_name=Chicken">Chicken</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=6&course_name=Pork">Pork</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=7&course_name=Mixed">Mixed Specials</a></p>
          <p class="menu-links" ><a href="menu.php?course_id=8&course_name=Desserts">Desserts</a></p>
        </div> <!-- link-container -->


      <div class="menu-details">

      <?php
      // extract course id from GET array
      $course_id = $_GET['course_id'];
      $course_name = $_GET['course_name'];

      // query database to return all food menu items
        $coursemenu_sql = "SELECT * FROM menu WHERE course_id=$course_id";
        $coursemenu_query = mysqli_query($db_connect, $coursemenu_sql);
        $coursemenu_aa = mysqli_fetch_assoc($coursemenu_query);

        // display course name
        echo "<h1>". $course_name . "</h1>";

        // display all menu items
        do {
          echo "<p>";
          echo "<b>&nbsp;" . $coursemenu_aa['name'] . "</b>&nbsp;";
          echo $coursemenu_aa['description'];
          echo "&nbsp;$" . $coursemenu_aa['price'];
          echo "</p><p>&nbsp;</p>";

        } while ($coursemenu_aa = mysqli_fetch_assoc($coursemenu_query));

       ?>
     </div> <!-- menu-details -->


   </div> <!-- menu-container -->


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
