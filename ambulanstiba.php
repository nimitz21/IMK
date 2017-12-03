<?php
    include 'nav.html';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    unset($_SESSION['location']);
    unset($_SESSION['time']);
    unset($_SESSION['dist']);
    unset($_SESSION['fake']);

?>

<h1 align="center"> Ambulans sudah sampai! </h1>
<hr />

<link rel="stylesheet" href="css\darurat.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhx7mXbGtUxphYxzoWeRQBjm_wriLAQI&libraries=places&callback=initAutocomplete" 
async defer></script>
<script type="text/javascript" src="script/tunggu.js"></script>

<div class="row">
    <div class="col-lg-12">
            <div class="card">
                    <h5 class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                    Ambulans sudah sampai tujuan! Hubungi kontak apabila Anda belum melihat ambulans.
                            </div>
                        </div>
                    </h5>
                            
            </div>
    </div>
</div>

<br />

<div class="row">
    <div class="col-lg-8">
        <form>
            <input id="pac-input" class="controls" type="hidden" placeholder="Enter your location..">
        </form>
        <!--div id="map"></div-->
        <img src="fake6.png">
    </div>
    <div class="col-lg-4">
        <div class="card">
            <h5 class="card-header">
                Informasi Ambulans
            </h5>
            
            <div class="card-block">
                <div class="container">
                    <p class="card-text">
                        Jarak: 
                        <strong>0 km</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Estimasi waktu: 
                        <strong>0 menit</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Plat Kendaraan: 
                        <strong>B2296A66</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Kontak: 
                        <strong>08123456789</strong>
                    </p>
                    <p class="card-text">
                        .
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<br />

</div></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
                <div class="card">
                    <h5 class="card-header">
                        <div class="row">
                            <div class="col-lg-11">
                                Ambulans
                            </div>
                            <div class="col-lg-1">
                                <a href="#" onclick="$('#exampleModal').modal('hide');">X</a>
                            </div>
                        </div>
                    </h5>
                    
                    <div class="card-block">
                        <div class="container">
                            <p class="card-text">
                                Ambulans sudah sampai tujuan!
                        </div>
                        
                        <br /><br /><br /><br />
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group d-flex" role="group">
                                <a href="#" onclick="$('#exampleModal').modal('hide');" class="btn btn-secondary w-100">Tutup</a>
                            </div>
                        </div>    
                    </div>

                </div>
    </div>
  </div>
</div>

</body>

<script>
    $('#exampleModal').modal('show');
</script>

</html>