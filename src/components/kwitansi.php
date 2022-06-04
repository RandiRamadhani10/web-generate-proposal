<?php
    // $jumlah_hari = 2 ;
    // $jumlah_hari_str = "dua" ;
    
    // $result_regex = number_format($jumlah_bayar) . "\n";
    require_once "../data/data.php";
    $result = mysqli_query($conn, "SELECT * FROM logs WHERE id = (SELECT MAX(id) FROM logs)");
    $row = mysqli_fetch_assoc($result);
    
    $idPertama = $row["pegawaiPertama"];
    $idKedua = $row["pegawaiKedua"];
    $idKetiga = $row["pegawaiKetiga"];

    $jumlah_bayar = $row["uangTransport"] + $row["uangHarian"];

    $pegawai1 = mysqli_query($conn, "SELECT * FROM pegawai WHERE id =  $idPertama");
    $pegawaiPertama = mysqli_fetch_assoc($pegawai1);

    $pegawai2 = mysqli_query($conn, "SELECT * FROM pegawai WHERE id =  $idKedua");
    $pegawaiKedua = mysqli_fetch_assoc($pegawai2);

    $pegawai3 = mysqli_query($conn, "SELECT * FROM pegawai WHERE id =  $idKetiga");
    $pegawaiKetiga = mysqli_fetch_assoc($pegawai3);

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Kwitansi</title>
</head>
<body>
    <section >
        <div class="parent">
            <div class="header center">
                <h1>KWITANSI</h1>
            </div>
                <div class="detailing">
                    <!-- <div class="col-1">
                        <p>Sudah terima dari</p>
                        <p>Banyaknya Uang</p>
                        <p>Dengan Huruf</p>
                        <p>Uang Pembayaran</p>
                    </div>
                    <div class="col-2">
                        <div>
                            <p style="width:2px; margin-right:15px;">:</p>
                            <p>Pejabat Pembuat Komitmen <br> Kantor Pertahanan Kabupaten Lima Puluh kota</p>
                        </div>
                    </div> -->
                   
                </div>
                <div class="list-detail ">
                        <p>Sudah terima dari</p>
                        <div>
                            <p style="width:2px; margin-right:15px;">:</p>
                            <p>Pejabat Pembuat Komitmen <br> Kantor Pertahanan Kabupaten Lima Puluh kota</p>
                        </div>
                    </div>
                    <div class="list-detail ">
                        <p>Banyaknya Uang</p>
                        <div>
                            <p style="width:2px; margin-right:15px;">:</p>
                            <p>Rp.<?= number_format($jumlah_bayar) ?>,-</p>
                        </div>
                    </div>
                    <div class="list-detail ">
                        <p>Dengan Huruf</p>
                        <div>
                            <p style="width:2px; margin-right:15px;">:</p>
                            <p>(<?= $row["terbilangTotal"] ?>)</p>
                        </div>
                    </div>
                    <div class="list-detail ">
                        <p>Uang Pembayaran</p>
                        <div>
                            <p style="width:2px; margin-right:15px;">:</p>
                            <p style="text-align: justify;"><?= $row["detailTujuan"] ?></p>
                        </div>
                    </div>
                <table class="table-name">
                   
                    <tr>
                        <th>
                            <div>
                              <p>Sudah dibayar :</p>                       
                              <p style="margin-bottom:100px">Pejabat Membuat Komitmen</p>                       
                              <p><?= $pegawaiPertama["nama"]?></p>
                              <p>NIP. <?= $pegawaiPertama["nip"]?></p>       
                            </div>
                        </th>
                        <th>
                            <div>
                              <p>Lunas bayar, <?= $row["tanggalSurat"] ?></p>                       
                              <p style="margin-bottom:100px">Bendahara Pengeluaran</p>                       
                              <p> <?= $pegawaiKedua["nama"]?></p>  
                              <p>NIP. <?= $pegawaiKedua["nip"]?></p>       
                            </div>
                        </th>
                        <th>
                            <div>
                              <p>Payakumbah, <?= $row["tanggalSurat"] ?></p>                      
                              <p style="margin-bottom:100px">Yang menerima</p>                       
                              <p><?= $pegawaiKetiga["nama"]?></p> 
                              <p>NIP. <?= $pegawaiKetiga["nip"]?></p>  
                            </div>
                        </th>
                    </tr>
                   
                </table>
                <h1>Rincian Biaya Perjalanan Dinas</h1>
                
                <table class="table-name">
                    <tr>
                        <th>Rincian Pembiayaan</th>
                        <th>Jumlah</th>
                        <th>Ket</th>
                    </tr>
                    <tr>
                        <td>Uang harian</td>
                        <td>Rp.  <?= number_format($row["uangHarian"]) ?>.-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Uang transport</td>
                        <td>Rp. <?= number_format($row["uangTransport"]) ?>.-</td>
                        <td></td>
                    </tr>   
                    <tr>
                        <td>Jumlah</td>
                        <td>Rp. <?= number_format($jumlah_bayar) ?>,-</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>Terbilang : <?= $row["terbilangTotal"] ?>  </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <div class="signature">
                    <div class="signature-child">
                        <p>Payakumbah, <?= $row["tanggalSurat"] ?></p>  
                        <P>Telah terima jumlah uang sebesar: Rp. <?= number_format($jumlah_bayar) ?>,-</P>                    
                        <p style="margin-bottom:100px">Yang menerima</p>                       
                        <p><?= $pegawaiKetiga["nama"]?></p> 
                        <p><?= $pegawaiKetiga["nip"]?></p>       
                    </div>
                </div>
        </div>
</section>
</body>
</html>