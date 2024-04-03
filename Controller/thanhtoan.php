<?php
$act="thanhtoan";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'thanhtoan':
            // controller yêu cầu model insert vào database thì mới có thông tin hiển thị lên order
            $hd= new hoadon();
            if(isset($_SESSION['makh']))
            {
                $makh=$_SESSION['makh'];
                $sohd=$hd->insertHoaDon($makh);
               $_SESSION['masohd']=$sohd;
                // tiến hành thêm vào bảng chi tiết hóa đơn
                // duyệt qua giỏ hàng, đem thông tin từng món hàng add vào databasse
                $total=0;
                foreach($_SESSION['cart'] as $key => $item) {
                    // viết pt chèn vào bảng cthoadon
                    $hd->insertCTHoaDon($sohd,$item['mahh'],$item['soluong'], $item['thanhtien']);
                    // sau khi thực hiện insert vào bảng cthoadon thì update tổng thành tiền vào lại bảng hóa đơn và trừ lại số lượng tồn
                    $total+=$item['thanhtien'];
                    //uodate ngược lại bảng hàng hoá
                }
                $hd->updateHoaDonThanhTien($sohd,$makh,$total);
            }
        include_once "./View/order.php";
        break;
    }
?>