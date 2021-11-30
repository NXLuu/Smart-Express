function deleteShipper(elem) {
    let button = $(elem);
    let id = button.data('id');
    $.ajax({
        url: 'function/shipper/delete.php',
        data: {
            ma: id
        },
        type: 'POST',
        success: function (result) {
            $('#shippertbl').load('../function/shipper/load.php');
        }
    });
}

$(document).ready(function () {
    // load
    $('#shippertbl').load('../function/shipper/load.php');
    //mao 
    let map;
    let map1;

    mapboxgl.accessToken =
        "pk.eyJ1Ijoibnh1bHV1IiwiYSI6ImNrd2htN21neDB5MjUycG52dmluaWt0MzMifQ.zWntWkDOQg7zMF9VXWYt2w"




    function successLocation(position, map1) {
        // map = setupMap([position.coords.longitude, position.coords.latitude], "mapvt")
        map1 = setupMap([position.coords.longitude, position.coords.latitude], "mapvt1")
    }

    function errorLocation() {
        map = setupMap([-2.24, 53.48], "mapvt");
        map1 = setupMap([-2.24, 53.48], 'mapvt1');
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

    // $('#shippertbl').on('DOMSubtreeModified', function () {
    //     $('.deletebtn').off('click').on('click', function () {
    //         let button = $(this);
    //         let id = button.data('id');
    //         $.ajax({
    //             url: 'delete.php',
    //             data: {
    //                 ma: id
    //             },
    //             type: 'POST',
    //             success: function (result) {
    //                 $('#shippertbl').load('load.php');
    //             }
    //         });

    //     });
    // });



    $('#detailModal').on('show.bs.modal', function (event) {
        navigator.geolocation.getCurrentPosition((position) => {
            map1 = setupMap([position.coords.longitude, position.coords.latitude], "mapvt1")
        }, errorLocation, {
            enableHighAccuracy: true
        })

        let id = $(event.relatedTarget).data("id");

        $.ajax({
            url: 'function/shipper/get.php',
            data: { ma: id },
            type: 'POST',
            success: function (result) {
                let data = JSON.parse(result);
                $('#infor-ten').text(data.ten);
                $('#infor-tel').text(data.tel);
                $('#infor-DOB').text(data.DOB);
                $('#infor-pt').text(data.pt);
                $('#infor-dc').text(data.dc);
                $('#infor-tc').text(data.thCong);
                $('#infor-tb').text(data.thBai);
                
                $('#infor-anh').attr("src",data.anh);;
                addMarker(map1, { lng: data.lng, lat: data.lat });
                map1.flyTo({
                    center: [
                        data.lng,
                        data.lat
                    ],
                    essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });


            }
        });

    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        navigator.geolocation.getCurrentPosition((position) => {
            map = setupMap([position.coords.longitude, position.coords.latitude], "mapvt")
        }, errorLocation, {
            enableHighAccuracy: true
        })

        let button = $(event.relatedTarget)
        let func = button.data('func').trim();
        let id = button.data('id');
        console.log(func);
        let modal = $(this)
        let title = modal.find('.modal-title');
        let saveButton = $('#saveButton');



        if (func == 'add') {
            title.text('Thêm mới shipper');
            saveButton.off('click').on('click', function (e) {
                e.preventDefault();
                let marker = map._controls[2].mapMarker;
                let lngLat = marker.getLngLat();

                let form = $('#shipperForm');
                var data = new FormData(form[0]);
                data.append('lng', lngLat.lng);
                data.append('lat', lngLat.lat);
                $.ajax({
                    url: 'function/shipper/create.php',
                    data: data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        modal.modal('hide');
                        alert('Data added successfully !');
                        $('#shippertbl').load('../function/shipper/load.php');
                    }
                });
            })
        } else {
            title.text('Sủa thông tin shipper');
            $.ajax({
                url: 'function/shipper/get.php',
                data: { ma: id },
                type: 'POST',
                success: function (result) {
                    let data = JSON.parse(result);
                    $('#ten').val(data.ten);
                    $('#tel').val(data.tel);
                    $('#DOB').val(data.DOB);
                    $('#dc').val(data.dc);
                    $('#vt').val(data.vitri);
                    $('#lng').val(data.lng);
                    $('#lat').val(data.lat);
                    $('#pt').val(data.pt).change();
                    addMarker(map, { lng: data.lng, lat: data.lat });
                    map.flyTo({
                        center: [
                            data.lng,
                            data.lat
                        ],
                        essential: true // this animation is considered essential with respect to prefers-reduced-motion
                    });


                }
            });


            saveButton.off('click').on('click', function (e) {
                e.preventDefault();
                let marker = map._controls[2].mapMarker;
                let lngLat = marker.getLngLat();

                let form = $('#shipperForm');
                var data = new FormData(form[0]);
                data.append('lng', lngLat.lng);
                data.append('lat', lngLat.lat);
                data.append('ma', id);
                $.ajax({
                    url: 'function/shipper/update.php',
                    data: data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        modal.modal('hide');
                        alert('Data added successfully !');
                        $('#shippertbl').load('../function/shipper/load.php');
                    }
                });

            })
        }

    })
    $("#tenTK").keyup(function () {
        let tenTK = $(this).val();
        $.ajax({
            url: 'function/shipper/search.php',
            data: { ten: tenTK },
            type: 'POST',
            success: function (result) {
                $('#shippertbl').html(result);
            }
        });
    });

    // $.ajax({
    //     url: 'function/shipper/get.php',
    //     data: { ma: id },
    //     type: 'POST',
    //     success: function (result) {
    //         let data = JSON.parse(result);
    //         $('#ten').val(data.ten);
    //         $('#tel').val(data.tel);
    //         $('#DOB').val(data.DOB);
    //         $('#dc').val(data.dc);
    //         $('#vt').val(data.vitri);
    //         $('#lng').val(data.lng);
    //         $('#lat').val(data.lat);
    //         $('#pt').val(data.pt).change();
    //         addMarker(map, { lng: data.lng, lat: data.lat });
    //         map.flyTo({
    //             center: [
    //                 data.lng,
    //                 data.lat
    //             ],
    //             essential: true // this animation is considered essential with respect to prefers-reduced-motion
    //         });


    //     }
    // });
});
$