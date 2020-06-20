<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Query with single result</title>
  </head>
  <body>
    <?php
      // connect to database
      $db_connect = mysqli_connect("localhost", "root", "", "studentdb");

      // create query
      $student_sql = "SELECT first_name, last_name FROM student WHERE first_name='John'";
      // run query
      $student_qry = mysqli_query($db_connect,$student_sql);
      // store result in array
      $student_aa = mysqli_fetch_assoc($student_qry);
      ?>
      <h1>Student details</h1>
      <h2>Super code by Ms Lee</h2>
      <?
      // start loop to repeat student details
      do {
        // store name as variables
        $first_name = $student_aa['first_name'];
        $last_name = $student_aa['last_name'];

    ?>
    <div class="student">

      	<?php echo "$first_name $last_name";  ?>

  </div>
    <?php
      } while ($student_aa = mysqli_fetch_assoc($student_qry));
      ?>


  </body>
</html>
