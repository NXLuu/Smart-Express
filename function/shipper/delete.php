<?php
require_once '../func.php';
require_once '../../class/shipper.php';

if (isset($_POST['ma'])) {
    $shipper = new shipper($link);
    $data = $shipper->delete($_POST['ma']);
}

