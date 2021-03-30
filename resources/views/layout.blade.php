<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <style>
        .bg-color {
            background-color: unset !important;
            position: absolute;
            top: 0;

        }

        .slide-img {
            max-width: 90%;
            width: 90% !important;
            margin: auto;
            position: relative;
        }

        .carousel-control-prev-icon {
            background-color: slategrey !important;
        }

        .carousel-control-next-icon {
            background-color: slategrey !important;
        }

        .color-text {
            color: orange !important;
        }

        .content-slide {
            z-index: auto;
            position: absolute;
            width: 100%;
            color: black;
        }

        .size-text {
            font-size: 16px;
        }

        .text {
            color: white;
        }

        .position-text {
            color: white !important;
            position: absolute;
            z-index: 1;
        }

        .children-slide {
            margin: auto !important;
        }

        .carousel-caption {
            bottom: 30%;
        }

        .custom-btn-send {
            background-color: orange;
            color: white;
            font-size: 16px;
            border-radius: 30px;
            text-transform: capitalize;
        }

        .custom-btn-send :hover {
            color: orange !important;
            background-color: white !important;
        }

        hr {
            height: 2px;
        }

        .text-tracking {
            color: #858585;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active parent-slide">
                    <img class="d-block  slide-img" src="../images/slide1.jpg" height="600px" alt="First slide">
                    <div class="carousel-caption d-none d-md-block children-slide">
                        <h1>VẬN CHUYỂN ĐƯỜNG BAY</h1>
                        <h5>Vận chuyển hàng hóa từ Nhật về Việt Nam bằng máy bay nhận hàng chỉ từ 5-7 ngày</h5>
                        <a href=""><button class="btn p-2 custom-btn-send">Gữi hàng ngay</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block  slide-img" src="../images/slide2.jpg" height="600px" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block ">
                        <h1>VẬN CHUYỂN ĐƯỜNG BIỂN</h1>
                        <h5>Vận chuyển hàng hóa từ Nhật về Việt Nam bằng tàu nhận hàng chỉ từ 24-35 ngày</h5>
                        <a href=""><button class="btn p-2 custom-btn-send">Gữi hàng ngay</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block  slide-img" src="../images/slider3.jpg" height="600px" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block ">
                        <h1>VẬN CHUYỂN ĐƯỜNG BAY</h1>
                        <h5>Vận chuyển hàng hóa từ Nhật về Việt Nam bằng máy bay nhận hàng chỉ từ 5-7 ngày</h5>
                        <a href=""><button class="btn p-2 custom-btn-send">Gữi hàng ngay</button></a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-color">
                <div class="container">
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="../images/logosaiko.png" width="200px" class="d-inline-block align-middle mr-2"
                                alt="">
                            <p class="color-text size-text">080.7965.3923(JP) 1900.2149 (VN)</p>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link color-text" href="#">Trang chủ <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com"
                                    id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Dịch Vụ</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#">Vận Chuyển Đường Biển</a>
                                    <a class="dropdown-item" href="#">Vận Chuyển Đường Bay</a>
                                    <a class="dropdown-item" href="#">Quy Trình Gữi Hàng</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com"
                                    id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Thông Tin</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com"
                                    id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Request&Tracking</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#">Vận Chuyển Đường Biển</a>
                                    <a class="dropdown-item" href="#">Vận Chuyển Đường Bay</a>
                                    <a class="dropdown-item" href="#">Quy Trình Gữi Hàng</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled color-text" href="#">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled color-text" href="#">Liên hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-text" href="#">Đăng Nhập</a>
                            </li>
                        </ul>
                        {{-- <form class="form-inline my-2 my-md-0">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form> --}}
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row p-3 mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="text-center">KIỆN HÀNG</h3>
                    <hr width="15%" color="orange">
                    <hr width="10%" color="orange">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div>
                        <figure class="figure">
                            <img src="../images/trip/map.jpg" class="figure-img img-fluid rounded"
                                alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <p class="text-tracking"><img src="../images/icons/ar-right.jpg" alt="">Kiện hàng của tôi nặng
                            bao nhiêu?</p>
                        <p class="text-tracking"><img src="../images/icons/ar-right.jpg" alt="">Tình trạng hàng hóa đang
                            ở đâu?</p>
                        <p class="text-tracking"><img src="../images/icons/ar-right.jpg" alt="">Làm thế nào để tự mình
                            kiểm tra?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
