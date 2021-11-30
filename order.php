<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic HTML Meta tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Keywords-->
    <meta name='keywords' content='website developer, pet project, portfolio'>

    <!-- Description about 150 words-->
    <meta name='description' content='This is a personal project of mine aimed at training my skills and web development. If you want to find a good web developer you can contact with me'>

    <!--Subject-->
    <meta name='subject' content='My portfolio'>

    <!--Copyright-->
    <meta name='copyright' content='Xuan Luu Nguyen'>

    <!--Language-->
    <meta name='language' content='ES'>

    <!--Meta facebook-->
    <meta property="og:url" content="nxuluu.tk" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="My Portfolio | Web Developer Resume" />
    <meta property="og:image" content="https://nxuluu.tk/img/realmeta.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="500">

    <link rel="icon" href="asset/images/ln-logo.png">
    <title>Smart - Giao hàng</title>

    <!--Style-->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" href="style/style.css">

    <!-- Fonts -->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" id="margo-fonts-css" href="//fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800%26display%3Dswap&amp;ver=1.0.0" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--Boostrap v4.6.0-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- GLTF loader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>


    <link rel="stylesheet" href="style/sidebar.css">

</head>

<body>
    <div class="container-fluid p-0">
        <div class="row" id="body-row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>

            <div class="col bg-gray p-0">
                <header class="header-main-content d-flex justify-content-end">
                    <section class="help mr-5">
                        <a href="">
                            <i class="fas fa-question"></i>
                            <span>Trợ giúp</span>
                        </a>
                    </section>
                    <section class="account d-flex align-items-center mr-5">
                        <img src="asset/images/avatar.jpg" alt="" class="w-100">
                        <span class="ml-2">0973389104</span>
                    </section>
                </header>


                <section class="container-layout">
                    <div class="container">


                        <div class="container-inner">
                            <div class="inner no-red-border">
                                <div class="inner-head">
                                    <h5 class="font-weight-normal">Theo dõi đơn hàng</h5>
                                </div>
                                <div class="overflow-auto" id="load-container">
                                    <table class="table w-100">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mã vận đơn</th>
                                                <th scope="col">Thời gian tạo đơn</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Tên Người nhận</th>
                                                <th scope="col">Địa chỉ người nhận</th>
                                                <th scope="col">Loại dịch vụ</th>
                                                <th scope="col">Hình thức thanh toán</th>
                                                <th scope="col">Hoạt động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>20-10-2021</td>
                                                <td>Đang giao</td>
                                                <td>Bắc</td>
                                                <td>Hà Giang</td>
                                                <td>Giao hàng cá nhân</td>
                                                <td>Trả tiền khi nhận hàng</td>
                                                <td class="d-flex">
                                                    <a href="" class="btn">Sửa</a>
                                                    <a href="" class="btn">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>30-10-2021</td>
                                                <td>Đã nhận</td>
                                                <td>Nam</td>
                                                <td>Bắc Ninh</td>
                                                <td>Giao hàng cá nhân</td>
                                                <td>Trả tiền khi nhận hàng</td>
                                                <td class="d-flex">
                                                    <a href="" class="btn">Sửa</a>
                                                    <a href="" class="btn">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>20-10-2021</td>
                                                <td>Chớ lấy hàng</td>
                                                <td>Đông</td>
                                                <td>Nam Định</td>
                                                <td>Giao hàng cá nhân</td>
                                                <td>Trả tiền khi nhận hàng</td>
                                                <td class="d-flex">
                                                    <a href="" class="btn">Sửa</a>
                                                    <a href="" class="btn">Xóa</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#load-container').load('../function/order/load.php');
    });
</script>

</html>