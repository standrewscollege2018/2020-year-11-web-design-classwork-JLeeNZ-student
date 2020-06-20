<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search for a student</title>
  </head>
  <body>
     <!-- page heading -->
     <h1>Search for a student by first name</h1>
     <p>Enter any part of the student's name e.g. John or J</p>

     <!-- form to enter student name to search for -->
     <form action="search-results.php" method="post">
       <p><input type="text" name="search_text" placeholder="type a first name to search for..."> </p>
       <p><button type="submit" name="submit">Search</button> </p>
     </form>

  </body>
</html>
