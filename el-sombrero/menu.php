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
      <!-- get and display all menu items for selected course -->
    <?php

    // query database to return all course names
      $coursename_sql = "SELECT * FROM course ";
      $coursename_query = mysqli_query($db_connect, $coursename_sql);
      $coursename_aa = mysqli_fetch_assoc($coursename_query);
      ?>

      <!-- display all courses in side nav bar -->
      <div class='menu-links-container'>
      <?php
      do {
        // open paragraph tag
        echo "<p class='menu-links'>";
        // start link tag
        echo "<a href='menu.php?course_id=". $coursename_aa['course_id'] . "&course_name=" . $coursename_aa['name'] . "'>";
        //  display link text
        echo $coursename_aa['name'] . "</b>&nbsp;";
        echo "</a></p>";

      } while ($coursename_aa = mysqli_fetch_assoc($coursename_query));

     ?>

        </div> <!-- link-container -->


      <div class="menu-details">
        <!-- get and display all menu items for selected course -->
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
