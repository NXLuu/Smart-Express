<?php
require_once '../../class/order.php';
require_once '../func.php';

if (count($_POST) > 0) {
    $order = new order($link);
    $order->addOrderToShipper($_POST["maOrder"], $_POST["maShipper"]);
}
