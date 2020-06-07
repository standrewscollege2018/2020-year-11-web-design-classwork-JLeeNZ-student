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
     <h1>Student details</h1>
     <!-- set up and run query -->
     <?php
        // create query
        $student_sql = "SELECT * FROM student";
        // run query
        $student_qry = mysqli_query($db_connect, $student_sql);
        // store results in associative array
        $student_aa = mysqli_fetch_assoc($student_qry);

        // display results of query
        // add container for grid display
        echo "<div class='student-container'>";
        do {

          // display each row of results
          // display as a card layout
          echo "  <div class='card'>\n";
          // student details
          echo "    <p>Student ID: " . $student_aa['student_id'] . "</p>\n";
          echo "    <p class='firstname'>" . $student_aa['first_name'] . "</p>\n";
          echo "    <p class='lastname'>" . $student_aa['last_name'] . "</p>\n";

          // close div for card 
          echo "  </div>\n";

        } while ($student_aa = mysqli_fetch_assoc($student_qry));

        // close div  for container
        echo "</div>\n";


      ?>

  </body>
</html>
