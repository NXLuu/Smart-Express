<?php
class shipper
{
    public $link;

    function __construct($link)
    {
        $this->link = $link;
    }

    public function loadShipper()
    {
        $listShipper = array();
        $sql = "SELECT * FROM shipper";
        if ($result = mysqli_query($this->link, $sql)) {
                while ($row = mysqli_fetch_array($result)) {
                    $shipper = new stdClass();
                    $shipper->ma = $row["ma"];
                    $shipper->sdt = $row["tel"];
                    $shipper->ten = $row["ten"];
                    $shipper->lng = $row["lng"];
                    $shipper->lat = $row["lat"];
                    $shipper->anh = $row["anh"];
                    $shipper->tc = (int)$row["thCong"];
                    array_push($listShipper, $shipper);
                }
        } else {
        }
        return $listShipper;
    }

    public function loadOrder($id)
    {
        $listOrder = array();

        $sql = 'SELECT * FROM don WHERE maShipper = ?';
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("i", $id);

        $stmt->execute();

        if ($result = $stmt->get_result()) {

            if (mysqli_num_rows($result)) {

                while ($row = mysqli_fetch_array($result)) {
                    $order = new stdClass();
                    $sql1 = "SELECT * FROM nguoi WHERE ma=" . $row["maGui"];
                    $sql2 = "SELECT * FROM nguoi WHERE ma=" . $row["maNhan"];
                    $sql3 = "SELECT * FROM size WHERE ma=" . $row["maSize"];
                    $res1 = mysqli_query($this->link, $sql1);
                    $p1 = mysqli_fetch_array($res1);


                    $res2 = mysqli_query($this->link, $sql2);
                    $p2 = mysqli_fetch_array($res2);


                    $res3 = mysqli_query($this->link, $sql3);
                    $size = mysqli_fetch_array($res3);

                    $ma = $row["ma"];
                    $tenSP = $row["tenSP"];
                    $tt = $row["tt"];

                    $order->ma = $ma;
                    $order->tenSP = $tenSP;
                    $order->tt = $tt;
                    $order->p1 = $p1;
                    $order->p2 = $p2;
                    $order->size = $size;

                    array_push($listOrder, $order);
                }
            } else {
            }
        } else {
        }

        return $listOrder;
    }

    public function load()
    {
        $sql = "SELECT * FROM shipper";
        $out = "";
        if ($result = mysqli_query($this->link, $sql)) {

            if (mysqli_num_rows($result)) {
                $out .=  '<table class="table table-hover shadow align-middle" >
                               <thead class="bg-dark" style="background: rgb(91,39,130);background: radial-gradient(circle, rgba(91,39,130,1) 14%, rgba(33,30,97,1) 95%);color: white;">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Vị trí</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col" class="w-25">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>';
                while ($row = mysqli_fetch_array($result)) {
                    $ma = $row["ma"];
                    $ten = $row["ten"];
                    $vitri = $row["dc"];
                    $tel = $row["tel"];
                    $anh = $row["anh"];
                    $out .= ' <tr id="<?php echo $ma; ?>">
                                                    <td>' . $ma . '</td>
                                                    <td>
                                                        <img class="rounded-circle img-fluid" style="width: 40px; height: 40px;" src="' . $anh . '" alt="...">
                                                    </td>
                                                    <td>' . $ten . '</td>
                                                    <td>' . $vitri . '</td>
                                                    <td>' . $tel . '</td>
                                                    <td>
                                                        <div>
                                                            <a class="color-primary pr-2"  style="color: #131dc3" data-id="' . $ma . '" data-toggle="modal" data-target="#detailModal"><i class="fas fa-eye"></i></a>

                                                            <a class="pr-2" style="color: #FC975A" data-toggle="modal" data-target="#exampleModal" data-func="edit" data-id="' . $ma . '"><i class="fas fa-pencil-alt"></i></a> <a class="deletebtn" onclick="deleteShipper(this)" style="color: #F01E6D" data-id="' . $ma . '"><i class="fas fa-trash"></i></i></a>

                                                        </div>
                                                    </td>
                                                </tr>';
                }
                $out .= '</tbody>
                            </table>';
            } else {
                $out .= "<h3>Không có shipper nào</h3>";
            }
        } else {

            $out .= "<h3>Lỗi: không thực hiên câu lệnh " . $sql . " " . mysqli_error($this->link) . "</h3>";
        }

        return $out;
    }

    public function insert($ten, $tel, $DOB, $dc, $vt, $lng, $lat, $pt, $anh)
    {
        $sql = 'INSERT INTO shipper(ten, tel,vitri, thCong, thBai, ngayTao, pt, anh, DOB, lng, lat, dc) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?)';
        $stmt = $this->link->prepare($sql);
        $tc = 0;
        $tb = 0;
        $lng = (float)$lng;
        $lat = (float)$lat;
        $stmt->bind_param("sssiisssdds", $ten, $tel, $vt, $tc, $tb, $pt, $anh, $DOB, $lng, $lat, $dc);

        if ($stmt->execute()) {
            echo "Registered Successfully!";
        } else {
            echo mysqli_error($this->link);
        }
    }

    public function get_row($id)
    {
        $sql = 'SELECT * FROM shipper WHERE ma = ?';
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("i", $id);

        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            return $row;
        }
    }

    public function update($ten, $tel, $DOB, $dc, $vt, $lng, $lat, $pt, $anh, $ma)
    {
        $sql = 'UPDATE shipper SET ten = ?, tel = ?,vitri = ?, pt = ?, anh = ?, DOB = ?, lng = ?, lat = ?, dc = ? where ma = ?';
        $stmt = $this->link->prepare($sql);
       
        $lng = (float)$lng;
        $lat = (float)$lat;
        if ($anh == null) {
            $anh = $this->get_row($ma)["anh"];
        }
        $stmt->bind_param("ssssssddsi", $ten, $tel, $vt, $pt, $anh, $DOB, $lng, $lat, $dc, $ma);

        if ($stmt->execute()) {
            echo "Registered Successfully!";
        } else {
            echo mysqli_error($this->link);
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM shipper WHERE ma = ?";
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("i", $id);

        $sql2 = 'UPDATE don SET tt="Đang xử lý", maShipper = null WHERE maShipper=?';
        $stmt2 = $this->link->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();

        if ($stmt->execute()) {
            echo "1 record deleted.";
        }
    }

    public function search($tenTK)
    {
        $out = "";
        $tenTK = "%" . $tenTK . "%";
        $sql = 'SELECT * FROM shipper WHERE ten like ?';
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("s", $tenTK);

        $stmt->execute();
        $result = $stmt->get_result();
        if (mysqli_num_rows($result)) {
            $out .=  '<table class="table table-hover shadow align-middle" >
                                <thead class="bg-dark" style="background: rgb(91,39,130);background: radial-gradient(circle, rgba(91,39,130,1) 14%, rgba(33,30,97,1) 95%);color: white;">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Vị trí</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col" class="w-25">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>';
            while ($row = mysqli_fetch_array($result)) {
                $ma = $row["ma"];
                $ten = $row["ten"];
                $vitri = $row["dc"];
                $tel = $row["tel"];
                $anh = $row["anh"];
                $out .= ' <tr id="<?php echo $ma; ?>">
                                                    <td>' . $ma . '</td>
                                                    <td>
                                                        <img class="rounded-circle img-fluid" style="width: 40px; height: 40px;" src="' . $anh . '" alt="...">
                                                    </td>
                                                    <td>' . $ten . '</td>
                                                    <td>' . $vitri . '</td>
                                                    <td>' . $tel . '</td>
                                                    <td>
                                                        <div>
                                                            <a class="color-primary pr-2"  style="color: #131dc3" data-id="' . $ma . '" data-toggle="modal" data-target="#detailModal"><i class="fas fa-eye"></i></a>

                                                            <a class="pr-2" style="color: #FC975A" data-toggle="modal" data-target="#exampleModal" data-func="edit" data-id="' . $ma . '"><i class="fas fa-pencil-alt"></i></a> <a class="deletebtn" onclick="deleteShipper(this)" style="color: #F01E6D" data-id="' . $ma . '"><i class="fas fa-trash"></i></i></a>

                                                        </div>
                                                    </td>
                                                </tr>';
            }
            $out .= '</tbody>
                            </table>';
        } else {
            $out .= "<h3>Không có shipper nào</h3>";
        }
        return $out;
    }
}
