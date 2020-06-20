<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search results</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <!-- check if info in $POST array -->
    <?php
      if (!isset($_POST['search_text'])) {
        echo "error";
      }
      else {
    ?>

    <!-- retrieve info from POST array -->
    <?php
     $search_text = $_POST['search_text'];
     ?>

     <h1>Results</h1>

    <!-- connect to student database -->
    <?php
    // connect to database
      $db_connect = mysqli_connect("localhost", "root", "", "studentdb");
      // check if database connection worked
      if (mysqli_connect_errno()) {
        echo "Connection failed:".mysqli_connect_errno();
      }
     ?>




     <!-- query database and display results -->
     <?php
        // SQL statement
        $search_sql = "SELECT * FROM student WHERE first_name = '$search_text'";
        //  run query
        $search_qry = mysqli_query($db_connect, $search_sql);
        // put results of query in associative array
        $search_aa = mysqli_fetch_assoc($search_qry);


        ?>
        <p><b>First name: </b><?php echo $search_aa['first_name'] ?></p>
        <!--
         // display all rows that match query
         //do {
           // display each student on one line
           echo "<p><b>Student ID:</b> " . $search_aa['student_id'];
           echo " <b>First name:</b> ". $search_aa['first_name'];
           echo " <b>Last name:</b> ". $search_aa['last_name'] . "</p>";

         //} while ($search_aa = mysqli_fetch_assoc($search_qry));

      ?> -->
    <?php } // end of else ?>

  </body>
</html>
