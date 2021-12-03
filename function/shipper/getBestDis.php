
<?php
require_once '../../class/order.php';
require_once '../func.php';
require_once '../../class/shipper.php';
if (isset($_POST['lng']) && isset($_POST['lat'])) {
    $shipperDB = new shipper($link);
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    $listShipper = (array)$shipperDB->loadShipper();
    $out = "";
    foreach ($listShipper as $shipper) {
        $max = 2147483647;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mapbox.com/directions/v5/mapbox/cycling/' . $lng . ',' . $lat . ';' . $shipper->lng . ',' . $shipper->lat . '?access_token=pk.eyJ1Ijoibnh1bHV1IiwiYSI6ImNrd2htNWt0eDB6cHMyc280emZlOW1ucHgifQ.uf-tpLDZIXkUa_lIog9WXA',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_TIMEOUT => 0,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response);
        $routes = $response->routes;
        $distance = $routes[0]->distance;

        $shipper->distance = round($distance / 1000, 2);
    }

    function my_sort_tc($a, $b)
    {
        return $a->distance > $b->distance;
    };
    usort($listShipper, 'my_sort_tc');



    $text = '<div class="carousel-item active"><div class="row">';

    for ($i = 0; $i < 6; $i++) {
        $ship = $listShipper[$i];
        if ($i == 3) {
            $text .= ' </div></div><div class="carousel-item"><div class="row">';
        }
        $text .= ' <div class="col-md-4">
            <div class="card mb-2 bg-gray">
                <img class="card-img-top img-cust" src="' . $ship->anh . '" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title color-1">' . $ship->ten . '</h4>
                    <p class="card-text">
                    <h5>Cách bạn: ' . $ship->distance . ' km</h5>
                    Số điện thoại: ' . $ship->sdt . '
                    </p>
                    <a class="btn btn-small">Liên hệ ngay</a>
                </div>
            </div>
        </div>';
    };
    $text .= ' </div></div>';
    echo $text;
}
