<?php
include 'connection.php';

$sql = "SELECT * FROM data_service Where id_service = '" . $_POST['id_service'] ."'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);
echo json_encode(array(
    'data' => array(
        'id_service' => $data['id_service'],
        'id' => $data['id'],
        'nama_kategori' => $data['nama_kategori'],
        'jml_service' => $data['jml_service'],
        'catatan_service' => $data['catatan_service'],
        'metode_pembayaran' => $data['metode_pembayaran'],
        'status' => $data['status']
    )
));
?>