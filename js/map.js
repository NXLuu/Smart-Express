
$(document).ready(function () {
    // Danh sách marker shipper
    let markerShipper = new Map();

    // Config bản đồ
    let map;

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
        const mapvt = new mapboxgl.Map({
            container: "mapL",
            style: "mapbox://styles/mapbox/streets-v11",
            center: center,
            zoom: 15
        });


        const nav = new mapboxgl.NavigationControl()
        mapvt.addControl(nav)

        map = mapvt;
    }

    // Hàm thêm điểm đánh dấu 
    function addMarker(id, coor) {
        marker = new mapboxgl.Marker();
        marker.setLngLat(coor);
        marker.addTo(map);
        markerShipper.set(id, marker);
    }


    // Hiển thị shipper trên thanh sidebar
    $.ajax({
        url: 'function/shipper/loadShipper.php',
        type: 'GET',
        success: function (result) {
            let data = JSON.parse(result);
            let textHtml = '';
            data.forEach(e => {
                textHtml += ` <a id="${e.ma}" class="d-flex align-items-center pl-2 shipper-pos" >
                  <img src="${e.anh}"" alt="" class="rounded-circle" style="width: 40px; height: 40px;">
                  <p class="pl-2 m-0">${e.ten}</p>
              </a> `;
                addMarker(e.ma, { lng: e.lng, lat: e.lat });
            });


            $('#sub-menu-map').html(textHtml);
            $('.shipper-pos').on('click', function () {
                let id = $(this).attr('id');
                let marker = markerShipper.get(id).getLngLat();
                map.flyTo({
                    center: [
                        marker.lng,
                        marker.lat
                    ],
                    essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });
            })
        }
    });



});

