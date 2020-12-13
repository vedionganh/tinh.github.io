
        <?php include'include/head.php';
            include'lib/connect.php';
            $sql1="select * from sanpham";
            $stm=$o->query($sql1);
            $data3=$stm->fetchAll(PDO::FETCH_ASSOC);
        ?>    
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="product-list.php">Sản phẩm</a></li>
                   
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php 
                                 foreach ($data3 as $key => $value) { 
                            ?>
                            <div class="col-md-4">
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
            </div>
        </div>
                        
                        
        
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
        
        <?php include'include/footer.php' ?>
    </body>
</html>
