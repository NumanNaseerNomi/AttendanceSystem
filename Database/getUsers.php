<?php
require "dbConnection.php";

$query = "SELECT id, name, about, cardId, username, isAdmin FROM Users WHERE isAdmin = 0";
$result = mysqli_query($dbConnection, $query);

$usersList = array();

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $usersList[] = $row;
  }
}

echo json_encode($usersList);

$dbConnection->close();