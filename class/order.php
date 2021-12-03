
<?php
class order
{
    public $link;

    function __construct($link)
    {
        $this->link = $link;
    }

    public function updateStatus($ma, $maShipper, $tt)
    {


        $sql = 'UPDATE don SET tt = ? where ma = ?';
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("si", $tt, $ma);

        if ($stmt->execute()) {
            echo "Update Thanh Cong!";
        } else {
            echo mysqli_error($this->link);
        }
        if ($tt == "Đang giao hàng") {
            $sql = 'UPDATE shipper SET thCong = thCong-1 where ma = ?';
        } else {
            $sql = 'UPDATE shipper SET thCong = thCong+1 where ma = ?';
        }
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("i", $maShipper);

        if ($stmt->execute()) {
            echo "Update Thanh Cong!";
        } else {
            echo mysqli_error($this->link);
        }
    }

    public function addOrderToShipper($maDon, $maShipper)
    {
        $sql = 'UPDATE don SET maShipper=?, tt="Đang giao hàng" WHERE ma=?';

        $stmt = $this->link->prepare($sql);



        $stmt->bind_param("ii", $maShipper, $maDon);
        $stmt->execute();
    }

    public function loadOrder1()
    {
        $listOrder = array();

        $sql = 'SELECT * FROM don WHERE maShipper IS NULL';
        $stmt = $this->link->prepare($sql);
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

    public function loadOrder()
    {
        $sql = 'SELECT * FROM don WHERE tt="Đang xử lý"';
        $out = "";

        if ($result = mysqli_query($this->link, $sql)) {

            if (mysqli_num_rows($result)) {
                $out .=   '<select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn 1 đơn hàng</option>';
                while ($row = mysqli_fetch_array($result)) {
                    $ma = $row["ma"];
                    $tenSP = $row["tenSP"];
                    $out .= '<option value="' . $ma . '">' . $ma . ' - ' . $tenSP . '</option>';
                }
                $out .= '</select>';
            } else {
                $out .= '<select class="form-select" aria-label="Default select example">
                                    <option selected>Không có đơn hàng nào</option>
                        </select>';
            }
        } else {

            $out .= "<h3>Lỗi: không thực hiên câu lệnh " . $sql . " " . mysqli_error($this->link) . "</h3>";
        }

        return $out;
    }

    public function count()
    {
        $sql = "SELECT * FROM don";

        if ($result = mysqli_query($this->link, $sql)) {
            return  mysqli_num_rows($result);
        } else {
            return 0;
        }
    }

    public function load($index)
    {
        $sql = "SELECT * FROM don LIMIT ?,?";
        $stmt = $this->link->prepare($sql);
        $start = 5 * ($index - 1);
        $end = 5;
        $stmt->bind_param("ii", $start, $end);
        $stmt->execute();
        $out = "";

        if ($result = $stmt->get_result()) {

            if (mysqli_num_rows($result)) {
                $out .=  '<table class="table table-hover shadow align-middle" >
                                <thead class="bg-dark" style="background: rgb(91,39,130);background: radial-gradient(circle, rgba(91,39,130,1) 14%, rgba(33,30,97,1) 95%);color: white;">
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Tên SP</th>
                                        <th scope="col">Người Gửi</th>
                                        <th scope="col">Người Nhận</th>
                                        <th scope="col">Trọng Lượng</th>
                                        <th scope="col">Kích thước</th>
                                        <th scope="col">Trạng thái<th>
                                    </tr>
                                </thead>
                                <tbody>';
                while ($row = mysqli_fetch_array($result)) {
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
                    $dcGui = $row["dcGui"];
                    $dcNhan = $row["dcNhan"];
                    $can = $row["can"];
                    $tt = $row["tt"];
                    $out .= ' <tr id="' . $ma . '">
                                                    <td>' . $ma . '</td>
                                                    <td>' . $tenSP . '<br>' . $dcGui . '</td>
                                                    <td><strong>' . $p1["ten"] . '</strong><br>' . $dcGui . '<br>' . $p1["sdt"] . '</td>
                                                     <td><strong>' . $p2["ten"] . '</strong><br>' . $dcNhan . '<br>' . $p2["sdt"] . '</td>
                                                    <td>' . $can . '</td>
                                                    <td>' . $size["x"] . "x" . $size["y"] . "x" . $size["z"] . '</td>
                                                    <td><span class="badge">' . $tt . '</span></td>
                                                </tr>';
                }
                $out .= '</tbody>
                            </table>';
            } else {
                $out .= "<h3>Không có order nào</h3>";
            }
        } else {
            $out .= "<h3>Lỗi: không thực hiên câu lệnh " . $sql . " " . mysqli_error($this->link) . "</h3>";
        }

        return $out;
    }

    public function insert($ten1, $tel1, $dc1, $lng1, $lat1, $ten2, $tel2, $dc2, $lng2, $lat2, $tenSP, $can, $sl, $x, $y, $z, $thanhToan)
    {
        $sql = 'INSERT INTO don(dcGui, dcNhan, tenSP, can, sl, thanhToan, maGui, maNhan, maSize, tt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, "Đang xử lý")';
        $sql1 = 'INSERT INTO nguoi(ten, sdt, dc, kinh, vi) VALUES (?, ?, ?, ?, ?)';
        $sql2 = 'INSERT INTO size(x, y, z) VALUES (?, ?, ?)';
        $stmt1 = $this->link->prepare($sql);
        $stmt2 = $this->link->prepare($sql1);
        $stmt3 = $this->link->prepare($sql2);

        $stmt3->bind_param("ddd", $x, $y, $z);
        $stmt3->execute();
        $idSize = mysqli_insert_id($this->link);

        $stmt2->bind_param("sssdd", $ten1, $tel1, $dc1, $lng1, $lat1);
        $stmt2->execute();
        $idP1 = mysqli_insert_id($this->link);

        $stmt2->bind_param("sssdd", $ten2, $tel2, $dc2, $lng2, $lat2);
        $stmt2->execute();
        $idP2 = mysqli_insert_id($this->link);

        $stmt1->bind_param("sssdisiii", $dc1, $dc2, $tenSP, $can, $sl, $thanhToan, $idP1, $idP2, $idSize);
        $stmt1->execute();
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
        $sql = 'UPDATE shipper SET ten = ?, tel = ?,vitri = ?, thCong = ?, thBai = ?, pt = ?, anh = ?, DOB = ?, lng = ?, lat = ?, dc = ? where ma = ?';
        $stmt = $this->link->prepare($sql);
        $tc = 0;
        $tb = 0;
        $lng = (float)$lng;
        $lat = (float)$lat;
        if ($anh == null) {
            $anh = $this->get_row($ma)["anh"];
        }
        $stmt->bind_param("sssiisssddsi", $ten, $tel, $vt, $tc, $tb, $pt, $anh, $DOB, $lng, $lat, $dc, $ma);

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

        if ($stmt->execute()) {
            echo "1 record deleted.";
        }
    }
}
