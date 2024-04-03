<?php
class giohang{
    function addGioHang($mahh,$soluong)
    {
        $sanpham = new hanghoa();
        $sp = $sanpham->getHangHoaId($mahh);
        $tenhh = $sp['tenhh'];
        $dongia = $sp['dongia'];
    //    // lấy tên màu
    //     $mau = $sanpham->getHangHoaMauSac($mausac);
    //     $tenmau = $mau['mausac'];
        // lấy hình dựa và mahh, màu sắc, size
        $hinh = $sanpham->getHangHoaHinhMauSize($mahh);
        $img = $hinh['hinh'];
        $total = $soluong * $dongia;
        $flag = false;
        //
        foreach($_SESSION['cart'] as $key => $item) {
            if($item['mahh']==$mahh)
            {
                $flag = true;
                $soluong += $_SESSION['cart'][$key]['soluong'];
                $this->updateHH($key, $soluong);//giohang::updateGioHang...
            }
        }
        if( $flag == false)
        {
            //tao doi tuong
            $item=array(
                'mahh' => $mahh,
                'tenhh' => $tenhh,
                'hinh' => $img,
                'soluong' => $soluong,
                'dongia' => $dongia,
                'thanhtien' => $total
            );
            //add dôi tuong vao gio hang
            $_SESSION['cart'][] = $item;
        }   
    }

    //phuong thuc updateHH
    function updateHH($index, $soluong)
    {
        if($soluong <= 0)
        {
            unset($_SESSION['cart'][$index]);
        }
        else
        {
            //update la phep gan
            $_SESSION['cart'][$index]['soluong']= $soluong;
            $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
            $_SESSION['cart'][$index]['thanhtien'] = $tiennew;
        }
    }
    // phương thức tính thành tiền trong giỏ hàng
    function getSubTotal()
    {
        $subtotal=0;
        foreach($_SESSION['cart'] as $item){
            $subtotal+=$item['thanhtien'];
        }
        $subtotal=number_format($subtotal,2);
        return $subtotal;
    }
}
?>