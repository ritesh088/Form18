<?php

$server   = "localhost";
$database = "letmesif_database";
$username = "letmesif";
$password = "h2Tx7!0hN9!6";

$mysqlConnection = mysql_connect($server, $username, $password);
if (!$mysqlConnection)
{
  echo "Please try later.";
}
else
{
mysql_select_db($database, $mysqlConnection);
}
?>