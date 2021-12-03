<?php
require_once '../func.php';
require_once '../../class/shipper.php';

if (isset($_POST['ma'])) {
    $shipper = new shipper($link);
    $data = $shipper->loadOrder($_POST['ma']);
    echo json_encode($data);
}

