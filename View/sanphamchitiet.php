<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold" style ="color: red;">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">

                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $hh = new hanghoa();
                                $sp = $hh->getHangHoaId($id);

                                $tenhh = $sp['tenhh'];
                                $mota = $sp['mota'];
                                $dongia = $sp['dongia'];
                            }
                            ?>
                            <?php
                            $hinh = $hh->getHangHoaHinh($id);
                            $set = $hinh->fetch();
                            ?>
                            <div class="tab-pane active" id=""><img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" alt="" width="200px" height="350px"></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php
                            while ($img = $hinh->fetch()) :
                            ?>
                                <li class="active"><a href="#<?php echo $img['hinh']; ?>" data-toggle="tab">
                                        <img src="<?php echo 'Content/imagetourdien/' . $img['hinh']; ?>" alt="Học thiết kế web bán hàng Online"></a>
                                </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>

                        <h4 class="product-title" style="text-align: center"> <?php echo $tenhh; ?> </h4>
                        <div class="price" style="text-align: center">GIÁ BÁN: <?php echo number_format($dongia); ?> VND</div>
                        

                        <p class="product-description">
                            <?php
                            echo $mota;
                            ?>
                        </p>
                    
                        <div class="inline-block content-info" >
                        <b>Chiều cao: </b>
                        <span>60</span> 
                        <span>cm</span>

                        <b>Chiều rộng: </b>
                        <span>50</span> 
                        <span>cm</span>

                        <b>Size: </b>
                        <span>M</span> 
                    </div>
                    <div class="soluong">
                        <b>Số Lượng:</b>
                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                            </div>
                      
                            <div class="content-info warning" >
                        <b>Lưu ý:</b> 
                        <span>Sản phẩm hoa mẫu chỉ mang tính chất tham khảo.
                              <br>
                             Liti Florist khuyến khích khách hàng để những nghệ nhân thiết kế hoa 
                             của Liti có quyền tự do sáng tác giúp tận dụng tối đa được vẻ đẹp đa dạng của các loại hoa đang nở rộ trong mùa.
                        </span>
                        </div>
                        <div class="action">
                            <br>
                        <button>MUA NGAY</button>

                            <a href="http://hocwebgiare.com/" target="_blank"> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<?php 
if(isset($_SESSION['makh'])):
?>
<!-- <p class="float-left"><b>Bình luận </b></p> -->
<!-- <hr> -->
</div>

<form action="index.php?action=binhluan" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="<?php echo $id;?>" />
        <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="50" id="comment"
         placeholder="Thêm bình luận"></textarea>
        <input type="submit" class="btn btn-success" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <?php
    $bl=new binhluan();
    $noidung=$bl->selectComment($id);
    while($set=$noidung->fetch()):
    ?>
     <div class="col-12">
                    <div class="row">
                        <img src="Content/imagetourdien/people.png" alt="" width="20px" height="20px">
                        <p><?php echo '<b>'.$set['username'].'</b>:'.$set['content'];?></p>
                    </div>
                </div>
    
    <?php 
    endwhile;
    ?>
   
</div>
<div class="row">
    <br />
</div>
    <?php
    endif;
    ?>
</div>
</section>

<style>
    .content-info.warning {
    font-size: 12px;
    font-style: italic;
    padding: .1rem;
}

.btn, .inline-block {
    display: inline-block;
}
.inline-block {
    margin-right: 5px;
}

h3{
    font-size: 28px;
    margin-top: 4px;
}

button {
    outline: 0;
         border: 0;
         background: none;
         border: 1px solid #d9d9d9;
         padding: 8px 0px;
         margin-bottom: 30px;
         color: #515151;
         text-transform: uppercase;
         width: 180px;
         font-family: inherit;
         margin-right: 5px;
         transition: all 0.3s ease;
         font-weight: 500;
        /* justify-content: center; */
        margin-left: 195px;
         &:hover {
         background: yellow;
           border: 1px solid #aedaa6;
           color: black;
           cursor: pointer;
         }
         
         h6{
            font-size: 22px;
         }

         span{
            text-align: center;
         }

         .stars{
            text-align: center;
         }
        .submit, button{
            width: 25%;
        }
  }
</style>