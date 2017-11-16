<?php
    include 'nav.html'  
?>

<?php
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		header('Location: registrasi.php');
	}

	function random_str($length, $keyspace = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
	{
	    $str = '';
	    $max = mb_strlen($keyspace, '8bit') - 1;
	    for ($i = 0; $i < $length; ++$i) {
	        $str .= $keyspace[mt_rand(0, $max)];
	    }
	    return $str;
	}
	$token = random_str(15);
	$phone = $_POST['telephone']
?>

<div>
	<h1 align="center"> Registrasi </h1>
	<hr />
	<h5 align="center"> Detail registrasi </h5>
	<p style="font-size: 15pt;">
		Berikut kode unik pemesanan anda :
	</p>
	<br />
	<div align="center" style="font-size: 18pt;">
		<strong><?= $token ?></strong>
	</div>
	<br /> <br />
	<p style="font-size: 10pt;">
		Kode unik juga akan dikirimkan melalui SMS ke <?= $phone ?>. <br />
		Anda harus menunjukkan kode unik tersebut kepada petugas administrasi sebelum pemeriksaan. <br />
	</p>

	<div style="margin-left: 20%; font-size: 13pt;">
		<b> No antrian anda : 50 </b> <br />
		<b> No antrian saat ini : 30 </b> <br />
		<b> Perkiraan waktu pelayanan : 16.32 </b> <br />
	</div>

	<br /> <br />

	<div align="center">
		<button type="submit" class="btn btn-error btn-lg" onclick="return confirm('Apakah anda yakin?')">Batal</button>
	</div>
</div>


</body>
</html>