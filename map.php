
<!DOCTYPE html>
<html lang="en">

<div style="position:absolute">
    <?php include_once("header.php"); ?>
</div>
<style>
   
</style>

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
                <div id="mapL"></div>
            </div>

        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@mapbox/polyline@1.1.1/src/polyline.min.js"></script>
<script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
<script src="js/map.js"></script>

</html>