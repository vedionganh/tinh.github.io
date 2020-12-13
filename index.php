<?php 
    require ("include/head.php");
    include("lib/connect.php");
    $sql1="select * from sanpham";
    $stm=$o->query($sql1);
    $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
    $sql2="select * from nhasanxuat";
    $stm=$o->query($sql2);
    $data2=$stm->fetchAll(PDO::FETCH_ASSOC);
 ?>
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Sản phẩm nổi bật</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Sản phẩm mới</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Dành cho nữ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Dành cho nam</a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-5">
                            <div class="header-slider-item">
                                <img src="img/black.jpg" alt="Slider Image" />
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/sale.jpg" />
                                
                            </div>
                            <div class="img-item">
                                <img src="img/da.jpg" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Thanh toán nhanh chóng</h2>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Giao hàng tận nơi</h2>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>15 ngày hoàn trả</h2>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Hổ trợ 24/7</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->    
        
        
         
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Nước hoa mới</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <?php 
                        foreach ($data1 as $key => $value) { 
                     ?>
                    <div class="col-lg-6">
                        <div class="product-item">
                            <div class="cat">
                                    <span>Nước hoa <?php echo $value['magioitinh'] ?></span>
                                </div>
                                
                            <div class="section-header">
                                <span ><?php echo $value['tensanpham']?></span>
                            </div>
                            
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="/html/img/<?php echo $value['hinhanh']?>" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-price">
                                <h3><?php echo number_format($value['gia']) ?> <span>VND</span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                            </div>
                            
                        </div>
                    </div>
                <?php } ?>

                </div>
            </div>
        </div>
           
        
        
        
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Nguyễn Linh Lam</h2>
                                <h3>Sinh Viên</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Nguyễn Lâm Khánh Linh</h2>
                                <h3>Nhân Viên Văn Phòng</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
        <?php include'include/footer.php' ?>
    </body>
</html>
