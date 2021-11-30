<?php
require_once '../../class/order.php';
require_once '../func.php';

$order = new order($link);
echo $order->load();
