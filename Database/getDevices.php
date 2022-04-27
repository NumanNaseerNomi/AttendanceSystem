<?php
require "dbConnection.php";

header('Content-type: application/json');

$query = "SELECT * FROM Devices";

try
{
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
}
catch(Exception $e)
{
  echo json_encode(["message" => "Unable to Fetch Devices.", "error" => $e]);
}

$dbConnection->close();