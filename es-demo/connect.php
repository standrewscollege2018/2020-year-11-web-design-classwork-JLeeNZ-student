<?php
  $dbconnect = my_sqli_connect("localhost", "root", "", "el-sombrero-demo");

if my_sqli_connect_errno() {
  echo "connection failed:".my_sqli_connect_errno();
  exit;
}
 ?>
