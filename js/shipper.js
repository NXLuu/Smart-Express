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
function checkCompleteOrder(elem) {

}

$(document).ready(function () {
    // Load nội dung bảng shipper
    $('#shippertbl').load('../function/shipper/load.php');

    // Tự động thêm shipper
    $('#auto-add-btn').on('click', function () {
        $('#loadingModal').modal('show');
        $.ajax({
            url: 'function/order/autoAddOrder.php',
            type: 'GET',
            success: function (res) {
                $('#loadingModal .modal-body').html(res);
            }
        });
    })

    //Khởi tạo biến map
    let map;
    let map1;
    let marker1 = [];
    let routes = [];

    mapboxgl.accessToken =
        "pk.eyJ1Ijoibnh1bHV1IiwiYSI6ImNrd2htN21neDB5MjUycG52dmluaWt0MzMifQ.zWntWkDOQg7zMF9VXWYt2w"

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

        mapvt.on('click', add_marker);

        return mapvt;

    }

    function loadNotProcessOrder() {
        $('#select-order').load('../function/order/loadNotProcess.php');
    }

    function loadTableOrder(idShipper, listOrder) {
        let text = `<table class="table">
                                    <thead class="bg-dark" style="background: rgb(91,39,130);background: radial-gradient(circle, rgba(91,39,130,1) 14%, rgba(33,30,97,1) 95%);color: white;">
                                        <tr>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Địa chỉ gửi</th>
                                            <th scope="col">SDT gửi</th>
                                            <th scope="col">Địa chỉ gửi</th>
                                            <th scope="col">SĐT nhận</th>
                                            <th scope="col">Tên hàng</th>
                                            <th scope="col">Đã hoàn thành</th>
                                        </tr>
                                    </thead>
                                    <tbody>`;

        listOrder.forEach((order) => {
            let check = "";
            if (order.tt == "Đã giao hàng")
                check = "checked";
            let textRow = `<tr>`;
            textRow = `<td>${order.ma}</td>`
                + `<td>${order.p1.dc}</td>`
                + `<td>${order.p1.sdt}</td>`
                + `<td>${order.p2.dc}</td>`
                + `<td>${order.p2.sdt}</td>`
                + `<td>${order.tenSP}</td>`
                + `<td>`
                + `<input data-id="${order.ma}" class="form-check-input check-complete-order" type="checkbox" ${check} onclick="checkCompleteOrder(this)" ">`
                + `</td>`;
            textRow += '</tr>';
            text += textRow;
        })
        text += '</tbody></table>';

        $('#table-order').html(text);
        $('.check-complete-order').on('click', function () {
            let isCheck = this.checked;
            let orderId = $(this).data('id');
            $.ajax({
                type: "POST",
                url: 'function/order/completeOrder.php',
                data: { maOrder: orderId, type: isCheck, maShipper: idShipper },
                success: function () {
                    var settings = {
                        "url": "function/shipper/loadOrder.php",
                        "method": "POST",
                        "data": { ma: idShipper }

                    };
                    $.ajax(settings).done(function (response) {
                        let data = JSON.parse(response);
                        updateMapMarker(data);
                        loadInforShipper(idShipper);
                    });
                }
            });
        })
    }

    function addOrderMarker(p, markerClass, sp) {
        const el = document.createElement('div');
        el.className = markerClass;

        let marker = new mapboxgl.Marker(el);
        marker
            .setLngLat({ lng: p.kinh, lat: p.vi })
            .setPopup(
                new mapboxgl.Popup({ offset: 25 }) // add popups
                    .setHTML(
                        `<h3>${sp}</h3><p>${p.sdt}</p>`
                    )
            ).addTo(map1);


        marker1.push(marker);
    }

    function getRoute(id, lngFrom, latFrom, lngTo, latTo) {

        $.get(
            `https://api.mapbox.com/directions/v5/mapbox/cycling/${lngFrom},${latFrom};${lngTo},${latTo}?steps=true&geometries=geojson&access_token=${mapboxgl.accessToken}`,
            function (res) {
                const data = res.routes[0];
                const route = data.geometry.coordinates;
                const geojson = {
                    type: 'Feature',
                    properties: {},
                    geometry: {
                        type: 'LineString',
                        coordinates: route
                    }
                };
                if (map1.getSource(id)) {
                    map1.getSource(id).setData(geojson);
                }
                else {
                    routes.push(id);
                    map1.addLayer({
                        id: id,
                        type: 'line',
                        source: {
                            type: 'geojson',
                            data: geojson
                        },
                        paint: {
                            'line-color': '#3887be',
                            'line-width': 7,
                            'line-opacity': 0.75
                        }
                    });
                }
            }
        );

    }

    function updateMapMarker(listOrder) {
        marker1.forEach((marker) => marker.remove());
        marker1 = [];
        let marker = map1._controls[2].mapMarker;
        let lngLat = marker.getLngLat();
        routes.forEach(function (route) {
            if (map1.getSource(route)) {
                map1.removeLayer(route);
                map1.removeSource(route);
            }
        })
        listOrder.forEach((order) => {
            if (order.tt == "Đang giao hàng") {
                let p1 = order.p1;
                let p2 = order.p2;
                let id = p1.ma + p2.ma;
                addOrderMarker(p1, "marker1", order.tenSP);
                addOrderMarker(p2, "marker2", order.tenSP);
                getRoute(id, p1.kinh, p1.vi, p2.kinh, p2.vi);
                getRoute(p1.ma, lngLat.lng, lngLat.lat, p1.kinh, p1.vi);
            }
        })
    }

    function loadDetail(id) {
        var settings = {
            "url": "function/shipper/loadOrder.php",
            "method": "POST",
            "data": { ma: id }

        };

        $.ajax(settings).done(function (response) {
            let data = JSON.parse(response);
            loadTableOrder(id, data);
            updateMapMarker(data);
            console.dir(data);
        });
    }

    function loadInforShipper(id) {
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
                $('#infor-anh').attr("src", data.anh);;
                addMarker(map1, { lng: data.lng, lat: data.lat });
                map1.flyTo({
                    center: [
                        data.lng,
                        data.lat
                    ],
                    essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });
                loadDetail(id);
            }


        });
    }

    $('#detailModal').on('show.bs.modal', function (event) {
        navigator.geolocation.getCurrentPosition((position) => {
            map1 = setupMap([position.coords.longitude, position.coords.latitude], "mapvt1")
        }, errorLocation, {
            enableHighAccuracy: true
        })

        loadNotProcessOrder();

        let id = $(event.relatedTarget).data("id");
        loadInforShipper(id);

        $('#add-order-shipper').on('click', function () {
            let orderId = $('#select-order select').val();
            $.ajax({
                url: 'function/order/addOrderToShipper.php',
                data: { maOrder: orderId, maShipper: id },
                type: 'POST',
                success: function (result) {
                    loadNotProcessOrder();
                    loadDetail(id);
                }
            });
        })

    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        navigator.geolocation.getCurrentPosition((position) => {
            let lng = position.coords.longitude;
            let lat = position.coords.latitude;
            map = setupMap({ lng: lng, lat: lat }, "mapvt")
            addMarker(map, { lng: lng, lat: lat });
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
                        alert('Thêm shipper thành công!');
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
                        essential: true 
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
                        alert('Sửa thông tin thành công!');
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

  
});
$