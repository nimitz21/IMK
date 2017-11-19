<?php
    include 'nav.html'
    include 'obat.php'
?>

<?php
  if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: obat.php');
  }

  $obat = $_POST['obat'];
  $category = $_POST['category'];

?>
<div class="row">
  <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
      </div>
    </div>
</div>
