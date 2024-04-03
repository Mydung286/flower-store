<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-6 login-sec">
        <h3 class="text-center"><b>Login Now</b></h3>
        <form  action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>

          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button> 
            
          </div>

        </form>
        <div class="copy-text">Liti Florist<i class="fa fa-heart"></i> <a href="index.php?action=forget">Quên mật khẩu</a></div>
      </div>
      <div class="col-md-6 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class=" img-fluid w-100" src="Content/imagetourdien/hoa2.png" alt="First slide">
          
            </div>
            <div class="carousel-item">
              <img class=" img-fluid w-50" src="Content/imagetourdien/hoa5.png" alt="First slide">
    
            </div>
            <div class="carousel-item">
              <img class="img-fluid w-50" src="./Content/imagetourdien/hoa.png" alt="First slide">
    
            </div>
          </div>

        </div>
      </div>
    </div>
</section>
<style>
  h3{
    color: red;
    font-size: 24px;
  }
</style>