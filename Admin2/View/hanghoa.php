
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH HÀNG HÓA</b></h3></div>
<!-- <div class="row col-12">
<a href="index.php?action=hanghoa&act=hanghoa_action"><h4>Thêm sản phẩm</h4></a>
</div> -->
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã loại</th>
        <th>Đặc biệt</th>
        <th>Lượt xem</th>
        <th>Ngày lập</th>
        <th colspan="4">Mô tả</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
        <th>Thêm</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
        $hh=new hanghoa();
        $hang=$hh->getHangHoa();
        while($set=$hang->fetch()):
      ?>
      <tr>
        <td><?php echo $set['mahh'];?></td>
       <td> <b><?php echo $set['tenhh'];?></b></td>
        <td><?php echo $set['maloai'];?></td>
        <td><?php echo $set['dacbiet'];?></td>
        <td><?php echo $set['soluotxem'];?></td>
        <td><?php echo $set['ngaylap'];?></td>
        <td><b><?php echo $set['mota'];?></b></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a class="btn btn-warning" href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh'];?>">Cập nhật</a></td>
        <td><a class="btn btn-danger" href="">Xóa</a></td>
        <td><a class="btn btn-success" href="index.php?action=hanghoa&act=hanghoa_action">Thêm sản phẩm</a></td>
      </tr>
     <?php
     endwhile;
     ?>
    </tbody>
  </table>
</div>

<style>
  h3{
    color: red;
    margin-bottom: 18px;
    padding-top: 8px;
    
  }
  th{
    width: 100px;
  }
  
</style>