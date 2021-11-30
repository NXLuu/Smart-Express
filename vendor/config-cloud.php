<?php

include 'autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance([
    'cloud' => [
        'cloud_name' => 'multichoice',
        'api_key' => '918429456821834',
        'api_secret' => '33jynjvkfm5_ZNLLdZvHvkKjols'
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
