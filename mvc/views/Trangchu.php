<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost:8080/banquanaohuongdoituong/Trangchu">
    <meta charset="UTF-8">
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="ChiTietSP.html03a6f3">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/css/YourStyle.css" />
</head>

<body>
    <header>

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 tenShop">
                        <h5>Website bán quần áo trực tuyến Nhóm 4Men</h5>
                    </div>
                    <div class="col-md-3">
                        <span class="ph-number">SĐT: 0909 090 909</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="TrangChu.html"><img src="public/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item active">
                                <a href="TrangChu.html" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="navbar-item">
                                <a href="DanhMucSanPham.html" class="nav-link">Danh mục quần áo</a>
                            </li>
                            <li class="navbar-item">
                                <a href="http://localhost:8080/banquanaohuongdoituong/Logined/Dangnhap" class="nav-link">Đăng nhập</a>
                            </li>
                        </ul>
                       
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                            <span class="fa fa-search"></span>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   
    <?php
    require_once "./mvc/views/Page/".$data["Page"].".php";
    ?>
</html>