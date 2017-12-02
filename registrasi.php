<?php
    include 'nav.html'  
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<style type="text/css">
	.form-input {
		margin-bottom: 5px;
	}
	.form-control{
		height: 30px;
	}
	h5 {
		margin-bottom: 1px;	
	}
</style>

<div>
	<h1 align="center"> Registrasi </h1>
	<hr />
	<h5 align="center"> Form registrasi </h5>
	<form class="form-horizontal" name="registrasiForm" method="POST" action="finishregistrasi.php" onsubmit="return validate();">
		<div class="form-group form-input">
			<label class="control-label col-sm-2" for="nama">Nama:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nama" name="nama" />
			</div>
		</div>
		<div class="form-group form-input">
			<label class="control-label col-sm-2" for="id">ID:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="id" name="id" />
			</div>
		</div>
		<div class="form-group form-input">
			<label class="control-label col-sm-2" for="telephone">No. Telephone:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telephone" name="telephone" />
			</div>
		</div>
		<div class="form-group form-input">
			<label class="control-label col-sm-2" for="poli">Poli:</label>
			<div class="col-sm-10">
				<select class="form-control" id="poli" name="poli">
					<option value="gigi">Gigi</option>
					<option value="mata">Mata</option>
					<option value="radiologi">Radiologi</option>
					<option value="umum">Umum</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="tanggal">Tanggal:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="tanggal" name="tanggal" />
			</div>
		</div>
		<div class="form-group">
			<div align="center">
				<button type="submit" class="btn btn-success btn-lg">Daftar</button>
			</div>
		</div>
	</form>	
</div>

</body>
</html>

<script type="text/javascript">
	function validate() {
		var formName = "registrasiForm";
		var nama = document.forms[formName]["nama"].value;
		var id = document.forms[formName]["id"].value;
		var telephone = document.forms[formName]["telephone"].value;
		var poli = document.forms[formName]["poli"].value;
		var tanggal = document.forms[formName]["tanggal"].value;

		if (nama == "") {
			alert("Nama tidak boleh kosong");
			return false;
		}
		if (id == "") {
			alert("ID tidak boleh kosong");
			return false;
		}
		if (telephone == "") {
			alert("No. telephone tidak boleh kosong");
			return false;
		}
		if (poli == "") {
			alert("Poli tidak boleh kosong");
			return false;
		}
		if (tanggal == "") {
			alert("Tanggal tidak boleh kosong");
			return false;
		}
		return true;
	}
</script>