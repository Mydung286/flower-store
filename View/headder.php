<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:50px;">
        <div class="col-12">
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" style="margin-bottom: 0px;">
                <a class="navbar-brand" href="index.php"> <!-- Thay thế url_cua_trang_chu bằng đường dẫn đến trang chủ của bạn -->
                <img src="./Content/imagetourdien/liti-logo.png" width="70" height="70" alt="Logo">
                </a>
                    <div class="collapse navbar-collapse" id="basicExampleNav">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll">
                        
                        </ul>
                    </div>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>
    <!-- dang ky -->
    <section class="col-12">

        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg n navbar-light bg-light" style="margin-bottom: 0px; ">

                    <!-- Right -->
                    <ul class="navbar-nav ml-auto">
                        <?php
                        if (!isset($_SESSION['makh'])) {
                        ?>
                            <li class="nav-item">
        <a class="nav-link text-info font-weight-bold" href="index.php">Trang chủ</a>
                            </li>
                        <li class="nav-item">
        <a class="nav-link text-info font-weight-bold" href="">Giới thiệu</a>
                         </li>
                         <li class="nav-item">
        <a class="nav-link text-info font-weight-bold" href="">Liên Hệ</a>
                        </li>

                            <li>
                            <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <!-- <a href="Trangchu.php?trang=tk"> -->
                                    <input class="input-group-text" style="height: 35px;" type="submit" id="btsearch" value="Tìm Kiếm" />
                                    <!-- </a> -->
                                        <!-- <span class="input-group-text">@</span> -->
                                        <input type="text" name="txtsearch" class="form-control" placeholder="Nhập hoa" />
                                    </div>
                            </form>


                        </li>


                            <li class="nav-item">
                                <a href="index.php?action=dangky" class="nav-link text-info font-weight-bold" >Đăng Ký</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?action=dangnhap" class="nav-link text-info font-weight-bold">Đăng Nhập</a>
                            </li>
                        <?php
                        }
                        ?>

                        <li class="nav-item">
                            <a href="index.php?action=dangnhap&act=dangxuat" class="nav-link text-info font-weight-bold">Đăng Xuất</a>
                        </li>

                        <li>
                            <a href="index.php?action=giohang" class="nav-link"><img src="Content/imagetourdien/cartx2.png" width="30px" height="30px" alt=""></a>

                        </li>

                        <li>
                            <p style="color :red; margin-top: 20px; margin-left: 0px;"> (0) </p>
                        </li>

                        <?php
                        if (isset($_SESSION['makh'])) {
                            echo ' <li>
                            <p style="color: red; margin-top: 20px; margin-left: 0px;">' . $_SESSION['tenkh'] . '</p>

                                 </li>';
                        } else {
                            echo '<li>
                                  <p style="color: red; margin-top: 20px; margin-left: 0px;"> Xin chào</p>
                                 </li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

    </section>


</header>
<!-- dang ky -->

<!-- hinh dộng -->
<div class="row">
    <div class="col-12">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner">
                <!--First slide-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./Content/imagetourdien/hinh6.png" alt="First slide">
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" src="./Content/imagetourdien/hinh4.png" alt="Second slide">
                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" src="./Content/imagetourdien/hinh5.png" alt="Third slide">
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
    </div>
</div>


<style>
    .navbar {
    background-color: black; /* Thay đổi màu nền tại đây */
}

    /* Optional: You can customize further with your styles */
.navbar-nav .nav-link {
    padding: 0.5rem 1rem;
    font-size: 1.8rem;
    color: #333; /* Adjust color as needed */
}

.navbar-nav .nav-link:hover {
    color: #007bff; /* Adjust color as needed */
}

.navbar-brand img {
    max-width: 100%;
    height: auto;
}

.form-inline .form-control {
    width: 250px; /* Adjust width as needed */
}

/* Adjust spacing as needed */
.navbar-nav.ml-auto {
    margin-right: 0;
}

.navbar-nav.ml-auto .nav-link {
    margin-left: 10px;
}

@media (max-width: 768px) {
    .navbar-nav.ml-auto {
        margin-top: 10px;
    }
}

row no-gutters{
    background: #fff;
    height: 61px;
    width: 100%;
    padding: 0 20px 0 155px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
    transition: all .3s;
    border-bottom: 1px solid;
    border-color: #fff;
}


    </style>
