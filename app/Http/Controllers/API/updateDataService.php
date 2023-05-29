<?php
require_once 'connection.php';

if($con) {
    $id_service = $_POST['id_service'];
    $id = $_POST['id'];
    $nama_kategori = $_POST['nama_kategori'];
    $jml_service = $_POST['jml_service'];
    $catatan_service = $_POST['catatan_service'];
    $metode_pembayaran = $_POST['metode_pembayaran'];

    $getData = "SELECT * FROM data_service WHERE id_service = '$id_service'";

    if($id != "") {
        $result = mysqli_query($con, $getData);
        $rows = mysqli_num_rows($result);
        $response = array();

        if($rows > 0) {
            $update = "UPDATE data_service SET nama_kategori = '$nama_kategori', 
            jml_service = '$jml_service', catatan_service = '$catatan_service', metode_pembayaran = '$metode_pembayaran' WHERE id_service = '$id_service'";
            $exequery = mysqli_query($con, $update);

            if($exequery) {
                array_push($response, array(
                    'status' => 'Data berhasil di Update'
                ));
            } else {
                array_push($response, array(
                    'status' => 'Data gagal di Update'
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