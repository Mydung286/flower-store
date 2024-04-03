<?php
class hanghoa
{
    function getHangHoaNew()
    {
        $db = new connect();
        $select = "select a.mahh,a.tenhh,b.hinh,b.dongia,c.mausac,a.soluotxem from hanghoa a, cthanghoa b, mausac c where a.mahh=b.idhanghoa and b.idmau=c.Idmau order by a.mahh DESC limit 8";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaSale()
    {
        $db = new connect();
        $select = "select a.mahh,a.tenhh,b.hinh,b.dongia,c.mausac,a.soluotxem,b.giamgia from hanghoa a, cthanghoa b, mausac c where a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia!=0 order by a.mahh DESC limit 4";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAll()
    {
        $db=new connect();
        $select = "select a.mahh,a.tenhh,b.hinh,b.dongia,c.mausac,a.soluotxem from hanghoa a, cthanghoa b, mausac c where a.mahh=b.idhanghoa and b.idmau=c.Idmau order by a.mahh DESC";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaAllSale()
    {
        $db=new connect();
        $select="select a.mahh,a.tenhh,a.soluotxem,b.dongia,b.hinh,c.mausac,b.giamgia
        from hanghoa a,cthanghoa b,mausac c
        WHERE a.mahh=b.idhanghoa and b.idmau=c.idmau AND b.giamgia!=0 ORDER by a.mahh DESC";
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoaAllPage($start, $limit)
    {
        $db=new connect();
        $select="select a.mahh,a.tenhh,a.soluotxem,b.dongia,b.hinh,c.mausac 
        from hanghoa a,cthanghoa b,mausac c WHERE a.mahh=b.idhanghoa and 
        b.idmau=c.idmau AND b.giamgia=0 ORDER by a.mahh DESC limit " . $start . "," . $limit;
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoaId($id)
    {
        $db=new connect();
        $select="select DISTINCT b.mahh,b.tenhh,b.mota,a.dongia from cthanghoa 
        a, hanghoa b WHERE a.idhanghoa=b.mahh and b.mahh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function getHangHoaMau($id)
    {
        $db=new connect();
        $select="select DISTINCT b.Idmau,b.mausac from cthanghoa a, mausac 
        b WHERE a.idmau=b.Idmau and a.idhanghoa=$id";
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoaSize($id)
    {
        $db=new connect();
        $select ="select DISTINCT b.Idsize,b.size from cthanghoa a,sizehoa b 
        WHERE a.idsize=b.Idsize and a.idhanghoa=$id";
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoaHinh($id)
    {
        $db=new connect();
        $select="select a.hinh from cthanghoa a WHERE  a.idhanghoa=$id";
        $result=$db->getList($select);
        return $result;
    }

    // Phương thức lấy hình dựa vào mã hàng , màu , size
    function getHangHoaHinhMauSize($mahh)
    {
        $db=new connect();
        $select="select DISTINCT a.hinh FROM cthanghoa a, mausac b, sizehoa c 
        WHERE a.idmau=b.idmau AND a.idsize=c.idsize AND a.idhanghoa =$mahh";
        // echo $select;
        $result=$db->getInstance($select);
        return $result;
    }

    // phương thức truy vấn lấy màu người dùng chọn
    function getHangHoaMauSac($idmau)
    {
        $db=new connect();
        $select="select a.mausac from mausac a WHERE a.Idmau=$idmau";
        $result=$db->getInstance($select);
        return $result;
    }

    // phương thức tìm kiếm
    function selectTimKiem($tenhh)
    {
        $db=new connect();
        $select="select a.mahh, a.tenhh, a.soluotxem, b.dongia,b.hinh, c.mausac
        from hanghoa a, cthanghoa b, mausac c
        WHERE a.mahh=b.idhanghoa and b.idmau=c.idmau and a.tenhh like '%$tenhh%' ORDER by a.mahh DESC ";
        $result=$db->getList($select);
        return $result;
    }
}
?>