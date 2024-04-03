<?php
// unset($_SESSION['cart']);
//kiem tra nguoi dung co gio hang hay chua
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
}
$act="giohang";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act){
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        $mahh=0;
        // $mausac='';
        // $size=0;
        if(isset($_POST['mahh']))
        {
            $mahh=$_POST['mahh'];
            // $mausac=$_POST['mymausac'];
            // $size=$_POST['size'];
            $soluong=$_POST['soluong'];
            //controller yeu cau add nhung thong tin vao trong giohang
            $gh=new giohang();
            $gh->addGioHang($mahh,$soluong);
             echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;

        case "giohang_xoa":
            // nhận key và xóa
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                unset($_SESSION['cart'][$id]);
                 echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
            }
            break;

        case "giohang_update":
        // nhận những gía trị từ thẻ input or select
        if(isset($_POST['newqty']))
        {
            $newsoluong=$_POST['newqty']; //$newsoluong=[0:1:2:4]
            foreach ($newsoluong as $key => $value) {
            // dò duyệt qua $_SESSION ['cart'] đối tượng nào có số lượng khác với số lượng trong $new soluogn
            if($_SESSION['cart'][$key]['soluong']!=$value)
            {
                $gh=new giohang();
                $gh->updateHH($key,$value);
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
            }
            
            }
        }
        break;
}

?>