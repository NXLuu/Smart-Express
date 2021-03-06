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

    <!-- Map Box -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css" />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
</head>

<body>

    <body>
        <!-- Begin home section -->
        <section class="home-section banner" id="home">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-cust">
                <div class="container">
                    <a class="navbar-brand h1 mb-0 d-flex align-items-center" href="#">
                        <img src="asset/images/logo.png" alt="" class="pr-2">
                        <span style="
                            font-size: 1.5em;
                            font-weight: 700;
                        ">Smart</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse align-items-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ml-5">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đơn hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tài xế</a>
                            </li>
                        </ul>

                        <div class="my-2 my-lg-0 ml-4">
                            <a href="login.php" class="mr-2 btn"><i class="fal fa-user-alt"></i>
                                Đăng nhập</button>
                                <a href="#" class="btn-cust">Đăng kí</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container" style="z-index: 10; position: relative;">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="banner-content text-light">
                            <h6 class="sub-title text-yellow">Smart đơn vị giao hàng số 1 việt nam</h6>
                            <h1>Giao nhanh chóng, nhận tức thì</h1>
                            <p>Là đối tác tin cậy được tin dùng từ các thương thiệu hàng đầu Lazada, Sendo,
                                Unilever,... Smart cam kết dịch vụ giao hàng 6h trong ngày với chi phí
                                <strong>RẺ NHẤT</strong> và tỉ lệ hoàn thành đơn hàng <strong>CAO NHẤT</strong> lên đến 98%.
                            </p>
                            <a href="admin.php" class="btn-cust">Tạo đơn hàng</a>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <!-- truck 3d -->
                        <div class="container position-relative">
                            <div class="d-flex justify-content-center">
                                <canvas class="webgl" width="800" height="640"></canvas>
                            </div>
                            <img src="asset/images/bitcoin.png" alt="Anh nen" class="hero-img w-100">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Feature -->
        <section class="content-inner" id="feature">
            <div class="container">
                <div class=" text-center mb-4">
                    <h2 class="title color-1">Ưu điểm của Smart</h2>
                    <div class="separator style-2 bg-primary-l1"></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="  m-b50 ">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20 rounded-circle text-white">
                                        <i class="fal fa-hand-holding-usd"></i>
                                    </div>
                                    <div class="">
                                        <h4 class="sub-title text-capitalize color-1">PHÍ VẬN CHUYỂN CỰC RẺ</h4>
                                        <p>Phí vận chuyển chỉ từ 18.000 đ, không tăng giá giờ cao điểm.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="  m-b50 ">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20 rounded-circle text-white">
                                        <i class="fal fa-analytics"></i>
                                    </div>
                                    <div class="">
                                        <h4 class="sub-title text-capitalize color-1">TỈ LỆ THÀNH CÔNG 98%</h4>
                                        <p>Giao hàng thành công lên đến 98% và không ngừng tối ưu hơn nữa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" text-center m-b30"><img src="asset/images/free-shipping.png" class="img-sm" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="  m-b50 ">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20 rounded-circle text-white">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </div>
                                    <div class="">
                                        <h4 class="sub-title text-capitalize color-1">CẬP NHẬT TRẠNG THÁI TỨC THÌ</h4>
                                        <p>Sử dụng ứng dụng mobile app "Smart" để theo dõi trạng thái đơn hàng tức thì..</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="  m-b50 ">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20 rounded-circle text-white">
                                        <i class="fal fa-truck-container"></i>
                                    </div>
                                    <div class="">
                                        <h4 class="sub-title text-capitalize color-1">ĐỘI NGŨ TÀI XẾ TẬN TÂM</h4>
                                        <p>Tài xế Smart được đào tạo theo quy chuẩn mang lại trải nghiệm tốt nhất cho khách
                                            hàng của bạn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Introduce -->
        <section class="content-inner ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-b30">
                        <div><img src="asset//images/img6.png" class="img-fluid"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class=" style-3 mb-4">
                            <h2 class="title color-1">Tại sao chọn Smart</h2>
                            <div class="separator style-2 bg-primary"></div>
                        </div>
                        <p>Smart bắt đầu hành trình của mình với mục tiêu xây dựng một nền tảng
                            giao hàng công nghệ nhằm tối ưu thời gian giao hàng chỉ còn trong ngày.
                            Ngày qua ngày, chúng tôi càng hoàn thiện dịch vụ của mình và song hành
                            cùng thành công với khách hàng..</p>
                        <p class="m-b30">Chúng tôi đem đến những giải pháp vận chuyển tốt nhất.</p>
                        <div class="row">
                            <div class="col-sm-4 m-b30">
                                <div class="content-bx style-2 text-center">
                                    <div class="">
                                        <h2 class="counter m-0 color-1"><span>789</span></h2><span class="color-1">Khách
                                            hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 m-b30">
                                <div class="content-bx style-2 text-center">
                                    <div class="">
                                        <h2 class="counter m-0 color-1"><span>9875</span></h2><span class="color-1">Đơn
                                            hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 m-b30">
                                <div class="content-bx style-2 text-center">
                                    <div class="">
                                        <h2 class="counter m-0 color-1"><span>65</span></h2><span class="color-1">Shipper</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center m-b30 color-1">
                        <h3 style="font-weight: 700;">Được tin tưởng bởi 9,000+ Đối Tác</h3>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-1"></div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner1.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner2.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner3.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner4.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner5.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-1 "></div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner6.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner7.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner8.png" class="w-100" alt="pic">
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="our-partners">
                            <img src="asset/images/partner9.png" class="w-100" alt="pic">
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>

        <!-- Slider shipper -->
        <section class="content-inner bg-gray slider-shipper">
            <div class="container">
                <div class=" style-3 mb-4 text-center">
                    <h2 class="title color-1">Shipper uy tín</h2>
                    <div class="separator style-2 bg-primary"></div>
                </div>
                <!--Carousel Wrapper-->
                <div id="multi-shipper-slider" class="carousel slide" data-ride="carousel">

                    <!--Controls-->
                    <!-- <div class="controls-top">
                    <a class="btn-floating" href="#multi-shipper-slider" data-slide="prev"><i
                            class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-shipper-slider" data-slide="next"><i
                            class="fa fa-chevron-right"></i></a>
                </div> -->
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators color-1">
                        <li data-target="#multi-shipper-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-shipper-slider" data-slide-to="1"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox" id="best-shipper-slide">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://pbs.twimg.com/media/DLGmXUDUEAMR-N5?format=jpg&name=small" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Nguyễn Văn A</h4>
                                            <p class="card-text">Some quick example text to build on the Nguyễn Văn A and
                                                make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  ">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://ketnoiviec.s3-ap-southeast-1.amazonaws.com/community_post/1609228090_inBeiL.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Nguyễn Văn A</h4>
                                            <p class="card-text">Some quick example text to build on the Nguyễn Văn A and
                                                make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  ">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://i.guim.co.uk/img/media/4456e9ef85056619743d94d1db045648a0af7554/0_50_4086_2452/master/4086.jpg?width=465&quality=45&auto=format&fit=max&dpr=2&s=8ef28f761226a5dade34870664f6ea05" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Nguyễn Văn A</h4>
                                            <p class="card-text">Some quick example text to build on the Nguyễn Văn A and
                                                make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://3gvinaphone.com.vn/wp-content/uploads/2019/09/thu-tuc-ho-so-va-cach-dang-ky-lam-tai-xe-bebike-becar-online-6.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Nguyễn Văn A</h4>
                                            <p class="card-text">Some quick example text to build on the Nguyễn Văn A and
                                                make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  ">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://cafefcdn.com/thumb_w/650/2020/7/3/ongphungtuanduc--1593761448582158172577-crop-1593761453709275039782.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Nguyễn Văn A</h4>
                                            <p class="card-text">Some quick example text to build on the Nguyễn Văn A and
                                                make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  ">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://eshop.misa.vn/wp-content/uploads/2019/03/giao-hang-nhanh.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Nguyễn Văn A</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://vnn-imgs-f.vgcloud.vn/2018/07/16/14/ngay-lam-shipper-toi-lam-hotgirl-co-gai-kiem-70-trieu-dong-mot-thang.jpeg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  ">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-20.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  ">
                                    <div class="card mb-2 bg-gray">
                                        <img class="card-img-top img-cust" src="https://techbike.vn/attachments/26219642_1919124401434356_7503034262506130518_n-jpg.1151/" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title color-1">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-small">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Third slide-->

                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </section>

        <!-- Slider shipper -->
        <section class="content-inner bg-gray slider-shipper" id="nearest-shipper">
            <div class="container">
                <div class=" style-3 mb-4 text-center">
                    <h2 class="title color-1">Shipper gần nhất</h2>
                    <div class="separator style-2 bg-primary"></div>
                </div>
                <!--Carousel Wrapper-->
                <div id="multi-shipper-pos-slider" class="carousel slide" data-ride="carousel">

                    <!--Controls-->
                    <!-- <div class="controls-top">
                    <a class="btn-floating" href="#multi-shipper-slider" data-slide="prev"><i
                            class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-shipper-slider" data-slide="next"><i
                            class="fa fa-chevron-right"></i></a>
                </div> -->
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators color-1">
                        <li data-target="#multi-shipper-pos-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-shipper-pos-slider" data-slide-to="1"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox" id="best-shipper-pos-slide">



                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </section>

        <!-- Timeline -->
        <section class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <h2 class="color-1 sub-title">
                            Làm sao để sử dụng dịch vụ giao hàng
                        </h2>
                        <p>Thao tác đơn giản, giao diện thân thiện, theo dõi đơn hàng trực quan</p>
                        <img src="asset/images/img7.png" alt="" class="img-fluid">
                    </div>

                    <div class="col-md-7 col-sm-12">
                        <div class="timeline">
                            <div class="timeline-container ">
                                <div class="content">
                                    <h4 class="color-1">Bước 1</h4>
                                    <p>Tạo tài khoản, đăng nhập</p>
                                </div>
                            </div>
                            <div class="timeline-container right">
                                <div class="content">
                                    <h4 class="color-1">Bước 2</h4>
                                    <p>Nhập thông tin người gửi</p>
                                </div>
                            </div>
                            <div class="timeline-container ">
                                <div class="content">
                                    <h4 class="color-1">Bước 3</h4>
                                    <p>Tạo đơn giao hàng</p>
                                </div>
                            </div>
                            <div class="timeline-container right">
                                <div class="content">
                                    <h4 class="color-1">Bước 4</h4>
                                    <p>Theo dõi đơn hàng</p>
                                </div>
                            </div>
                            <div class="timeline-container ">
                                <div class="content">
                                    <h4 class="color-1">Bước 5</h4>
                                    <p>Nhận hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subcribe-->
        <section class="content-inner" style="background-image: url(asset/images/bg12.png), var(--gradient-sec);">
            <div class="container">
                <div class="row align-items-center subscribe-wraper-1 justify-content-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h2 class="text-white title m-b30">Bắt đầu tạo đơn ngay với Smart
                        </h2>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <a href="admin.php" class="btn-cust">Tạo đơn hàng</a>
                </div>
            </div>
        </section>

        <!-- Pricing table-->
        <section class="content-inner pricingtable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricingtable-wrapper">
                            <div class="pricingtable-inner text-center">
                                <div class="pricingtable-head ">
                                    <h3 class="color-1">Gói cá nhân</h3>
                                    <img src="asset/images/icon1.png" alt="" class="img-fluid">
                                </div>
                                <div class="pricingtable-price">$2<span class="red-text-sm">/1 km</span></div>
                                <div class="pricingtable-feature">
                                    <ul class="list-group list-group-flush color-1">
                                        <li class="list-group-item border-0">Đơn giá tính theo số km và trọng lượng</li>
                                        <li class="list-group-item border-0">Không hỗ trợ giao hàng ngoại quốc</li>
                                        <li class="list-group-item border-0">Trọng tải tối đa 500kg</li>
                                        <li class="list-group-item border-0">Theo dõi đơn hàng</li>
                                    </ul>
                                </div>
                                <div class="pricingtable-footer"></div>
                            </div>



                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="pricingtable-wrapper active">

                            <div class="pricingtable-inner text-center">
                                <div class="pricingtable-head ">
                                    <h3 class="color-1">Gói doanh nghiệp</h3>
                                    <img src="asset/images/icon2.png" alt="" class="img-fluid">
                                </div>
                                <div class="pricingtable-price">$4000<span class="red-text-sm">/Tháng</span></div>
                                <div class="pricingtable-feature">
                                    <ul class="list-group list-group-flush color-1">
                                        <li class="list-group-item border-0">Vận chuyển không giới hạn</li>
                                        <li class="list-group-item border-0">Trở thành đối tác tin cậy</li>
                                        <li class="list-group-item border-0">Hỗ trợ giao hàng nước ngoài</li>
                                        <li class="list-group-item border-0">Api kiểm soát hàng hóa vận chuyển</li>
                                    </ul>
                                </div>
                                <div class="pricingtable-footer"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="pricingtable-wrapper">

                            <div class="pricingtable-inner text-center">
                                <div class="pricingtable-head ">
                                    <h3 class="color-1">Theo đơn hàng</h3>
                                    <img src="asset/images/icon3.png" alt="" class="img-fluid">
                                </div>
                                <div class="pricingtable-price">$10<span class="red-text-sm">/đơn hàng</span></div>
                                <div class="pricingtable-feature">
                                    <ul class="list-group list-group-flush color-1">
                                        <li class="list-group-item border-0">Vận chuyển không giới hạn</li>
                                        <li class="list-group-item border-0">Không hỗ trợ giao hàng ngoại quốc</li>
                                        <li class="list-group-item border-0">Chi phí cố định</li>
                                        <li class="list-group-item border-0">Tối đa 10 lần 1 tài khoản</li>
                                    </ul>
                                </div>
                                <div class="pricingtable-footer"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="content-inner bg-gray slider-shipper">
            <div class="container">
                <div class=" style-3 mb-5 text-center">
                    <h2 class="title color-1">Khách hàng nói gì về Smart</h2>
                    <div class="separator style-2 bg-primary"></div>
                </div>
                <!--Carousel Wrapper-->
                <div id="multi-testimonials-slider" class="carousel slide" data-ride="carousel">

                    <!--Controls-->
                    <!-- <div class="controls-top">
                    <a class="btn-floating" href="#multi-testimonials-slider" data-slide="prev"><i
                            class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-testimonials-slider" data-slide="next"><i
                            class="fa fa-chevron-right"></i></a>
                </div> -->
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators color-1 mt-5">
                        <li data-target="#multi-testimonials-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-testimonials-slider" data-slide-to="1"></li>
                        <li data-target="#multi-testimonials-slider" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testimonial">
                                        <div class="test-pic ">
                                            <img src="asset/images/test-pic-1.jpeg" alt="">
                                            <i class="fas fa-quote-right color-1"></i>
                                        </div>
                                        <div class="test-text pl-4">
                                            <p>Dịch vụ giao hàng linh hoạt, đáp ứng về chỉ tiêu thời gian giao khá tốt, quy
                                                trình đối soát COD rõ ràng minh bạch. Đáp ứng được yêu cầu khắt khe đối với
                                                khách hàng của Box Me.</p>
                                            <strong class="testimonial-name ">Chị Vũ Thị Kiều Anh</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testimonial">
                                        <div class="test-pic ">
                                            <img src="asset/images/test-pic-2.jpeg" alt="">
                                            <i class="fas fa-quote-right color-1"></i>
                                        </div>
                                        <div class="test-text pl-4">
                                            <p>Smart là đối tác đầu tiên triển khai dịch vụ giao hàng hỏa tốc trên nền tảng
                                                Lazada, và sau hơn 02 năm hợp tác tôi hoàn toàn hài lòng về chất lượng dịch
                                                vụ, cam kết thời gian giao hàng của Smart. Lượng khách hàng sử dụng dịch vụ
                                                giao hàng Express ngày càng tăng chứng tỏ định hướng dịch vụ và lựa chọn đối
                                                tác của Lazada là đúng đắn</p>
                                            <strong class="testimonial-name ">Anh Nguyễn Ngọc Thắng</strong>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testimonial">
                                        <div class="test-pic ">
                                            <img src="asset/images/test-pic-3.jpeg" alt="">
                                            <i class="fas fa-quote-right color-1"></i>
                                        </div>
                                        <div class="test-text pl-4">
                                            <p>Với mục đích nâng cao trải nghiệm dịch vụ dành cho khách hàng mua sắm trên
                                                nền tảng của mình. Sendo luôn tìm kiếm một giải pháp để giúp đơn hàng nhanh
                                                chóng đến tay khách hàng, chúng tôi rất hài lòng về chất lượng và tốc độ
                                                giao hàng của loại hình dịch vụ giao hàng trong ngày mà Smart cung cấp.</p>
                                            <strong class="testimonial-name ">Chị Trần Thị Thanh Trúc</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Third slide-->

                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg-4">
                        <div class="widget-about">
                            <div class="footer-logo mb-3">
                                <a class="text-light d-flex align-items-center" href="#">
                                    <img src="asset/images/logo.png" alt="" class="pr-2">
                                    <span style="
                            font-size: 1.5em;
                            font-weight: 700;
                        ">Smart</span>
                                </a>
                            </div>
                            <p>Công ty vận chuyển Smart.
                                Giấy CNĐKKD số 0316242421- Ngày cấp 21/04/2020
                                Cơ quan cấp: Phòng Đăng ký kinh doanh- Sở Kế hoạch và Đầu tư TP Hồ Chí Minh
                            </p>
                            <div class="social-icon mt-3">
                                <ul class="d-flex">
                                    <li>
                                        <a href="" class="fab fa-facebook-f">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="fab fa-instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="fab fa-twitter"></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-contact">
                            <h5 class="footer-title">Liên hệ</h5>
                            <ul>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-phone-alt"></i>
                                    <span>1900 636677
                                        <br>
                                        1900 918245
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-envelope">
                                    </i>
                                    <span>smart@gmail.com
                                        <br>
                                        hotro@gmail.com
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt">
                                    </i>
                                    <span>Ha Noi
                                        <br>Viet Nam
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3025489946745!2d105.78573631490386!3d20.980505986024486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2s!4v1635208639975!5m2!1svi!2s" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </footer>



    </body>
    <script src="/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.7/dat.gui.min.js" integrity="sha512-LF8ZB1iTwi4Qvkm4pekHG4a437Y9Af5ZuwbnW4GTbAWQeR2E4KW8WF+xH8b9psevV7wIlDMx1MH9YfPqgKhA/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/index.js"></script>
    <script type="module">
        // Debug
        // const gui = new dat.GUI()
        const loader = new THREE.GLTFLoader();


        // Canvas
        const canvas = document.querySelector('canvas.webgl')

        // Scene
        const scene = new THREE.Scene()

        // Objects
        const geometry = new THREE.TorusGeometry(.7, .2, 16, 100);

        // Materials

        const material = new THREE.MeshBasicMaterial()
        material.color = new THREE.Color(0xff0000)

        // Mesh
        const sphere = new THREE.Mesh(geometry, material)
        let truck;
        let group = new THREE.Group()

        loader.load("asset/3d model/pixel_car/scene.gltf",
            (obj) => {
                truck = obj.scene
                // truck.position.set(0.86, 0.73, -0.33)
                // truck.rotation.set(0, -1.46, 0)
                truck.scale.set(0.5, 0.5, 0.5);

                // const cloudDev2 = gui.addFolder('CloudDev2')
                group.add(truck)
                loader.load("asset/3d model/carton_box/scene.gltf",
                    (obj) => {
                        let box = obj.scene
                        box.position.set(0, 0.78, 0.26)
                        box.rotation.set(0, 1.58, 0)
                        box.scale.set(0.03, 0.03, 0.03);


                        // const cloudDev2 = gui.addFolder('Box')
                        // cloudDev2.add(box.position, 'x').min(-3).max(3).step(0.01)
                        // cloudDev2.add(box.position, 'y').min(-3).max(3).step(0.01)
                        // cloudDev2.add(box.position, 'z').min(-3).max(3).step(0.01)
                        // cloudDev2.add(box.rotation, 'x').min(-3).max(3).step(0.01)
                        // cloudDev2.add(box.rotation, 'y').min(-3).max(3).step(0.01)
                        // cloudDev2.add(box.rotation, 'z').min(-3).max(100).step(0.01)
                        // cloudDev2.add(box.scale, 'x').min(0).max(10).step(0.01)
                        // cloudDev2.add(box.scale, 'y').min(0).max(10).step(0.01)
                        // cloudDev2.add(box.scale, 'z').min(0).max(10).step(0.01)

                        group.add(box)

                        tick()
                    }
                );
                // cloudDev2.add(truck.position, 'x').min(-3).max(3).step(0.01)
                // cloudDev2.add(truck.position, 'y').min(-3).max(3).step(0.01)
                // cloudDev2.add(truck.position, 'z').min(-3).max(3).step(0.01)
                // cloudDev2.add(truck.rotation, 'z').min(-3).max(3).step(0.01)
                // cloudDev2.add(truck.rotation, 'x').min(-3).max(3).step(0.01)
            }
        );
        scene.add(group)

        // scene.add(sphere)

        // Lights

        const pointLight = new THREE.PointLight(0xffffff, 0.1)
        pointLight.position.x = 2
        pointLight.position.y = 3
        pointLight.position.z = 4
        scene.add(pointLight)

        const light1 = new THREE.AmbientLight({
            color: 0x10404f,
            intensity: 10
        }); // soft white light
        scene.add(light1);
        /**
         * Sizes
         */
        const sizes = {
            width: 800,
            height: 500
        }
        sizes.width = document.documentElement.clientWidth - 100
        sizes.height = .625 * sizes.width + 100;

        if (document.documentElement.clientWidth > 1000) {
            sizes.width = 800
            sizes.height = 500;
        }

        // window.addEventListener('resize', () => {
        //     // Update sizes

        //     console.log(window.innerWidth)
        //     if (window.innerWidth <= 576) {
        //         sizes.width = 500
        //         sizes.height = 400
        //     }



        //     // Update camera
        //     camera.aspect = sizes.width / sizes.height
        //     camera.updateProjectionMatrix()

        //     // Update renderer
        //     renderer.setSize(sizes.width, sizes.height)
        //     renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
        // })

        /**
         * Camera
         */
        // Base camera
        const camera = new THREE.PerspectiveCamera(80, sizes.width / sizes.height, 0.1, 100)
        camera.position.x = 0
        camera.position.y = 0.52
        camera.position.z = 1.72
        // const cameraDev = gui.addFolder('Camera')
        // cameraDev.add(camera.position, 'x').min(-3).max(3).step(0.01)
        // cameraDev.add(camera.position, 'y').min(-3).max(3).step(0.01)
        // cameraDev.add(camera.position, 'z').min(-3).max(3).step(0.01)

        scene.add(camera)

        // Controls
        // const controls = new OrbitControls(camera, canvas)
        // controls.enableDamping = true

        /**
         * Renderer
         */
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true
        })
        renderer.setSize(sizes.width, sizes.height)
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

        /**
         * Animate
         */

        function rotateAboutPoint(obj, point, axis, theta, pointIsWorld, offset) {
            pointIsWorld = (pointIsWorld === undefined) ? false : pointIsWorld;

            if (pointIsWorld) {
                obj.parent.localToWorld(obj.position); // compensate for world coordinate
            }

            obj.position.sub(point); // remove the offset
            obj.position.applyAxisAngle(axis, theta); // rotate the POSITION
            obj.position.add(point); // re-add the offset



            if (offset) {
                // obj.rotateOnAxis(new THREE.Vector3(1, 0 , 0), theta)
                obj.rotateOnAxis(new THREE.Vector3(0, 0, 1), theta)
                // obj.rotation.x = offset.x
                // obj.rotation.y = offset.y

            } else obj.rotateOnAxis(axis, theta); // rotate the OBJECT
        }

        /* Mouse move */
        let mouseX = 0
        let mouseY = 0

        let targetX = 0
        let targetY = 0

        let halfWidth = window.innerWidth / 2
        let halfHeight = window.innerHeight / 2

        let isMouseDown = false

        canvas.onmousedown = function(event) {
            isMouseDown = true
            let pastMouseX = event.clientX
            let pastMouseY = event.clienty

            function onMouseMove(event) {
                mouseX = (event.clientX - pastMouseX)
                mouseY = (event.clientY - pastMouseY)
                console.log(canvas.offsetHeight)
                console.log(canvas.offsetWidth)
                console.log(mouseX, mouseY)
            }

            document.addEventListener('mousemove', onMouseMove);

            canvas.onmouseup = function() {
                document.removeEventListener('mousemove', onMouseMove)
                canvas.onmouseup = null
                isMouseDown = false
            };

            canvas.onmouseover = function() {
                document.removeEventListener('mousemove', onMouseMove)
                canvas.onmouseover = null
                isMouseDown = false
            };
        };

        const clock = new THREE.Clock()

        const tick = () => {

            targetX = mouseX * 0.001
            targetY = mouseY * 0.001


            const elapsedTime = clock.getElapsedTime()

            // Update objects
            // group.rotation.y = 1 * elapsedTime
            rotateAboutPoint(group, new THREE.Vector3(0, 10, 0.4), new THREE.Vector3(0, 1, 0), THREE.Math.degToRad(0.1), true)
            if (isMouseDown != false)
                rotateAboutPoint(group, new THREE.Vector3(0, 10, 0.4), new THREE.Vector3(0, 1, 0), THREE.Math.degToRad(3 * (targetX)), true)
            // Update Orbital Controls
            // controls.update()

            // Render
            renderer.render(scene, camera)

            // Call tick again on the next frame
            window.requestAnimationFrame(tick)
        }
    </script>

</html>