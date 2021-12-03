<?php
require_once '../../class/order.php';
require_once '../func.php';
$order = new order($link);
$count = $order->count();
$cl = new stdClass();
$out = "";

if (count($_POST) > 0) {
    $out = $order->load($_POST["index"]);
} else {
    $out = $order->load(1);
}
$out .= '<nav aria-label="Page navigation example">
        <ul class="pagination">';

for ($i = 1; $i <= ceil($count / 5); $i++) {
    $out .=  '<li class="page-item"><a class="page-link" data-id="' . $i . '">' . $i . '</a></li>';
}
$out .= '</ul></nav>';
echo $out;

?>
<script>
    $(".badge").each(function() {
        if ($(this).text() == "Đang xử lý") {
            $(this).addClass("bg-soft-danger");
        } else if ($(this).text() == "Đang giao hàng") {
            $(this).addClass("bg-soft-warning");
        } else {
            $(this).addClass("bg-soft-success");
        }
    })

    $(".page-link").on('click', function() {
        let index = $(this).data('id');
        $.ajax({
            url: 'function/order/load.php',
            type: "POST",
            data: {index: index},
            success: function(data) {
                $('#load-container').html(data);
            }
        });
    })
</script>