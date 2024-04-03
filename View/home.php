<!-- Phần: Sản phẩm mới nhất -->
<div class="flowers" aria-hidden="true">
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-1.png"/></div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-2.png"/> </div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-1.png"/> </div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-2.png"/> </div>
<div class="flower"> <img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-3-1.png"/></div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-2.png"/> </div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-1.png"/> </div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-2.png"/> </div>
<div class="flower"> <img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-1.png"/></div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-2.png"/> </div>
<div class="flower"> <img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-3-1.png"/></div>
<div class="flower"><img src="https://lutaweb.com/wp-content/uploads/2021/12/hoa-mai-2.png"/> </div>
</div>
<section id="new-products" class="text-center">
    <div class="row">
        <div class="col-lg-8">
         <marquee><h3 class="mb-4 font-weight-bold text-danger" style="font-size: 25px;">SẢN PHẨM MỚI NHẤT</h3></marquee>
        </div>
        <div class="col-lg-4 mt-4 text-right">
            <a href="index.php?action=sanpham" style="color: gray;">Xem chi tiết</a>
        </div>
    </div>

    <div class="row">
        <?php
        $hh =new hanghoa();
        $result = $hh->getHangHoaNew();
        while ($set = $result->fetch()) :
        ?>
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="view overlay z-depth-1-half">
                <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                <div class="mask rgba-white-slight"></div>
            </div>
            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                <h5 class="mt-3 font-weight-bold text-dark text-center" style="font-size: 16px;"><?php echo $set['tenhh']; ?></h4>
            </a>
            <h4 class="mb-4 font-weight-bold text-danger text-center" style="font-size: 18px;">
                <?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup>
            </h4>
            
        </div>
        <?php endwhile; ?>
    </div>
</section>
<!-- Kết thúc Phần Sản phẩm mới nhất -->

<!-- Phần: Sản phẩm khuyến mãi -->
<section id="sale-products" class="text-center mt-5">
    <div class="row">
        <div class="col-lg-8">
          <marquee>  <h3 class="mb-4 font-weight-bold text-danger" style="font-size: 25px;">SẢN PHẨM KHUYẾN MÃI</h3></marquee>
        </div>
        <div class="col-lg-4 mt-4 text-right">
            <a href="" style="color: gray;">Xem chi tiết</a>
        </div>
    </div>

    <div class="row">
        <?php
        $km = $hh->getHangHoaSale();
        while ($set = $km->fetch()) :
        ?>
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="view overlay z-depth-1-half">
                <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                <div class="mask rgba-white-slight"></div>
            </div>
            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                <h5 class="mt-3 font-weight-bold text-dark text-center" style="font-size: 16px;"><?php echo $set['tenhh']; ?></h4>
            </a>
            <h3 class="my-4 font-weight-bold text-primary text-center" style="font-size: 18px;">
                <font color="red"><?php echo $set['giamgia']; ?><sup><u>đ</u></sup></font>
                <strike><?php echo number_format($set['dongia']); ?></strike><sup><u>đ</u></sup>
            </h3>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<!-- Kết thúc Phần Sản phẩm khuyến mãi -->
<style>
   
img:hover{transform: scale(1.07);
}

 h3 {
display: block;
font-size: 1.17em;
margin-block-start: 1em;
margin-block-end: 1em;
margin-inline-start: 0px;
margin-inline-end: 0px;
font-weight: bold;
text-align: center;

} 

h4:hover{
    color: blue;
    font-size: 1.6rem;
    text-transform: uppercase;
 }

 h5:hover{
    color: #292929;
    font-size: 1.6rem;
    text-transform: uppercase;
    text-decoration: none;
 }

@-webkit-keyframes flowers-fall {
0% {top:-10%}
100% {top:100%}
}
@-webkit-keyframes flowers-shake {
0%,100% {-webkit-transform:translateX(0);transform:translateX(0)}
50% {-webkit-transform:translateX(80px);transform:translateX(80px)}
}
@keyframes flowers-shake {
0%,100%{ transform:translateX(0)}
50% {transform:translateX(80px)}
}
.flower {
height:auto;
width:20px;/*chinh kich thuoc hoa*/
text-shadow: 0 0 5px #000;
position:fixed;
top:-10%;
z-index:9999;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none;
cursor:default;
-webkit-animation-name:flowers-fall,flowers-shake;
-webkit-animation-duration:10s,3s;
-webkit-animation-timing-function:linear,ease-in-out;
-webkit-animation-iteration-count:infinite,infinite;
-webkit-animation-play-state:running,running;
animation-name:flowers-fall,flowers-shake;
animation-duration:10s,3s;
animation-timing-function:linear,ease-in-out;
animation-iteration-count:infinite,infinite;
animation-play-state:running,running;
}
.flower:nth-of-type(0){
left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s
}
.flower:nth-of-type(1){
left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s
}
.flower:nth-of-type(2){
left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s
}
.flower:nth-of-type(3){
left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s
}
.flower:nth-of-type(4){
left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s
}
.flower:nth-of-type(5){
left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s
}
.flower:nth-of-type(6){
left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s
}
.flower:nth-of-type(7){
left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s
}
.flower:nth-of-type(8){
left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s
}
.flower:nth-of-type(9){
left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s
}
.flower:nth-of-type(10){
left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s
}
.flower:nth-of-type(11){
left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s
}
</style>