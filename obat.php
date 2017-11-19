<?php
	include 'nav.html'
?>

<link rel="stylesheet" href="css\Jadwal.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container" style="margin: 20px">
	<div class="row">
		<div class="col-md-2">
			<h5>Cari Berdasarkan</h5>
		</div>
		<div class="col-md-3">
			<div class="dropdown">
			    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih salah satu
			    <span class="caret"></span></button>
			    <ul class="dropdown-menu">
			      <li><a href="#">Nama</a></li>
			      <li><a href="#">Kandungan</a></li>
			    </ul>
			  </div>
		</div>
		<div class="col-md-7">
			<div class="form-group has-feedback">
    		<input type="text" class="form-control" id="obat" placeholder="Cari obat"/>
				 <i class="glyphicon glyphicon-search form-control-feedback"></i>
  	 	</div>
		</div>
	</div>
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
</div>
