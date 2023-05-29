<?php
require_once 'connection.php';

$id = $_GET['id'];
$query = "SELECT * FROM user_mobile where id = '$id'";
$result = mysqli_query($con, $query);
$response = array();

while($row = mysqli_fetch_array($result)){
    array_push($response, array(
        "id" => $row[0],
        "username" => $row[1],
        "email" => $row[2],
        "phone" => $row[3],
        "address" => $row[4],
        "password" => $row[5]
    ));
}

echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>