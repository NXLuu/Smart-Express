<?php
require_once '../../class/shipper.php';
require_once '../func.php';

$shipper = new shipper($link);
echo $shipper->load();
?>

<script type="text/javascript">
    $('.deletebtn').on('click',function() {
        let button = $(this);
        let id = button.data('id');
        $.ajax({
            url: 'delete.php',
            data: {
                ma: id
            },
            type: 'POST',
            success: function(result) {
                $('#shippertbl').load('load.php');
            }
        });

    });
</script>