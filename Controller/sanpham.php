<?php
// để controller gọi đến nhiều view khác nhau thì thêm biến
// trên url, đặt tên act
$act = "sanpham";
if (isset($_GET['act'])) 
{
        $act = $_GET['act'];
}
switch ($act) {
        case 'sanpham':
                include_once "./View/sanpham.php";
                break;

        case 'sanphamkhuyenmai':
                include_once "./View/sanpham.php";
                break;
        case 'sanphamchitiet':
                include_once "./View/sanphamchitiet.php";
                break;
        case 'timkiem':
                include_once "./View/sanpham.php";
                break;
}

?>