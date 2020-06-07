<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All students</title>
  </head>
  <body>
    <!-- connect to database -->
    <?php include('connect.php'); ?>

    <!-- sisplay page heading -->
    <h1>All students</h1>

    <!-- query database and display results -->
    <?php
      // create query string
      $student_sql = "SELECT * FROM student WHERE student_id=1";
      // run query
      $student_qry = mysqli_query($db_connect, $student_sql);
      // get first row of results from array
      $student_aa = mysqli_fetch_assoc($student_qry);

      // display all students that matched query
      do {
        echo "<p>";
        echo "<b>&nbsp;" . $student_aa['student_id'] . "</b>&nbsp;";
        echo $student_aa['first_name'] . "&nbsp;" . $student_aa['last_name'];
        echo "</p><p>&nbsp;</p>";

      } while ($student_aa = mysqli_fetch_assoc($student_qry));

      ?>

  </body>
</html>
