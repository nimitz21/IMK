<?php
    include 'obat.php'
?>

<?php
  if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: obat.php');
  }

  $obat = $_POST['obat'];
  $category = $_POST['category'];

echo '<h4> Hasil pencarian untuk: '. $obat.'</h4>';
if ($obat == "paracetamol") {
  echo '<div class="row" style="margin: 20px">
    <div class="card" style="width: 900px">
        <div class="card-header">
          <h6>Paracetamol</h6>
        </div>
        <div class="card-body">
          <p>Satuan: </p>
          <p>Stok: </p>
        </div>
        </div>
        </div>'; }
else if ($obat =="antalgin" ) {
  echo '<div class="row" style="margin: 20px">
    <div class="card" style="width: 900px">
        <div class="card-header">
          <h6>Antalgin inj. 250 mg/ml</h6>
        </div>
        <div class="card-body">
        <p>Satuan: </p>
        <p>Stok: </p>
        </div>
        <div class="card-header">
          <h6>Antalgin tab. 500 mg</h6>
        </div>
        <div class="card-body">
        <p>Satuan: </p>
        <p>Stok: </p>
        </div>
        </div>
        </div>';
} else {
  echo '<div class="row" style="margin: 20px">
            <h5>Tidak ditemukan</h5>
        </div>';
}
?>
