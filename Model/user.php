<?php
class user {
    function getCheckUser($username,$email)
    {
        $db= new connect();
        $select="SELECT a.username, a.email FROM khachhang a 
        WHERE a.username='$username' or a.email='$email'";
        $result=$db->getList($select);
        return $result;
    }

    // phương thức insert vào database
    function insertKhachHang($tenkh, $username, $matkhau, $email, $diachi, $sodienthoai)
    {
        $db=new connect();
        $query="INSERT INTO khachhang (makh,tenkh,username,matkhau,email,diachi,sodienthoai)
        VALUES (NULL, '$tenkh', '$username','$matkhau','$email','$diachi','$sodienthoai')";
        //exec
        echo $query;
        $result=$db->exec($query);
        return $result;
    }

    // phương thức login
   function logKhachHang($user,$pass)
   {
    $db=new connect();
    $select="select a.makh, a.tenkh, a.username from khachhang a WHERE a.username='$user' and a.matkhau='$pass';";
    // echo $select;
    $result=$db->getInstance($select);
    return $result;
   }
   function getEmail($email)
        {
            $db = new connect();
            $select = "select * from khachhang where email = '$email'";
            //    echo $select;
            $result = $db->getList($select);
            return $result;
        }
    
        //
    function getPassNew($emailold, $passnew)
    {
        $db=new connect();
        $query="update khachang set matkhau='$passnew' where email='$emailold";
        $db->exec($query);
    }
}
?>