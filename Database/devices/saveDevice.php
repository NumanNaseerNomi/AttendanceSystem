<?php
require "../dbConnection.php";

header('Content-type: application/json');

$formDataJson   = file_get_contents('php://input');
$formData       = json_decode($formDataJson);

if($formData->id === "")
{
    $query = "INSERT INTO devices (name, deviceId, description) VALUES ('$formData->deviceName', '$formData->deviceID', '$formData->deviceDescription')";

    try
    {
        mysqli_query($dbConnection, $query);
        echo json_encode(["message" => "Device inserted Successfully.", "id" => mysqli_insert_id($dbConnection)]);
    }
    catch(Exception $e)
    {
        echo json_encode(["message" => "Device insertion failed.", "error" => $e]);
    }
}
else
{
    $query = "UPDATE devices SET name='$formData->deviceName', deviceId='$formData->deviceID', description='$formData->deviceDescription' WHERE id='$formData->id'";

    try
    {
        mysqli_query($dbConnection, $query);
        echo json_encode(["message" => "Device Updated Successfully.", $formData]);
    }
    catch(Exception $e)
    {
        echo json_encode(["message" => "Device Updating failed.", "error" => $e]);
    }
}

$dbConnection->close();
