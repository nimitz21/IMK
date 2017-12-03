<?php
    include 'nav.html';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['location'] = 'Institut Teknologi Bandung, Lebak Siliwangi, Kota Bandung, Jawa Barat, Indonesia';
    $_SESSION['time'] = $_SESSION['time'] - 2;
    $_SESSION['dist'] = $_SESSION['dist'] - 0.6;
    $_SESSION['fake'] = $_SESSION['fake'] + 1;

    if ($_SESSION['time'] <= 0){
        header('Location: ambulanstiba.php');
    }

?>

<h1 align="center"> Ambulans sedang dalam perjalanan </h1>
<hr />

<link rel="stylesheet" href="css\darurat.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhx7mXbGtUxphYxzoWeRQBjm_wriLAQI&libraries=places&callback=initAutocomplete" 
async defer></script>
<script type="text/javascript" src="script/tunggu.js"></script>

<div class="row">
    <div class="col-lg-8">
        <form>
            <input id="pac-input" class="controls" type="hidden" placeholder="Enter your location..">
        </form>
        <!--div id="map"></div-->
        <img src=<?php echo 'fake' . $_SESSION['fake'] . '.png'; ?>>
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
                        <strong><?php echo $_SESSION['dist']; ?> km</strong>
                    </p>
                    <br />
                    <p class="card-text">
                        Estimasi waktu: 
                        <strong><?php echo $_SESSION['time']; ?> menit</strong>
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