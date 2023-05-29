<?php
require_once 'connection.php';

if($con){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user_mobile(username, email, phone, address, password) VALUES('$username','$email', '$phone', '$address', '$password')";

    if($username != "" && $email != "" && $phone != "" && $address != "" && $password != ""){
        $result = mysqli_query($con, $insert);
        $response = array();
        
        if($result){
            array_push($response, array(
                'status' => 'OK'
            ));
        }else{
            array_push($response, array(
                'status' => 'FAILED'
            ));
        }
    } else {
        array_push($response, array(
            'status' => 'FAILED'
        ));
    }
} else {
    array_push($response, array(
        'status' => 'FAILED'
    ));
}

echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>