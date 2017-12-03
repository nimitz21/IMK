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
<script src="https://code.jquery.com/jquery.js"></script> 
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
</body>
</html>