<?php
require_once 'connection.php';

$id = $_POST['id'];
$sql = "SELECT * FROM data_service where id = '$id'";
$query = mysqli_query($con, $sql);
$list_data = array();

while($data = mysqli_fetch_assoc($query)){
    $list_data[] = array(
        'id_service' => $data['id_service'],
        'id' => $data['id'],
        'nama_kategori' => $data['nama_kategori'],
        'jml_service' => $data['jml_service'],
        'catatan_service' => $data['catatan_service'],
        'metode_pembayaran' => $data['metode_pembayaran'],
        'status' => $data['status']
    );
}

echo json_encode(array(
    'data' => $list_data));
?>