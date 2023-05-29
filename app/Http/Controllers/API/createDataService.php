<?php
require_once 'connection.php';

if($con){
    $id_service = $_POST['id_service'];
    $id = $_POST['id'];
    $nama_kategori = $_POST['nama_kategori'];
    $jml_service = $_POST['jml_service'];
    $catatan_service = $_POST['catatan_service'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $status = $_POST['status'];

    $insert = "INSERT INTO data_service(id_service, id, nama_kategori, jml_service, catatan_service, metode_pembayaran, status) VALUES ('$id_service', '$id', '$nama_kategori', 
    '$jml_service', '$catatan_service' , '$metode_pembayaran', '$status')";

    if($id_service != "") {
        $result = mysqli_query($con, $insert);
        $response = array();

        if($result){
            array_push($response, array(
                'status' => 'Data berhasil ditambahkan'
            ));
        } else {
            array_push($response, array(
                'status' => 'Data gagal ditambahkan'
            ));
        }
    }else{
        array_push($response, array(
            'status' => 'FAILED'
        ));
    }
}else{
    array_push($response, array(
        'status' => 'FAILED'
    ));
}

echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>