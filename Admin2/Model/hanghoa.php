<?php
class hanghoa{
    function getHangHoa()
    {
        $db=new connect();
        $select="select * from hanghoa";
        $result=$db->getList($select);
        return $result;
    }
    // pt thêm
    function insertHangHoa($tenhh,$maloai,$dacbiet,$ngaylap,$mota,$slx)
    {
        $db=new connect();
        $query="insert into hanghoa(mahh,tenhh,maloai,dacbiet,ngaylap,mota,soluotxem) 
        values (Null,'$tenhh',$maloai,$dacbiet,'$ngaylap','$mota',$slx)";
        $result=$db->exec($query);
        return $result;
    }
    // phương thức lấy thông tin 1 món hàng
    function getHangHoaId($id)
    {
        $db=new connect();
        $select="select * from hanghoa where mahh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    // phương thức update
    function updateHangHoa($mahh,$tenhh,$maloai,$dacbiet,$ngaylap,$mota,$slx)
    {
        $db=new connect();
        $query="update hanghoa 
        set tenhh='$tenhh', maloai=$maloai,dacbiet=$dacbiet,ngaylap='$ngaylap',mota='$mota', soluotxem=$slx
        where mahh=$mahh";
        // echo $query;
        $result=$db->exec($query);
        return $result;
    }
    
    function getMau()
    {
        $db=new connect();
        $select="select * from mausac";
        $result=$db->getList($select);
        return $result;
    }
    function getSize()
    {
        $db=new connect();
        $select="select * from hoatuoi";
        $result=$db->getList($select);
        return $result;
    }
    function getThongKe()
    {
        $db=new connect();
        $select="select b.tenhh,sum(a.soluongmua) as soluong from cthoadon a, hanghoa b WHERE a.mahh=b.mahh group by b.tenhh";
        $result=$db->getList($select);
        return $result;
    }
}

?>