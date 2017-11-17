<?php
    include 'nav.html';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['location'])) {
        header('Location: tungguambulans.php');
    }
?>

<h1 align="center"> Pesan Ambulans Sekarang </h1>
<hr />

<link rel="stylesheet" href="css\darurat.css">
<script src="https://code.jquery.com/jquery.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhx7mXbGtUxphYxzoWeRQBjm_wriLAQI&libraries=places&callback=initAutocomplete" 
async defer></script>
<script type="text/javascript" src="script/darurat.js"></script>

<form>
    <input id="pac-input" class="controls" type="text" placeholder="Enter your location..">
</form>
<div id="map"></div>

<form id="locationForm" method="POST" action="daruratsukses.php" onsubmit="">
    <input name="location" type="hidden" id="location" />
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-group d-flex" role="group">
                <a href="nav.html" class="btn btn-secondary w-100">Batal</a>
                <a href="#" class="btn btn-danger w-100" onclick="validateLocationForm()">
                    Pesan Ambulans Sekarang!
                </a>
            </div>
        </div>    
    </div>
</form>

<br />

</div></div>
</body>
</html>