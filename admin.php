<!DOCTYPE html>
<div style="position:absolute">
    <?php include_once("header.php"); ?>
</div>
<?php
if (!isset($_SESSION['user']))  // If session is not set then redirect to Login Page
{
    header("Location:login.php");
}
?>


<html lang="en">



<body>

    <div class="container-fluid p-0">
        <div class="row" id="body-row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- sidebar-container END -->

            <div class="col bg-gray p-0">
                <?php include "sidebarHeader.php"; ?>



                <section class="container-layout">
                    <div class="container">
                        <div class="container-inner">
                            <div class="inner">
                                <h3 class="">Chào bạn</h3>
                                <p>Cùng trải nghiệm dịch vụ vận chuyển với Smart Express nhé!</p>
                            </div>
                        </div>

                        <div class="container-inner">
                            <div class="inner no-red-border" id="load-container">
                                <div class="inner-head">
                                    <h5 class="font-weight-normal">Tạo đơn hàng mới</h5>
                                </div>
                                <div>
                                    <form id="orderForm">
                                        <div class="group pl-4">
                                            <div>
                                                <div class="form-title">
                                                    <i class="fas fa-map-marker-alt text-black-50"></i>
                                                    <span>Địa chỉ Lấy hàng</span>
                                                    <div class="separator style-2 bg-primary-l1 d-block mt-2 separator-small">
                                                    </div>
                                                </div>
                                                <div class="form-content p-4">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="ten1">Tên người gửi</label>
                                                            <input type="text" class="form-control" id="ten1" placeholder="" name="ten1">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="tel1">Số điện thoại người gửi</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">+84</div>
                                                                <input type="tel" class="form-control" id="tel1" placeholder="Số điện thoại" name="tel1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dc1">Địa chỉ</label>
                                                        <input type="text" class="form-control" id="dc1" placeholder="" name="dc1">
                                                        <div style="position: relative; width: 100%; height: 100%;">
                                                            <div id="send-map"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-title">
                                                    <i class="fas fa-clipboard-list text-black-50"></i>
                                                    <span>Thông tin đơn hàng</span>
                                                    <div class="separator style-2 bg-primary-l1 d-block mt-2 separator-small">
                                                    </div>
                                                </div>
                                                <div class="form-content p-4">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="ten2">Tên người nhận</label>
                                                            <input type="text" class="form-control" id="ten2" placeholder="" name="ten2">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="tel2">Số điện thoại người nhận</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">+84</div>
                                                                <input type="text" class="form-control" id="tel2" placeholder="Số điện thoại" name="tel2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dc2">Địa chỉ</label>
                                                        <input type="text" class="form-control" id="dc2" placeholder="" name="dc2">
                                                        <div id="rev-map"></div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="can">Tổng khối lượng</label>
                                                            <div class="input-group-prepend">
                                                                <input type="number" class="form-control" id="can" placeholder="Vui lòng nhập thông tin" name="can">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Kích thước đơn hàng</label>
                                                            <div class="row">
                                                                <div class="input-group-append col-sm-4">

                                                                    <input type="text" class="form-control" id="x" name="x">
                                                                    <div class="input-group-text">CM</div>

                                                                </div>
                                                                <div class="input-group-prepend col-sm-4">
                                                                    <input type="text" class="form-control" id="y" name="y">
                                                                    <div class="input-group-text">CM</div>

                                                                </div>
                                                                <div class="input-group-prepend col-sm-4">
                                                                    <input type="text" class="form-control" id="z" name="z">
                                                                    <div class="input-group-text">CM</div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="tenSP">Tên sản phẩm</label>
                                                            <input type="text" class="form-control" id="tenSP" placeholder="Vui lòng nhập thông tin" name="tenSP">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="sl" class="d-block">Số lượng sản
                                                                phẩm</label>
                                                            <span class="input-number-decrement">–</span><input class="input-number" type="text" value="1" min="0" max="10" id="sl" name="sl"><span class="input-number-increment">+</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label for="customRadioInline1" class="d-block">Thanh toán cước
                                                            phí vận chuyển</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline1" name="thanhToan" class="custom-control-input" checked value="Người gửi trả">
                                                            <label class="custom-control-label" for="customRadioInline1">Người gửi trả</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline2" name="thanhToan" class="custom-control-input" value="Người nhận trả">
                                                            <label class="custom-control-label" for="customRadioInline2">Người nhận trả</label>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-primary mt-4" id="submit-btn">Lưu và tạo
                                                        đơn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Detail Model -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Tạo đơn hàng thành công</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="showOrder">Tất cả đơn hàng</button>
                    <button type="button" class="btn btn-primary" id="createOrder">Tiếp tục tạo</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/order.js"></script>
<script>
    document.querySelector(".input-number-decrement").onclick = function() {

        let input = document.querySelector(".input-number");
        if (input.value >= 1)
            input.value = --input.value;
    }

    document.querySelector(".input-number-increment").onclick = function() {

        let input = document.querySelector(".input-number");
        input.value = ++input.value;
    }
</script>

</html>