<?php
require "../dbConnection.php";

header('Content-type: application/json');

$formDataJson   = file_get_contents('php://input');
$formData       = json_decode($formDataJson);

if($formData->id === "")
{
    $query = "INSERT INTO Users (name, about, cardId, userName, password, isAdmin)
            VALUES ('$formData->deviceName', '$formData->deviceDescription', '$formData->deviceID', 'NOMi', '$2y$10$89uX3LBy4mlU/DcBveQ1l.32nSianDP/E1MfUh.Z.6B4Z0ql3y7PK', '0')";

    try
    {
        mysqli_query($dbConnection, $query);

        $id = mysqli_insert_id($dbConnection);
        $userName = str_replace(" ", ".", $formData->deviceName);
        $userName = strtolower($userName) . "." . $id;

        $query = "UPDATE Users SET userName='$userName' WHERE id='$id'";
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
    $query = "UPDATE Users SET name='$formData->deviceName', cardId='$formData->deviceID', about='$formData->deviceDescription' WHERE id='$formData->id'";

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
