$(document).ready(function () {
    // load
    //mao 
    let map1;
    let map2;

    navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
        enableHighAccuracy: true
    })
    mapboxgl.accessToken =
        "pk.eyJ1Ijoibnh1bHV1IiwiYSI6ImNrd2htN21neDB5MjUycG52dmluaWt0MzMifQ.zWntWkDOQg7zMF9VXWYt2w"




    function successLocation(position) {
        // map = setupMap([position.coords.longitude, position.coords.latitude], "mapvt")
        map1 = setupMap([position.coords.longitude, position.coords.latitude], "send-map")
        map2 = setupMap([position.coords.longitude, position.coords.latitude], "rev-map")
    }

    function errorLocation() {
        map = setupMap([-2.24, 53.48], "send-map");
        map1 = setupMap([-2.24, 53.48], 'rev-map');
    }



    function addMarker(mapvt, coor) {
        let marker = mapvt._controls[2].mapMarker;
        if (!marker) {
            mapvt._controls[2].mapMarker = new mapboxgl.Marker();
            mapvt._controls[2].mapMarker.setLngLat(coor);
            mapvt._controls[2].mapMarker.addTo(mapvt);
        }
        mapvt._controls[2].mapMarker.setLngLat(coor);

    }

    function setupMap(center, container) {

        const mapvt = new mapboxgl.Map({
            container: container,
            style: "mapbox://styles/mapbox/streets-v11",
            center: center,
            zoom: 15,
            trackResize: true
        });
        mapvt.on('load', function () {
            mapvt.resize()._update();
        });

        mapvt.addControl(
            new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl,
                marker: true
            })
        );

        marker = new mapboxgl.Marker();
        let add_marker = function (event) {
            var coordinates = event.lngLat;
            addMarker(mapvt, coordinates);
        }

        mapvt.on('click', add_marker.bind(this));

        return mapvt;

    }
    $('#showOrder').on('click', function () {
        $('#load-container').load('../function/order/load.php');
        // $.ajax({
        //     url: 'function/order/load.php',
        //     type: 'GET',
        //     success: function (result) {
        //         console.log(result);
        //         $('#loadContainer').html(result);
        //     }
        // });
        $("#addModal").modal('hide');
    });

    $('#createOrder').on('click', function () {
        $("#addModal").modal('hide');
    });
    $("#submit-btn").on('click', function (e) {
        e.preventDefault();
        let marker1 = map1._controls[2].mapMarker;
        let marker2 = map2._controls[2].mapMarker;
        let lnglat1 = marker1.getLngLat();
        let lnglat2 = marker2.getLngLat();

        let form = $('#orderForm')
        var data = new FormData(form[0]);

        data.append('lng1', lnglat1.lng);
        data.append('lat1', lnglat1.lat);
        data.append('lng2', lnglat2.lng);
        data.append('lat2', lnglat2.lat);

        $.ajax({
            url: 'function/order/create.php',
            data: data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (result) {
                $("#addModal").modal('show');
            }
        });
    })


});
