<?php

include 'autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance([
    'cloud' => [
        'cloud_name' => 'multichoice',
        'api_key' => '',
        'api_secret' => ''
    ],
    'url' => [
        'secure' => true
    ]
]);

function uploadImage($anh)
{
    $anhUrl = (new UploadApi())->upload($anh);
    return $anhUrl;
}
