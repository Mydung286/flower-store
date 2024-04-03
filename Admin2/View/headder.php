
<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <!-- Brand -->
                    <a class="navbar-brand" href="">
                    <img src="./Content/imagetourdien/liti-logo.png" width="45" height="45" alt="Logo">
                    </a>

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-success font-weight-bold" href="#">Trang Chủ</a>
                        </li>
                        
                        <!-- Quản trị Doanh Mục -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-success font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                                Quản Trị Doanh Mục
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=loai">Loại Sản Phẩm</a>
                                <a class="dropdown-item" href="index.php?action=hanghoa">Sản Phẩm</a>
                                <a class="dropdown-item" href="index.php?action=cthanghoa">Chi Tiết Sản Phẩm</a>
                                <a class="dropdown-item" href="#">Loại menu</a>
                            </div>
                        </li>
                        <!-- Thống kê -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-success font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                                Thống Kê
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=thongke">Sản Phẩm bán được nhiều Nhất</a>
                                <a class="dropdown-item" href="#">Sản Phẩm chưa được giao</a>
                                <a class="dropdown-item" href="#">Sản phẩm bán ít nhất</a>
                                <a class="dropdown-item" href="">Thống kê</a>
                            </div>
                        </li>
                        <!-- Báo cáo -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-success font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                                Báo Cáo
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tháng</a>
                                <a class="dropdown-item" href="#">Quý</a>
                                <a class="dropdown-item" href="#">Năm</a>
                            </div>
                        </li>
                        <!-- Báo cáo Tồn kho -->
                        <li class="nav-item">
                            <a class="nav-link text-success font-weight-bold" href="#">Tồn Kho</a>
                        </li>
                    </ul>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>



</header>
<!-- dang ky -->
<style>
.navbar-nav {
    background-color: #f8f9fa; /* Màu nền */
    text-align: center;

}

.navbar-nav .nav-item {
    margin: 0 10px; /* Khoảng cách giữa các mục menu */
}

.navbar-nav {
    display: flex;
    justify-content: center; /* Canh giữa các phần tử con */
    align-items: center; /* Canh giữa theo chiều dọc */
}

.navbar-nav .nav-item {
    margin: 0 10px; /* Khoảng cách giữa các mục menu */
}

.nav-link {
    color: #28a745; /* Màu chữ */
}
.nav-link {
    font-size: 16px; /* Kích thước chữ */
    font-weight: bold; /* Độ đậm */
    text-transform: uppercase; /* Chuyển đổi chữ thành HOA */
}
.dropdown-menu {
    background-color: #f8f9fa; /* Màu nền dropdown */
}

.dropdown-item {
    color: #28a745; /* Màu chữ dropdown */
}

.dropdown-item:hover {
    background-color: #28a745; /* Màu nền khi di chuột vào */
    color: #fff; /* Màu chữ khi di chuột vào */
}

</style>