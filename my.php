<?php include'include/head.php' ?>
 <?php   require_once('lib/connect.php') ?>  
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="my.php">Thông tin cá nhân</a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">       
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Thông tin đơn hàng</a>
                            
                            
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Thông tin cá nhân</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>STT</th>
                                                <th>Sản phẩm</th>
                                                <th>Ngày đặt</th>
                                                <th>Giá</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Cập nhật thông tin</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Tên">   
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Họ">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Số Điện Thoại">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Địa chỉ">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Cập nhật</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Đổi mật khẩu</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Mật khẩu cũ">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Mật khẩu mới">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nhập lại mật khẩu">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        <?php include'include/footer.php' ?>
    </body>
</html>
