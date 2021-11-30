<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'luuvip16520');
define('DB_NAME', 'shipperql');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kiem tra ket noi
if ($link == false) {
    die('LỖI: Không thể kết nối đến csdl'.mysqli_connect_error());
}

?>