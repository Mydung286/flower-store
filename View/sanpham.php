  <!-- quảng cáo -->
  <?php
    include "quangcao.php";
    ?>
  <!-- end quảng cáo -->
  <?php
    $hh=new hanghoa();
    $count= $hh->getHangHoaAll()->rowCount();
    $limit = 8;
    $trang = new page();
    $page = $trang->findPage($count, $limit);
    $start = $trang->findStart($limit);
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    ?>

  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
  <?php
    $ac = 1;
    if (isset($_GET['action'])) {
        if (isset($_GET['act']) && $_GET['act'] =="sanphamkhuyenmai") {
            $ac=2;
        } 

        else if(isset($_GET['act']) && $_GET['act'] =="timkiem")
        {
            $ac=3;
        }
        else 
        {
            $ac=1;
        }
    }
    ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <?php
                if ($ac==1) {
                    echo '<h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ SẢN PHẨM MỚI NHẤT</h3>';
                }
                if ($ac==2) {
                    echo '<h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ SẢN PHẨM SALE</h3>';
                }

                if ($ac==3) {
                    echo '<h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM TÌM KIẾM</h3>';
                }
                ?>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            if ($ac == 1) {
                $result = $hh->getHangHoaAllPage($start, $limit);
            }
            if ($ac == 2) {
                $result = $hh->getHangHoaAllSale();
            }

            if ($ac == 3) 
            {
               if(isset($_POST['txtsearch']))
               {
                $tk=$_POST['txtsearch'];
                // thực hiện lệnh truy vấn tìm kiếm
                $result=$hh->selectTimKiem($tk);
               }
            }

            while ($set=$result->fetch()) :
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                  <?php
                    if ($ac== 1 || $ac==3) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;">'
                         . number_format($set['dongia']) . '<sup><u>đ</u></sup></br>';
                    }
                    if ($ac == 2) {
                        echo ' <h5 class="my-4 font-weight-bold">
                        <font color="red">' . number_format($set['giamgia']) . '<sup><u>đ</u></sup></font>
                        <strike>' . number_format($set['dongia']) . '</strike><sup><u>đ</u></sup>
                    </h5>';
                    }
                    ?>
                  </h5>
                  <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                      <span><?php echo $set['tenhh']; ?></span></br></a>
                  <h5>Số lượt xem: <?php echo $set['soluotxem']; ?></h5>
              </div>
          <?php
            endwhile;
            ?>
      </div>
  </section>
  <!-- end sản phẩm mới nhất -->
  <?php
  if($ac==1):
  ?>
  <div class="col-md-6 div col-md-offset-3">
      <ul class="pagination">
          <?php
            if ($current_page > 1 && $page > 1) {
                echo '<li><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $page; $i++) :
            ?>
              <li><a href="index.php?action=sanpham&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php
            endfor;
            if ($current_page < $page && $page > 1) {
                echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>


      </ul>
  </div>
  <?php
  endif;
  ?>
 