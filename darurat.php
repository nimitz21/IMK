<?php
    include 'nav.html';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['location'])) {
        header('Location: tungguambulans.php');
    } else {
        $_SESSION['time'] = 12;
        $_SESSION['dist'] = 3.6;
        $_SESSION['fake'] = 0;
    }
?>

<h1 align="center"> Pesan Ambulans Sekarang </h1>
<hr />

<link rel="stylesheet" href="css\darurat.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhx7mXbGtUxphYxzoWeRQBjm_wriLAQI&libraries=places&callback=initAutocomplete" 
async defer></script>
<script type="text/javascript" src="script/darurat.js"></script>
<script>
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
</script>

<form>
    <input id="pac-input" class="controls" type="text" placeholder="Enter your location..">
</form>
<div id="map"></div>

<form id="locationForm">
    <input name="location" type="hidden" id="location" />
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-group d-flex" role="group">
                <a href="nav.html" class="btn btn-secondary w-100">Batal</a>
                <a href="#" class="btn btn-danger w-100" onclick="" data-toggle="modal" data-target="#exampleModal">
                    Pesan Ambulans Sekarang!
                </a>
            </div>
        </div>    
    </div>
</form>

<br />

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
                <div class="card">
                    <h5 class="card-header">
                        <div class="row">
                            <div class="col-lg-11">
                                Pemesanan Ambulans
                            </div>
                            <div class="col-lg-1">
                                <a href="tungguambulans.php">X</a>
                            </div>
                        </div>
                    </h5>
                    
                    <div class="card-block">
                        <div class="container">
                            <p class="card-text">
                                Ambulans telah ditemukan! (jarak 3km)
                            </p>
                            <p class="card-text">
                                Estimasi waktu: 10 menit
                            </p>
                        </div>
                        
                        <br /><br /><br /><br />
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group d-flex" role="group">
                                <a href="tungguambulans.php" class="btn btn-secondary w-100">Tutup</a>
                            </div>
                        </div>    
                    </div>

                </div>
    </div>
  </div>
</div>

</div></div>
</body>
</html>