<!DOCTYPE html>
<html lang="en">

<div style="position:absolute">
    <?php include_once("header.php"); ?>
</div>
<style>
    #map,
    #mapvt {
        width: 400px;
        height: 300px;
    }
</style>

<body>
    <div class="container-fluid p-0">
        <div class="row" id="body-row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- sidebar-container END -->

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
                    <div class="container-inner">
                        <div class="inner">
                            <section class="text-center d-flex align-items-center justify-content-between py-2 mt-5 mb-3">
                                <h4 class="m-0">Quản lý shipper</h4>
                                <h5 class="m-0 d-flex align-items-center">
                                    <a id="auto-add-btn" class="btn btn-outline-secondary mr-2">
                                        <i class="fas fa-sync-alt"></i>
                                        Tự động thêm shipper
                                    </a>
                                    <a class="addBtn btn text-white d-flex align-items-center p-0" data-toggle="modal" data-target="#exampleModal" data-func="add">
                                        <i class="fas fa-plus"></i>
                                        <div class="addShipBtn">
                                            Thêm mới shipper
                                        </div>
                                    </a>
                                    <form class="d-flex m-0" action="search" method="post">
                                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm shipper" aria-label="Search" name="tenTk" value="" id="tenTK">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </h5>
                            </section>
                            <div id="shippertbl">

                            </div>

                        </div>

                    </div>
                </section>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin shipper</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="shipperForm">
                        <div class="group">
                            <div>
                                <div class="form-title">
                                    <i class="fas fa-map-marker-alt text-black-50"></i>
                                    <span>Shipper</span>
                                    <div class="separator style-2 bg-primary-l1 d-block mt-2 separator-small">
                                    </div>
                                </div>
                                <div class="form-content p-4">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="ten">Họ và tên</label>
                                            <input type="text" class="form-control" id="ten" placeholder="Vui lòng nhập thông tin" name="ten">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tel">Số điện thoại</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">+84</div>
                                                <input type="phone" class="form-control" id="tel" placeholder="Số điện thoại" name="sdt">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="DOB">Ngày Sinh</label>
                                        <input type="date" class="form-control" id="DOB" placeholder="" name="DOB">
                                    </div>
                                    <div class="form-group">
                                        <label for="dc">Địa chỉ</label>
                                        <input type="text" class="form-control" id="dc" placeholder="" name="diaChi">
                                    </div>
                                    <div class="form-group">
                                        <label for="vt">Vị trí</label>
                                        <input type="text" class="form-control" id="vt" name="vt">
                                    </div>
                                    <div class="form-group">
                                        <div id="mapvt"></div>
                                        <input type="text" hidden class="form-control" id="lng" name="lng">
                                        <input type="text" hidden class="form-control" id="lat" name="lat">
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select" name="pt" id="pt">
                                            <option selected>Chọn phương tiện</option>
                                            <option value="Xe máy">Xe máy</option>
                                            <option value="Ô tô">Ô tô</option>
                                            <option value="Xe tải">Xe tải</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="anh" class="form-label">Ảnh đại diện</label>
                                    </div>
                                    <div class="custom-file">
                                        <input class="form-control" type="file" id="anh" name="anh">
                                        <label class="custom-file-label" for="anh">Choose file...</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveButton">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Model -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLable">Thông tin chi tiết</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row infor-shipper">
                            <div class="col-sm-4">
                                <img id="infor-anh" src="https://picsum.photos/id/237/200/300" alt="" style="width: 100%; height: 100%; max-height: 400px">
                            </div>
                            <div class="col-sm-8">
                                <h3 class="mb-3" id="infor-ten">Nguyễn Văn A</h3>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-calendar-alt pr-2"></i>
                                    <h6 class="m-0">Ngày sinh: <span id="infor-DOB"></span></h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-phone-volume pr-2"></i>
                                    <h6 class="m-0">Số điện thoại: <span id="infor-tel"></span></h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-car pr-2"></i>
                                    <h6 class="m-0">Phương tiện: <span id="infor-pt"></span></h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt pr-2"></i>
                                    <h6 class="m-0">Địa chỉ: <span id="infor-dc"></span></h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-clipboard-check pr-2"></i>
                                    <h6 class="m-0">Đơn thành công: <span id="infor-tc"></span></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-clipboard-prescription pr-2"></i>
                                    <h6 class="m-0">Đơn thất bại: <span id="infor-tb"></span></h6>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <h3 class=>Vị trí</h3>
                                <div style="position: relative; height: 400px; width: 100%">
                                    <div id="mapvt1" style="width: 100%; height: 100%;"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <h3 class=>Đơn hàng</h3>
                                <div class="d-flex align-items-center mb-3">
                                    <div id="select-order" class="mr-2">
                                        <select class="form-select p-2" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" id="add-order-shipper">Thêm đơn cho shipper</button>

                                </div>
                                <div id="table-order">

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveButton">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loadingModal" tabindex="-1" aria-labelledby="loadingLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loadingLabel">Đang Load dữ liệu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Bạn vui lòng chờ xíu!!!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@mapbox/polyline@1.1.1/src/polyline.min.js"></script>
<script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
<script src="js/shipper.js"></script>


</html>