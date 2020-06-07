<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student results</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
    // connect to database
      $db_connect = mysqli_connect("localhost", "root", "", "studentdb");
      // check if database connection worked
      if (mysqli_connect_errno()) {
        echo "Connection failed:".mysqli_connect_errno();
      }
     ?>
     <!-- page heading -->
     <h1>Student details</h1>
     <!-- set up and run query -->
     <?php
        // create query
        $student_sql = "SELECT * FROM student";
        // run query
        $student_qry = mysqli_query($db_connect, $student_sql);
        // store results in associative array
        $student_aa = mysqli_fetch_assoc($student_qry);

        // loop through rows
        do {
          // display results of query
            echo "<p>Student ID: " . $student_aa['student_id'] . "</p>";
            echo "<p class='firstname'>" . $student_aa['first_name'] . "</p>";
            echo "<p class='lastname'>" . $student_aa['last_name'] . "</p>";
        } while ($student_aa = mysqli_fetch_assoc($student_qry));



      ?>

  </body>
</html>
