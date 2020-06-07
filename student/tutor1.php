<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All tutor groups</title>
  </head>
  <body>
    <!-- connect to database -->
    <?php include('connect.php'); ?>

    <!-- sisplay page heading -->
    <h1>All tutor groups</h1>

    <!-- query database and display results -->
    <?php
      // create query string
      $tutor_sql = "SELECT * FROM tutorgroup";
      // run query
      $tutor_query = mysqli_query($db_connect, $tutor_sql);
      // get first row of results from array
      $tutor_aa = mysqli_fetch_assoc($tutor_query);

      // display all students that matched query
      do {
        echo "<p>";
        echo "<b>&nbsp;" . $tutor_aa['tutor_group_id'] . "</b>&nbsp;";
        echo "<a href='student.php?tutor_group_id=" . $tutor_aa['tutor_group_id'] . "'>";
        echo $tutor_aa['name'];
        echo "</a>";
        echo "</p><p>&nbsp;</p>\n";

      } while ($tutor_aa = mysqli_fetch_assoc($tutor_query));

      ?>

  </body>
</html>
