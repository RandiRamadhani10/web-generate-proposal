<?php 
require_once "./src/data/data.php";
$result = mysqli_query($conn, "SELECT * FROM pegawai");

?>

<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php while($row = mysqli_fetch_assoc($result)): ?>
    <option value="<?= $row["id"]?>">
        <?= $row["nama"];?>
    </option>
  <?php endwhile; ?>
</select>