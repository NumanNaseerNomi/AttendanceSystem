<?php
require "dbConnection.php";

$dataJson = file_get_contents('php://input');
$id       = json_decode($dataJson);

header('Content-type: application/json');

$query = "DELETE FROM devices WHERE id='$id'";

try
{
    mysqli_query($dbConnection, $query);
    echo json_encode(["message" => "Device Deleted Successfully.", "id" => $id]);
}
catch(Exception $e)
{
    echo json_encode(["message" => "Device deletion failed.", "error" => $e]);
}

$dbConnection->close();
