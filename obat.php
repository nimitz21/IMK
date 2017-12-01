<?php
	include 'nav.html'
?>

<link rel="stylesheet" href="css\Jadwal.css">
<<<<<<< HEAD
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/obat.js"></script>
<div class="container" style="margin: 20px">
	<div class="row">
		<form class="form-horizontal" name="searchForm" method="POST" action="search-obat.php">
		<div class="col-md-2">
			<h5>Cari Berdasarkan</h5>
		</div>
		<div class="col-md-3">
			<div class="dropdown">
----
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script src="js/obat.js"></script>
<div class="container" style="margin-top: 20px">
		<form class="form-inline" name="searchForm" method="POST" action="search-obat.php">
			<h5 style="margin-right: 20px">Cari Berdasarkan</h5>
			<div class="dropdown" style="margin-right: 20px">
----
			    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih salah satu
			    <span class="caret"></span></button>
			    <ul class="dropdown-menu" name="category">
			      <li value="nama">Nama</li>
			      <li value="kandungan">Kandungan</li>
			    </ul>
----
			  </div>
				<input type='hidden' name='category'>
		</div>
		<div class="col-md-7">
			<div class="form-group has-feedback">
    		<input type="text" class="form-control" id="obat" placeholder="Cari obat" name="obat"/>
				 <i class="glyphicon glyphicon-search form-control-feedback"></i>
  	 	</div>
		</div>
	</form>
	</div>
----
			</div>
			<input type='hidden' name='category'/>
    		<input type="text" class="form-control" id="obat" placeholder="Cari obat" name="obat" style="width: 450px; margin-right: 20px"/>
				<button type="submit" class="btn btn-primary">Search</button>
		</form>
----
</div>
