<?php
require_once 'connection.php';

if($con) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $getData = "SELECT * FROM user_mobile WHERE id = '$id'";

    if($id != "") {
        $result = mysqli_query($con, $getData);
        $rows = mysqli_num_rows($result);
        $response = array();

        if($rows > 0) {
            $update = "UPDATE user_mobile SET username = '$username', email = '$email', 
            phone = '$phone', address = '$address', password = '$password' WHERE id = '$id'";
            $exequery = mysqli_query($con, $update);

            if($exequery) {
                array_push($response, array(
                    'status' => 'Data Berhasil di Update'
                ));
            } else {
                array_push($response, array(
                    'status' => 'Data Gagal di Update'
                ));
            }
        } else {
            array_push($response, array(
                'status' => 'Tidak ada data yang di Update'
            ));
        }
    } else {
        array_push($response, array(
            'status' => 'FAILED'
        ));
    }
} else {
    array_push($response, array(
        'status' => 'Tidak ada koneksi'
    ));
}

echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>