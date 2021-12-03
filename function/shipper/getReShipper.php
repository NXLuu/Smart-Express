<?php
require_once '../func.php';
require_once '../../class/shipper.php';

$shipper = new shipper($link);
$shippers = $shipper->loadShipper();
usort($shippers, 'my_sort_tc');

function my_sort_tc($a, $b)
{
    return $a->tc < $b->tc;
};

$text = '<div class="carousel-item active"><div class="row">';

for ($i = 0; $i < 6; $i++) {
    $ship = $shippers[$i];
    if ($i == 3) {
        $text .= ' </div></div><div class="carousel-item"><div class="row">';
    }
    $text .= ' <div class="col-md-4">
            <div class="card mb-2 bg-gray">
                <img class="card-img-top img-cust" src="' . $ship->anh . '" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title color-1">' . $ship->ten . '</h4>
                    <p class="card-text">
                    <h5>' . $ship->tc . ' đơn thành công</h5>
                    Số điện thoại: ' . $ship->sdt . '
                    </p>
                    <a class="btn btn-small">Liên hệ ngay</a>
                </div>
            </div>
        </div>';
};
$text .= ' </div></div>';
echo $text;
