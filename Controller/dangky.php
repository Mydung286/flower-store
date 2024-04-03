<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act){
    case 'dangky':
        include_once "./View/registration.php";
    case 'dangky_action':
    //gửi toàn bộ thông tin qua đây, post gửi đi thông qua thẻ (input, select)
    // Nhận, trước khi nhận cần kiểm tra
    $tenkh = '';
    $dc = '';
    $sodt = '';
    $user = '';
    $email = '';
    if (isset($_POST['submit'])) {
        $tenkh = $_POST['txttenkh'];
        $dc = $_POST['txtdiachi'];
        $sodt = $_POST['txtsodt'];
        $user = $_POST['txtusername'];
        $email = $_POST['txtemail'];
        $pass = $_POST['txtpass'];
        $saltF = "G456#@";
        $saltL = "Fa34%!";
        $passnew=md5($saltF.$pass.$saltL);

        // controller yêu cầu những thông tin cần được thêm vào database
        // trước khi  insert cần kiểm tra xem username và email này có tôn tại chưa

        $kh=new user();
        $check=$kh->getCheckUser($user,$email)->rowCount();
        // $Count=
        // var_dump($check);
        if($check>0)
        {
            echo '<script> alert("Username hoặc email đã tồn tại");</script>';
        }

        else {
            // ko có thì thêm vào databasse
            $incheck=$kh->insertKhachHang($tenkh, $user, $passnew, $email, $dc, $sodt);
            if ($incheck!==false)
            {
                echo '<script> alert("Đăng ký thành công");</script>';
                include_once "./View/home.php";
            }

            else 
            {
                echo '<script> alert("Đăng ký không thành công");</script>';
                include_once "./View/registration.php";
            }
        }
    }
    break;



}
?>