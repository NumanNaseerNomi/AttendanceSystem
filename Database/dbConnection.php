<?php
$serverName = "localhost";
$userName   = "root";
$password   = "";
$dbName     = "AttendanceSystem";

try
{
  $dbConnection = mysqli_connect($serverName, $userName, $password);
}
catch(Exception $e)
{
  die("<b>Connection failed.<br/>ERROR:</b> " . $e);
}

try
{
  mysqli_select_db($dbConnection, $dbName);
}
catch(Exception $e)
{
  $query = "CREATE DATABASE $dbName";
  try
  {
    mysqli_query($dbConnection, $query);
  }
  catch(Exception $e)
  {
    die("<b>Database '" . $dbName . "' creation failed.<br/>ERROR:</b> " . $e);
  }
}
