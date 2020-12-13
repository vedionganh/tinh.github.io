<?php  	session_start();  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The Perfume</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        Theperfume@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <a href="product-list.php" class="nav-item nav-link">Sản phẩm</a>
                            
                            <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
                            
                        </div>
                        <?php 
                            if(!isset($_SESSION['user'])){
                         ?>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                                <div class="dropdown-menu">
                                    <a href="dangnhap.php" class="dropdown-item">Đăng nhập</a>
                                    <a href="dangky.php" class="dropdown-item">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                        else
                        {
                         ?>
                         <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="my.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Cá nhân</a>
                                <div class="dropdown-menu">
                                    <a href="my.php" class="dropdown-item">Thông tin</a>
                                    <a href="logout.php" class="dropdown-item">Đăng Xuất</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo2.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                   
                        <div class="col-md-6">
                             <form action="search.php" method="post">
                        <div class="search">
                            <input type="text" name="keywords" placeholder="Search">
                            <button><i class="fa fa-search" name"search"></i></button>
                        </div>
                        </form>
                        
                        <?php 
                            include'search.php';
                         ?>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="user">
                            <a href="cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        