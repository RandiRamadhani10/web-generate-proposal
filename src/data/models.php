<?php
require_once("./data.php");

function insertData ($data) {
    global $conn;
    $month=$_GET["month"];
    $tanggalSurat = htmlspecialchars(stripslashes($data["tanggalSurat"]));
    $tanggalAwal = htmlspecialchars(stripslashes($data["tanggalAwal"]));
    $tanggalAkhir = htmlspecialchars(stripslashes($data["tanggalAkhir"]));
    $jumlahHari = htmlspecialchars(stripslashes($data["jumlahHari"]));
    $uangTransport = htmlspecialchars(stripslashes($data["uangTransport"]));
    $terbilangTransport = htmlspecialchars(stripslashes($data["terbilangTransport"]));
    $uangHarian = htmlspecialchars(stripslashes($data["uangHarian"]));
    $terbilangHarian = htmlspecialchars(stripslashes($data["terbilangHarian"]));
    $pegawaiPertama = htmlspecialchars(stripslashes($data["pegawaiPertama"]));
    $pegawaiKedua = htmlspecialchars(stripslashes($data["pegawaiKedua"]));
    $pegawaiKetiga = htmlspecialchars(stripslashes($data["pegawaiKetiga"]));
    $selisihHari = htmlspecialchars(stripslashes($data["selisihHari"]));
    $terbilangTotal = htmlspecialchars(stripslashes($data["terbilangTotal"]));
    $detailTujuan = htmlspecialchars(stripslashes($data["detailTujuan"]));
    $now = new DateTime();
    $now = $now->format('Y-m-d');
    
mysqli_query($conn, "INSERT INTO logs
    VALUES (
        '',
        '$tanggalSurat',
        '$tanggalAwal',
        '$tanggalAkhir',
        '$jumlahHari',
        '$uangTransport',
        '$terbilangTransport',
        '$uangHarian',
        '$terbilangHarian',
        '$pegawaiPertama',
        '$pegawaiKedua',
        '$pegawaiKetiga',
        '$selisihHari',
        '$terbilangTotal',
        '$detailTujuan',
        '$now'
    )");
    echo  mysqli_affected_rows($conn);
    return mysqli_affected_rows($conn);   
}
$request = json_decode(file_get_contents('php://input'), true);
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($requestMethod) {
    case 'POST':
        try {
            insertData($request);
            if (mysqli_affected_rows($conn) > 0) {
                $response['status'] = true;
                echo json_encode($response);
                exit;
            } else {
                $response['status'] = false;
                echo json_encode($response);
                exit;
            }   
        } catch(Exception $error){
            http_response_code(500);
            $response['status'] = 'error';
            $response['message'] = $error;
            echo json_encode($response);
            exit;
        }
        break;
}
?>
