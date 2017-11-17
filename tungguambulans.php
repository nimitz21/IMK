<?php
    include 'nav.html';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['time'] = $_SESSION['time'] - 2;
    $_SESSION['dist'] = $_SESSION['dist'] - 0.6;

    if ($_SESSION['time'] <= 0){
        header('Location: ambulanstiba.php');
    }

?>

<h1 align="center"> Ambulans sedang dalam perjalanan </h1>
<hr />

<link rel="stylesheet" href="css\darurat.css">
<script src="https://code.jquery.com/jquery.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhx7mXbGtUxphYxzoWeRQBjm_wriLAQI&libraries=places&callback=initAutocomplete" 
async defer></script>
<script type="text/javascript" src="script/tunggu.js"></script>

<div class="row" style="width:100%; height:100%;">
    <div class="col-lg-8" style="width:100%; height:100%;">
        <form>
            <input id="pac-input" class="controls" type="hidden" placeholder="Enter your location..">
        </form>
        <div id="map"></div>
    </div>
    <div class="col-lg-4" style="width:100%; height:100%;">
        <div class="card">
            <h5 class="card-header">
                Informasi Ambulans
            </h5>
            
            <div class="card-block">
                <div class="container">
                    <p class="card-text">
                        Jarak
                    </p>
                    <p class="card-text">
                        <strong><?php echo $_SESSION['dist']; ?> km</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Estimasi waktu:
                    </p>
                    <p class="card-text">
                        <strong><?php echo $_SESSION['time']; ?> menit</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Plat Kendaraan:
                    </p>
                    <p class="card-text">
                        <strong>B2296A66</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Kontak:
                    </p>
                    <p class="card-text">
                        <strong>08123456789</strong>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<form id="batalForm" method="POST" action="daruratbatal.php" onsubmit="">
    <input name="location" type="hidden" id="location" value="<?php echo $_SESSION['location']?>" />
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-group d-flex" role="group"> 
                <a href="#" class="btn btn-secondary w-100" onclick="document.getElementById('batalForm').submit()">
                    Batalkan Ambulans
                </a>
            </div>
        </div>    
    </div>
</form>

<br />

</div></div>
</body>
</html>