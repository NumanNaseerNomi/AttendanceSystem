<?php
require "../dbConnection.php";

header('Content-type: application/json');

$dataJson = file_get_contents('php://input');
$id       = json_decode($dataJson);

// $query = "SELECT * FROM Devices WHERE id='$id'";
$query = "SELECT id, name, about, cardId, username, isAdmin FROM Users WHERE id='$id'";

try
{
  echo json_encode(["message" => "Device fetched Successfully.", mysqli_query($dbConnection, $query)->fetch_assoc()]);
}
catch(Exception $e)
{
  echo json_encode(["message" => "Device fetching failed.", "error" => $e]);
}

$dbConnection->close();