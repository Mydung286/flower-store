<?php
    class cthanghoa{
        function insertCTHangHoa($mahh,$dongia,$slt,$hinh,$giamgia)
        {
            $db=new connect();
            $query="insert into cthanghoa(idhanghoa,dongia,soluongton,hinh,giamgia) values ($mahh,$dongia,$slt,'$hinh',$giamgia)";
             echo $query;
            $result=$db->exec($query);
            return $result;
        }
    }
?>