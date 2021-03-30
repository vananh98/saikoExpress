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
            font-size: 25px;
            color: #858585;
        }

        #btn-nhap {
            border: 1px solid #fca901 !important;
        }

        .form-tracking {
            background-color: #fca901;
        }

        .ip-nhapTracking {
            border: 1px solid #fff;
            border-color: white;
            color: white !important;
            background-color: #fca901;
            border-radius: 30px !important;
        }

        #btn-search {
            color: #fca901;
            border-radius: 30px;
        }

        table.table-bordered {
            border: 1px solid #fca901 !important;
        }

        table tr {
            border: 1px solid #fca901 !important;
        }

        #see-more {
            border-radius: 30px;
            background-color: #fca901 !important;
            color: white;
            border: 1px solid #fca901;
        }

        #qt-guihang {
            background-color: #f5f5f5;
        }

        #dichvu {
            background-color: #f5f5f5;
        }

        .col-custom {
            float: left;
        }

        .item-divu {
            background-color: white;
        }

        .a-font-size {
            border-bottom: 1px solid #ddd;
            font-size: 20px;
        }

        .a-color {
            color: #272727 !important;
        }

        #whychooseme {
            background-size: cover;
            background-attachment: fixed;
            background-image: url('../images/background/section_3_bg.jpg');
            background-repeat: no-repeat;
            background-position: 100% 100%;
            position: relative;
        }

        .padding-bt {
            padding-bottom: 100px 
        }

        .padding-top {
            padding-top: 100px;
        }

        .img_overlay {
            position: absolute;
            top: 0%;
            left: 0%;
            right: 0%; 
            bottom: 0%;
            background-color: rgba(0, 0, 0, 0.8) !important;
        }

        .ed_counter h2 {
            text-align: center;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 30px;
            position: relative;
            margin: 0px;
            text-transform: uppercase;
            display: inline-block;
            color: #ffffff;
            border: 2px dashed #ffffff;
            width: 125px;
            height: 125px;
            line-height: 125px;
            border-radius: 100%;
            margin-bottom: 10px;
            transition: all 0.3s;
        }
        .ed_counter h4{
            color: white;
            text-transform:capitalize
        }
    </style>
</head>

<body>
    {{-- header --}}
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
    {{-- body --}}
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
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <p class="text-tracking ml-5"><img src="../images/icons/ar-right.jpg" alt="">Kiện hàng của
                                tôi
                                nặng
                                bao nhiêu?</p>
                            <p class="text-tracking ml-5"><img src="../images/icons/ar-right.jpg" alt="">Tình trạng hàng
                                hóa
                                đang
                                ở đâu?</p>
                            <p class="text-tracking ml-5"><img src="../images/icons/ar-right.jpg" alt="">Làm thế nào để
                                tự
                                mình
                                kiểm tra?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 mt-5">
                            <a class="border p-3 text-center ml-4" id="btn-nhap"><span>NHẬP NGAY</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-4 mt-5 ">
                            <a class=" p-3 "><i class="transition fa fa-hand-o-down fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-tracking rounded w-100">
                            <form action="" method="POST" class="p-4">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4 ml-5">
                                    <h4 style="color: white;">Vui Lòng Nhập Tracking</h4>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-5 d-inline-flex mt-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control ip-nhapTracking"
                                            placeholder="Nhập Tracking.....">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ml-5">
                                        <div class="form-group">
                                            <button type="submit" class="form-control w-100 p-2" id="btn-search">Tìm
                                                kiếm</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-2" style="display:none">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th style="text-align: center;">ID</th>
                                <th style="text-align: center;">Cân Nặng(kg)</th>
                                <th style="text-align: center;">Thể Tích(kg)</th>
                                <th style="text-align: center;">Người Gửi</th>
                                <th style="text-align: center;">Người Nhận</th>
                                <th style="text-align: center;">SĐT</th>
                                <th style="text-align: center;">Địa chỉ</th>
                            </tr>
                        </thead>
                        <tbody id="body-table-index">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- body --}}
    <div class="container-fluid" id="qt-guihang">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                    <h3 class="text-center">QUY TRÌNH GỮI HÀNG</h3>
                    <hr width="15%" color="orange">
                    <hr width="10%" color="orange">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center mt-4">
                        <img class="w-50" src="../images/donggoi/procedu.jpg" alt="">
                    </div>
                    <div class="mt-3  text-center">
                        <a href="#" class="border p-3" style="width:80% !important" id="see-more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- body --}}
    <div class="container-fluid" id="dichvu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                    <div class="text-center">
                        <h3>DỊCH VỤ CỦA SAIKO EXPRESS</h3>
                        <hr width="15%" color="orange">
                        <hr width="10%" color="orange">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s2.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">KIỂM TRA HÀNG
                                        HÓA</a></h4>
                                <p>Mỗi kiện hàng đến Saiko Express sẽ được kiểm tra đầy đủ và đóng lại nguyên kiện. Đảm
                                    bảo chính xác về số lượng, cân nặng và kích thước thùng hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s4.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">ĐÓNG GÓI CHUYÊN
                                        NGHIỆP</a></h4>
                                <p>Hỗ trợ khách hàng đóng gói lại hàng hóa chưa đủ tiêu chuẩn vận chuyển. Chi phí đóng
                                    gói cụ thể Saiko sẽ thông báo tùy theo tình trạng hàng hóa được gửi đến kho.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s1.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">BẢO HIỂM HÀNG
                                        HÓA</a></h4>
                                <p>Saiko sẵn sàng cung cấp dịch vụ bảo hiểm hàng hóa trong trường hợp mất mát, thất lạc
                                    để giảm thiểu tối đa rủi ro trong quá trình vận chuyển.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s6.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">HÌNH THỨC THANH
                                        TOÁN</a></h4>
                                <p>Đa dạng hình thức thanh toán tại Nhật hoặc bên Việt Nam, giúp khách hàng có nhiều sự
                                    lựa chọn hơn, thuận tiện hơn, phục vụ lợi ích tối đa của khách hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s5.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">KHO BÃI HIỆN
                                        ĐẠI</a></h4>
                                <p>Đầu tư kho bãi chuyên nghiệp. Mỗi kiện hàng đều được lưu trữ và sắp xếp một cách khoa
                                    học và logic. Dễ dàng kiểm tra và đối chiếu hàng hóa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s3.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">GIAO HÀNG TẬN
                                        NƠI</a></h4>
                                <p>Với mạng lưới liên kết cùng các dịch vụ vận chuyển nội địa Việt Nam, chúng tôi có thể
                                    chuyển hàng đến địa chỉ người nhận ở tất cả 64 tỉnh thành.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- body --}}
    <div class="container-fluid w-100 padding-bt padding-top" id="whychooseme">
        <div class="img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center text-light">
                        <h3>TẠI SAO CHỌN CHÚNG TÔI</h3>
                        <hr width="15%" color="orange">
                        <hr width="10%" color="orange">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="3" data-speed="5"></h2>
                                <h4>3 chuyến/ 1 tuần</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="100000" data-speed="500000"></h2>
                                <h4>Khách hàng Saiko</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="980000" data-speed="400000"></h2>
                                <h4>Số KG đã vận chuyển</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="5" data-speed="100"></h2>
                                <h4>Năm kinh nghiệm</h4>
                            </div>
                        </div>
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
