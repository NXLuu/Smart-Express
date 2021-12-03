<?php
require_once '../../class/order.php';
require_once '../func.php';

if (count($_POST) > 0) {
    $orderDB = new order($link);
    $maOrder = $_POST['maOrder'];
    $maShipper = $_POST['maShipper'];
    if ($_POST['type'] == "true") {
        $orderDB->updateStatus($maOrder, $maShipper, "Đã giao hàng");
    } else {
        $orderDB->updateStatus($maOrder, $maShipper, "Đang giao hàng");
    }
}
