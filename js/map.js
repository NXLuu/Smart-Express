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

function setupMap(center) {
    const map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v11",
        center: center,
        zoom: 15
    })

    const mapvt = new mapboxgl.Map({
        container: "mapvt",
        style: "mapbox://styles/mapbox/streets-v11",
        center: center,
        zoom: 15
    });


    const nav = new mapboxgl.NavigationControl()
    map.addControl(nav)

    var directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken
    })

    map.addControl(directions, "top-left")

    marker = new mapboxgl.Marker();
    let add_marker = function (event) {
        var coordinates = event.lngLat;
        console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
        marker.setLngLat(coordinates).addTo(map);
    }
    mapvt.on('click', add_marker.bind(this));


}
