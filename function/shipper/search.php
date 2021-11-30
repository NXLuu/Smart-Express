<?php
require_once '../func.php';
require_once '../../class/shipper.php';

if (isset($_POST['ten'])) {
    $shipper = new shipper($link);
    $data = $shipper->search($_POST['ten']);
    echo $data;
}
