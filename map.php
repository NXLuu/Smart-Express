<!DOCTYPE html>
<html lang="en">

<div style="position:absolute">
    <?php include_once("header.php"); ?>
</div>
<style>
    #map, #mapvt {
        width: 500px;
        height: 500px;
    }
</style>
<script src="js/map.js"></script>

<body>


    <div class="container-fluid p-0">
        <div class="row" id="body-row">
            <?php
            include 'sidebar.php';
            ?>
            <div class="col bg-gray p-0">
                <?php
                include 'sidebarHeader.php';
                ?>
                <div id="map"></div> 
                <div id="mapvt"></div>
            </div>

        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaOulQACiJzBfqumbsqg_-vKha8fCnL-s&callback=initMap&v=weekly" async></script>