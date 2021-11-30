mapboxgl.accessToken =
    "pk.eyJ1Ijoibnh1bHV1IiwiYSI6ImNrd2htN21neDB5MjUycG52dmluaWt0MzMifQ.zWntWkDOQg7zMF9VXWYt2w"

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    enableHighAccuracy: true
})

function successLocation(position) {
    setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {
    setupMap([-2.24, 53.48])
}
let map;
function setupMap(center) {


    const mapvt = new mapboxgl.Map({
        container: "mapvt",
        style: "mapbox://styles/mapbox/streets-v11",
        center: center,
        zoom: 15
    });
    let geocode = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    })

    console.dir(geocode);
    mapvt.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            marker: true
        })
    );



    // var directions = new MapboxDirections({
    //     accessToken: mapboxgl.accessToken
    // })


    marker = new mapboxgl.Marker();
    let add_marker = function (event) {
        var coordinates = event.lngLat;
        let marker = mapvt._controls[2].mapMarker;
        if (!marker) {
            mapvt._controls[2].mapMarker = new mapboxgl.Marker();
            mapvt._controls[2].mapMarker.setLngLat(coordinates);
            mapvt._controls[2].mapMarker.addTo(mapvt);
        }
        mapvt._controls[2].mapMarker.setLngLat(coordinates);
        console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
    }

    mapvt.on('click', add_marker.bind(this));

    map = mapvt;

}

