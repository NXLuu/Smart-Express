<?php
require_once '../func.php';
require_once '../../class/shipper.php';

if (isset($_POST['ma'])) {
    $shipper = new shipper($link);
    $data = $shipper->get_row($_POST['ma']);
    echo json_encode($data);
}
