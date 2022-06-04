<?php 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kwitansi Form</title>
    <link rel="stylesheet" href="./src/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
      .title{
          display: flex;
          flex-direction: column;
          align-items:center;
          justify-content: center;
      }
  </style>
  <body style="background-color: whitesmoke">
    
    <div class="title" >
        <h1>Kwitansi</h1>
       <a href="./src/components/cekPegawai.php" class="btn-primary btn cek">Cek Pegawai</a>
    </div>
    <div class="form-parent">
        <form class="form-kwitansi" action="" method="POST" name="form" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal surat</label>
                <input class="form-control" type="date" placeholder="" aria-label="default input example" name="tanggal_surat" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Awal</label>
                <input class="form-control" type="date" placeholder="" aria-label="default input example" name="tanggal_awal" required>
            </div>
            <div class="mb-5">
                <label for="tanggal" class="form-label">Tanggal Akhir</label>
                <input class="form-control" type="date" placeholder="" aria-label="default input example" name="tanggal_akhir" required>
                <label for="tanggal" class="form-label mt-2">Jumlah hari </label>
                <input class="form-control" type="text" placeholder="contoh: satu" aria-label="default input example" name="tanggal_akhir" required>
                <div id="" class="form-text text-warning">Ketik dalam bentuk angka</div>
            </div>
            <div class="mb-5 mt-2">
                <label for="transport" class="form-label">Uang Transport</label>
                <input class="form-control" type="number" placeholder="Rp" aria-label="default input example" name="uang_transport" required>
                <label for="harian" class="form-label mt-2">Terbilang</label>
                <input class="form-control" type="text" placeholder="contoh: Dua Ribu rupiah" aria-label="default input example" name="uang_harian" required>
            </div>
            <div class="mb-5 mt-2">
                <label for="harian" class="form-label">Uang Harian</label>
                <input class="form-control" type="number" placeholder="Rp" aria-label="default input example" name="uang_harian" required>
                <label for="harian" class="form-label">Terbilang</label>
                <input class="form-control" type="text" placeholder="contoh: Dua Ribu rupiah" aria-label="default input example" name="uang_harian" required>
            </div>
            <div class="mb-5 mt-2">
                <label for="harian" class="form-label">Terbilang Jumlah Uang</label>
                <input class="form-control" type="text" placeholder="contoh: Dua Ribu rupiah" aria-label="default input example" name="uang_harian" required>
                <div id="" class="form-text ">input kan total jumlah uang yang didapat dari penjumlahan antara uang transport dan harian</div>
            </div>
            <div class="mb-5 mt-2">
                <label for="harian" class="form-label">Detail Tujuan Perjalanan</label>
                <input class="form-control" type="text" placeholder="contoh : Perjalanan Dinas dalam rangka Konsultasi Pembinaan dan pengawasan PPAT ke..." aria-label="default input example" name="uang_harian" required>
                <div id="" class="form-text ">Inputkan tujuan surat ini dibuat</div>
            </div>
            <div class="mb-3">
                <label for="harian" class="form-label">Pegawai pertama</label>
                <?php include "./src/components/row.php";?>
            </div>
            <div class="mb-3">
                <label for="harian" class="form-label">Pegawai kedua</label>
                <?php include "./src/components/row.php";?>
            </div>
            <div class="mb-3">
                <label for="harian" class="form-label">Pegawai ketiga</label>
                <?php include "./src/components/row.php";?>
            </div>
           
           <div class="button-form p-5">
           <button name="addLog" type="submit" class="btn btn-primary">Submit</button>
           </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/locale/id.min.js" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./src/js/main.js"></script>
    <script>
  
    </script>
</body>
</html>