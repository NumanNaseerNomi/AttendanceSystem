<?php
require "dbConnection.php";

header('Content-type: application/json');

$query = "SELECT * FROM Devices";
$result = mysqli_query($dbConnection, $query);

$devicesList = array();

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $devicesList[] = $row;
  }
}

echo json_encode($devicesList);

$dbConnection->close();