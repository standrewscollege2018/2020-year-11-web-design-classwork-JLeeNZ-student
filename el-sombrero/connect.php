<?php
  $db_connect = mysqli_connect("localhost", "root", "", "el-sombrero-demo");

  if (mysqli_connect_errno()) {
    echo "Connection failed:".mysqli_connect_errno();
  }

 ?>
