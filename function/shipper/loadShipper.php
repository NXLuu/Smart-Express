<?php
require_once '../func.php';
require_once '../../class/shipper.php';

$shipperDB = new shipper($link);

$listShipper = (array)$shipperDB->loadShipper();
echo json_encode($listShipper);
