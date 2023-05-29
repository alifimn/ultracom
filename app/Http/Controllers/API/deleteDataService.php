<?php
require_once 'connection.php';

if($con){
    $id_service = $_POST['id_service'];

    $getData = "SELECT * FROM data_service WHERE id_service = '$id_service'";

    if($id_service != "") {
        $result = mysqli_query($con, $getData);
        $rows = mysqli_num_rows($result);
        $response = array();

        if($rows > 0) {
            $delete = "DELETE FROM data_service WHERE id_service = '$id_service'";
            $exequery = mysqli_query($con, $delete);

            if($exequery) {
                array_push($response, array(
                    'status' => 'Data Berhasil di Hapus'
                ));
            }else{
                array_push($response, array(
                    'status' => 'Data gagal di Hapus'
                ));
            }
        }else{
            array_push($response, array(
                'status' => 'Tidak ada data yang di hapus'
            ));
        }
    }else{
        array_push($response, array(
            'status' => 'FAILED'
        ));
    }
}else{
    array_push($response, array(
        'status' => 'Koneksi Gagal'
    ));
}

echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>