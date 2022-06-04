<?php 
require_once("../data/data.php");
if (isset($_POST["filterMonth"])) {

	$year = $_POST["start"];
    $time=strtotime($year);
    $month=date("m",$time);
    $years=date("Y",$time);
    
	header("location: ./cekPegawai.php?year=$years&month=$month&dates=$year");
   
}
error_reporting(0);
$no=1;
$now = new DateTime();
$yearNow = $now->format('Y');
$now = $now->format('m');
$result;
    if($_GET["month"]){
        $now=$_GET["month"];
        $yearNow = $_GET["year"];
        $result = mysqli_query($conn, "SELECT * FROM pegawai");
    }else{
        $result = mysqli_query($conn, "SELECT * FROM pegawai");
    };
$set =  new DateTime();
$dates = $set->format('Y-m');

// exit;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pegawai</title>
    <link rel="stylesheet" href="index.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
     .select{
         width: 300px;
         margin-left: 20px;
     }
     .detail{
         padding: 20px;
         background-color: whitesmoke;
         display:flex;
         
     }
     .detail>h3{
         margin-left:20px;
     }
     .table{
         padding: 20px;
     }
  </style>
  <body style="background-color: whitesmoke">
    <div class="detail">
    <a href="../../index.php" class='btn btn-primary'> Back</a>
    <h3>Pegawai</h3>
    </div>
    <div class='select'>
    <form action="" method="POST" name="form" enctype="multipart/form-data">
	<label for="cars">Filer Bulan:</label>
        <div style="display:flex;">
        <!-- <input type="number" min="1900" name="start" max="2099" step="1" value="" /> -->
       
            <!-- <select name="filter" id="filter"class="form-select" aria-label="Default select example">
                <option value="<?=$now ?>" name="1">Pilih salah satu</option>    
                <option value="1" name="1">Januari</option>
                <option value="2" name="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="8">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select> -->
            <input style="width:400px; margin: left 10px;" type="month" id="start" name="start"min="2018-03" value="<?php if ($_GET['dates']){echo $_GET['dates'];}else{echo $dates;}?>">
            <button name="filterMonth" style="margin-left:20px " class="btn btn-success" type="submit">Filter</button>
        </div>
	</form>
    </div>
    <div class="table">
    <table class="table table-dark table-striped">
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Jumlah Kunjungan</th>
            <th>Tanggal</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <?php
            $id = $row['id'];
            $month = $now;
            $year = $yearNow;
            $jumlah = mysqli_query($conn,"SELECT * FROM logs WHERE logs.pegawaiKetiga = {$id}  AND MONTH(logs.created_at) = {$month} AND YEAR(logs.created_at) ={$year}"); 
          
            ?>
                <tr>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["nip"]; ?></td>
                    <td><?php if($jumlah){
                        $hasil = mysqli_num_rows($jumlah);
                        echo $hasil;
                    }
                    else{
                        echo '0';
                    } ?> </td>
                    <td>
                    <?php while($data = mysqli_fetch_assoc($jumlah)) :?>
                        <?= $data["tanggalAwal"];?> - <?= $data["tanggalAkhir"];?>,
                    <?php endwhile; ?> 
                    </td>
                  
                </tr>
        <?php endwhile; ?>
    </table>
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