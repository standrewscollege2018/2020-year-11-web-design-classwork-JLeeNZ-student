<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of students in tutor group</title>
  </head>
  <body>
    <!-- is value stored in GET array -->
  <?php
    if(!isset($_GET['$tutor_group_id'])) {
      // redirect page
      header('Location:tutorgroup-list.php');
    }
    else {
   ?>

    <!-- connect to student database -->
    <?php
    // connect to database
      $db_connect = mysqli_connect("localhost", "root", "", "studentdb");
      // check if database connection worked
      if (mysqli_connect_errno()) {
        echo "Connection failed:".mysqli_connect_errno();
      }
     ?>

     <!-- retrieve info from GET array -->
     <?php
        $tutor_group_id = $_GET['tutor_group_id'];
      ?>

     <!-- query database and display results -->
     <?php
        // SQL statement
        $studentlist_sql = "SELECT * FROM student WHERE tutor_group_id=$tutor_group_id";
        //  run query
        $studentlist_qry = mysqli_query($db_connect, $studentlist_sql);
        // put results of query in associative array
        $studentlist_aa = mysqli_fetch_assoc($studentlist_qry);

        //echo "List of students in tutor group where ID=" . $tutor_group_id;

         // display all rows that match query
         do {
           // display each student on one line
           echo "<p><b>Student ID:</b> " . $studentlist_aa['student_id'];
           echo " <b>First name:</b> ". $studentlist_aa['first_name'];
           echo " <b>Last name:</b> ". $studentlist_aa['last_name'] . "</p>";

         } while ($studentlist_aa = mysqli_fetch_assoc($studentlist_qry));

    } // else  ?>

  </body>
</html>
