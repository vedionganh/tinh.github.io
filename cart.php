<?php 
    require_once('lib/connect.php');
    include 'include/head.php';
 ?>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="cart.php">Giỏ hàng</a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 cart-page">
                        <div class="row">
                            <table border="1">
                                <div class="col-3 name">Tên sản phẩm</div>
                                <div class="col-3 amount">Số Lượng</div>
                                <div class="col-3 price">Giá</div>
                                <div class="col-3 amount">Tổng</div>
                            </table>     
                        </div>
                    </div>


                </div>
            </div
        </div>
                                    
        
        <?php include'include/footer.php' ?>   
         </body>
</html>
