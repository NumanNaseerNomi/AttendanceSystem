<?php
require "dbConnection.php";

header('Content-type: application/json');

$formDataJson   = file_get_contents('php://input');
$formData       =  json_decode($formDataJson);

if($formData->id === "")
{
    $query = "INSERT INTO devices (name, deviceId, description) VALUES ('$formData->deviceName', '$formData->deviceID', '$formData->deviceDescription')";

    try
    {
        $result = mysqli_query($dbConnection, $query);
        echo json_encode(["message" => "Device inserted Successfully.", "id" => mysqli_insert_id($dbConnection)]);
    }
    catch(Exception $e)
    {
        echo json_encode(["message" => "Device insertion failed.", "error" => $e]);
    }
}
else
{
    echo json_encode(["message" => "Update Record"]);
}

$dbConnection->close();
