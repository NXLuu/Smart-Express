$(document).ready(function () {
    // Gửi yêu cầu lấy ra danh sách shipper uy tín
    function getBestShipper() {
        $.ajax({
            url: '../function/shipper/getReShipper.php',
            method: 'GET',
            success: function (data) {
                $('#best-shipper-slide').html(data);
            }
        });
    }

    getBestShipper();

    // Gửi yê cầu lấy ra danh sách shipper gần nhất

    function getBestDisShipper(pos) {
        $.ajax({
            url: 'function/shipper/getBestDis.php',
            data: { lng: pos.coords.longitude, lat: pos.coords.latitude },
            type: 'POST',
            success: function (result) {
                $('#best-shipper-pos-slide').html(result);
            }
        });
    }

    function errorLocation() {
        $('#nearest-shipper').remove();

    }

    navigator.geolocation.getCurrentPosition(getBestDisShipper, errorLocation, {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    })



});