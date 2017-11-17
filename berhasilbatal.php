<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: darurat.php');
    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    unset($_SESSION['location']);
    unset($_SESSION['time']);
    unset($_SESSION['dist']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>DEAR - Poliklinik</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css\nav.css">
    <link rel="stylesheet" href="css\darurat.css">
</head>

<body>
    <div class="container-fluid">
        <br /><br /><br /><br /><br />
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <h5 class="card-header">
                        <div class="row">
                            <div class="col-lg-11">
                                Pembatalan Ambulans
                            </div>
                            <div class="col-lg-1">
                                <a href="darurat.php">X</a>
                            </div>
                        </div>
                    </h5>
                    
                    <div class="card-block">
                        <div class="container">
                            <p class="card-text">
                                Pemesanan ambulans berhasil dibatalkan!
                            </p>
                        </div>
                        
                        <br /><br /><br /><br />
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group d-flex" role="group">
                                <a href="darurat.php" class="btn btn-secondary w-100">Tutup</a>
                            </div>
                        </div>    
                    </div>

                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

</body>

</html>