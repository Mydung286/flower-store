<?php
class hoadon {
    // phương thức insert vào bảng hóa đơn trước, bởi vì có hóa đơn thì mới có chi tiết hóa đơn
    // bảng chi tiết hóa đơn là bảng được sinh ra từ hóa đơn và khách hàng
    function insertHoaDon($makh)
    {
        $date=new DateTime('now');
        $ngay=$date->format('Y-m-d'); // do trong database là nam-thang-ngay
        $db=new connect();
        $query="insert into hoadon(masohd,makh,ngaydat,tongtien) 
        values(Null,$makh,'$ngay',0)";
        $db->exec($query);
        // đã insert xong rồi, lấy mã vừa insert để insert vào cthoadon
        $select="select masohd from hoadon order by masohd desc limit 1";
        $mahd=$db->getInstance($select);
        return $mahd[0];
    }

    // phương thức chèn vào bảng cthoadon
    function insertCTHoaDon($masohd,$mahh,$soluongmua,$thanhtien)
    {
        $db=new connect();
        $query="insert into cthoadon(masohd,mahh,soluongmua,thanhtien,tinhtrang) 
        values($masohd,$mahh,$soluongmua,$thanhtien,0)";
        echo $query;
        $db->exec($query);
    }

    // phương thức updatethanhtien trong bảng hóa đơn
    function updateHoaDonThanhTien($masohd,$makh,$total) 
    {
    $db=new connect();
    $query="update hoadon set tongtien=$total WHERE masohd=$masohd and makh=$makh";
    echo $query;
    $db->exec($query);
    }

    //phương thức hiển thị thông tin khách hàng trên hóa đơn
    function getHoaDonKH($masohd)
    {
        $db=new connect();
        $select="select b.masohd, b.ngaydat, a.tenkh, a.diachi, a.sodienthoai 
        from khachhang a INNER JOIN hoadon b on a.makh=b.makh WHERE masohd=$masohd";
        $result=$db->getInstance($select);
        return $result;
    }

    // phương thức hiển thị thông tin những món hàng đã mua trên hóa đơn
    function getHoaDonCTHD($masohd)
    {
        $db=new connect();
        $select="select DISTINCT a.tenhh, b.dongia,c.soluongmua 
        from hanghoa a, cthanghoa b, cthoadon c WHERE a.mahh=b.idhanghoa and a.mahh=c.mahh and c.masohd=$masohd";
        $result=$db->getList($select);
        return $result;
    }
}

?>
