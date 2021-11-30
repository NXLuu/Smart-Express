 <?php

	require_once '../func.php';
	include '../../vendor/config-cloud.php';
	require_once '../../class/shipper.php';

	if (count($_POST) > 0) {
		$ten = $_POST['ten'];
		$sdt = $_POST['sdt'];
		$lng = $_POST['lng'];
		$lat = $_POST['lat'];
		$diaChi = $_POST['diaChi'];
		$vt = $_POST['vt'];
		$pt = $_POST['pt'];
		$anh = $_FILES['anh']['tmp_name'];
		$DOB = $_POST['DOB'];
		$anhurl = uploadImage($anh)['secure_url'];
		echo $anhurl . " " . $ten;
		phpinfo();



		$shipper = new shipper($link);
		echo $shipper->insert($ten, $sdt, $DOB, $diaChi, $vt, $lng, $lat, $pt, $anhurl);
	}


	?>