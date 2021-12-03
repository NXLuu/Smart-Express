<?php
require_once '../../class/order.php';
require_once '../func.php';
require_once '../../class/shipper.php';

$orderDB = new order($link);
$shipperDB = new shipper($link);

$listOrder = (array)$orderDB->loadOrder1();
$listShipper = (array)$shipperDB->loadShipper();
$out = "";
foreach ($listOrder as $order) {
    $max = 2147483647;
    $maxId;
    $maxTen;
    $curl = curl_init();

    foreach ($listShipper as $shipper) {

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mapbox.com/directions/v5/mapbox/cycling/' . $order->p1["kinh"] . ',' . $order->p1["vi"] . ';' . $shipper->lng . ',' . $shipper->lat . '?access_token=pk.eyJ1Ijoibnh1bHV1IiwiYSI6ImNrd2htNWt0eDB6cHMyc280emZlOW1ucHgifQ.uf-tpLDZIXkUa_lIog9WXA',
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
        if ($distance < $max) {
            $max = $distance;
            $maxId = $shipper->ma;
            $maxTen = $shipper->ten;
        }
    }

    $orderDB->addOrderToShipper($order->ma, $maxId);
    $out .= '<h6>Đã gán đơn hàng ' . $order->ma . ' cho ' . $maxId . ' - ' . $maxTen . '</h6>';
}
if ($out == "")
    echo "Không có đơn nào chưa được giao";
else echo $out;
