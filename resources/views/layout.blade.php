<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .bg-color {
            background-color: unset !important;
            position: absolute;
            top: 0;

        }
        
        .slide-img {
            max-width: 100%;
            width:100% !important;
            margin: auto;
        }

        .carousel-control-prev-icon {
            background-color: slategrey !important;
        }
        .carousel-control-next-icon{
            background-color: slategrey !important;
        }
        .color-text{  
            color: orange !important;
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
                <div class="carousel-item active">
                    <img class="d-block  slide-img" src="../images/slide1.jpg" height="600px"  alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block  slide-img" src="../images/slide2.jpg"height="600px" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block  slide-img" src="../images/slider3.jpg"height="600px" alt="Third slide">
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
                    <a class="navbar-brand" href="#">
                        <img src="../images/logosaiko.png" width="200px" class="d-inline-block align-middle mr-2" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link color-text" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com" id="dropdown07"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch Vụ</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#">Vận Chuyển Đường Biển</a>
                                    <a class="dropdown-item" href="#">Vận Chuyển Đường Bay</a>
                                    <a class="dropdown-item" href="#">Quy Trình Gữi Hàng</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com" id="dropdown07"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thông Tin</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com" id="dropdown07"
                                    data-toggle="dropdown" aria-haspopup="true"
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
                        <form class="form-inline my-2 my-md-0">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>

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
