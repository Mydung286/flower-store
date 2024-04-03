<?php
$act="dangnhap";
if (isset($_GET['act']))
{
    $act=$_GET['act'];
}

switch ($act) {
    case 'dangnhap' :
        include_once "./View/login.php";
        break;

    case 'dangnhap_action':
        $user ='';
        $pass ='';
    if (isset($_POST['txtusername']) && isset($_POST['txtpassword']))
    {
        $user=$_POST['txtusername']; 
        $pass=$_POST['txtpassword'];
        $saltF= "G456#@";
        $saltL= "Fa34%!";
        $passnew= md5($saltF. $pass. $saltL);
        // controller yêu cầu model xem có tài khoản hay không
        $kh=new user();
        $logkh=$kh->logKhachHang($user,$passnew);
            if($logkh)
            {
                $_SESSION['makh']= $logkh['makh'];
                $_SESSION['tenkh']= $logkh['tenkh'];
                echo '<script> alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            }
            else 
            {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
            }
    }
    break;

    case 'dangxuat':
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        break;
}
?>
