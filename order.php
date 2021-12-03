<!DOCTYPE html>
<html lang="en">

<div style="position:absolute">
    <?php include_once("header.php"); ?>
</div>

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
        $.ajax({
            url: 'function/order/load.php',
            type: "GET",
            success: function(data) {
                $('#load-container').html(data);
            }
        });
    });
</script>

</html>