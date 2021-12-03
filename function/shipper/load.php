<?php
require_once '../../class/shipper.php';
require_once '../func.php';

$shipper = new shipper($link);
echo $shipper->load();
?>
