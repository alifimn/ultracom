<?php
require_once 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_mobile WHERE username='$username' AND password='$password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Jika username dan password benar, kembalikan data user dalam format JSON
    $row = $result->fetch_assoc();
    $response["status"] = "success";
    $response["id"] = $row["id"];
    $response["username"] = $row["username"];
    $response["email"] = $row["email"];
    echo json_encode($response);
} else {
    // Jika username dan password salah, kembalikan status error
    $response["status"] = "error";
    $response["message"] = "Invalid username or password";
    echo json_encode($response);
}

$con->close();
// if($con){
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM user_mobile where username = '$username' AND password = '$password'";
//     $result = mysqli_query($con, $query);
//     $response = array();

//     $row = mysqli_fetch_assoc($result);
//     $id = $row['id'];

//     if($row > 0){
//         array_push($response, array(
//             'status' => 'success',
//             // 'message' => 'Login Berhasil',
//             // 'id' => $id
//         ));
//     } else {
//         array_push($response, array(
//             'status' => 'FAILED'
//         ));
//     }
// } else {
//     array_push($response, array(
//         'status' => 'FAILED'
//     ));
// }

// echo json_encode(array("server_response" => $response));
// mysqli_close($con);
?>