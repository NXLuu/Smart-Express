 <?php

    require_once '../func.php';
    require_once '../../class/order.php';

    if (count($_POST) > 0) {
        $ten1 = $_POST['ten1'];
        $tel1 = $_POST['tel1'];
        $dc1 = $_POST['dc1'];
        $lng1 = $_POST['lng1'];
        $lat1 = $_POST['lat1'];

        $ten2 = $_POST['ten2'];
        $tel2 = $_POST['tel2'];
        $dc2 = $_POST['dc2'];
        $lng2 = $_POST['lng2'];
        $lat2 = $_POST['lat2'];


        $tenSP = $_POST['tenSP'];
        $can = $_POST['can'];
        $sl = $_POST['sl'];
        $x = $_POST['x'];
        $z = $_POST['z'];
        $y = $_POST['y'];
        echo $_POST['thanhToan'];
        $thanhToan = $_POST['thanhToan'];
        $order = new order($link);
        echo $order->insert($ten1, $tel1, $dc1, $lng1, $lat1, $ten2, $tel2, $dc2, $lng2, $lat2, $tenSP, $can, $sl, $x, $y, $z, $thanhToan);
    }
    ?>