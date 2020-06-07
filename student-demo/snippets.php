<?php
// display results of query
do {

  // display each row of results
  // student details
  echo "    <p>Student ID: " . $student_aa['student_id'] . "</p>\n";
  echo "    <p class='firstname'>" . $student_aa['first_name'] . "</p>\n";
  echo "    <p class='lastname'>" . $student_aa['last_name'] . "</p>\n";


} while ($student_aa = mysqli_fetch_assoc($student_qry));

 ?>
