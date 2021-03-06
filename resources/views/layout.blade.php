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
                        <h1>V???N CHUY???N ???????NG BAY</h1>
                        <h5>V???n chuy???n h??ng h??a t??? Nh???t v??? Vi???t Nam b???ng m??y bay nh???n h??ng ch??? t??? 5-7 ng??y</h5>
                        <a href=""><button class="btn p-2 custom-btn-send">G???i h??ng ngay</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block  slide-img" src="../images/slide2.jpg" height="600px" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block ">
                        <h1>V???N CHUY???N ???????NG BI???N</h1>
                        <h5>V???n chuy???n h??ng h??a t??? Nh???t v??? Vi???t Nam b???ng t??u nh???n h??ng ch??? t??? 24-35 ng??y</h5>
                        <a href=""><button class="btn p-2 custom-btn-send">G???i h??ng ngay</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block  slide-img" src="../images/slider3.jpg" height="600px" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block ">
                        <h1>V???N CHUY???N ???????NG BAY</h1>
                        <h5>V???n chuy???n h??ng h??a t??? Nh???t v??? Vi???t Nam b???ng m??y bay nh???n h??ng ch??? t??? 5-7 ng??y</h5>
                        <a href=""><button class="btn p-2 custom-btn-send">G???i h??ng ngay</button></a>
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
                                <a class="nav-link color-text" href="#">Trang ch??? <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com"
                                    id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">D???ch V???</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="#">V???n Chuy???n ???????ng Bi???n</a>
                                    <a class="dropdown-item" href="#">V???n Chuy???n ???????ng Bay</a>
                                    <a class="dropdown-item" href="#">Quy Tr??nh G???i H??ng</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-text" color-text href="http://example.com"
                                    id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Th??ng Tin</a>
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
                                    <a class="dropdown-item" href="#">V???n Chuy???n ???????ng Bi???n</a>
                                    <a class="dropdown-item" href="#">V???n Chuy???n ???????ng Bay</a>
                                    <a class="dropdown-item" href="#">Quy Tr??nh G???i H??ng</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled color-text" href="#">Tin t???c</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled color-text" href="#">Li??n h???</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-text" href="#">????ng Nh???p</a>
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
                    <h3 class="text-center">KI???N H??NG</h3>
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
                            <p class="text-tracking ml-5"><img src="../images/icons/ar-right.jpg" alt="">Ki???n h??ng c???a
                                t??i
                                n???ng
                                bao nhi??u?</p>
                            <p class="text-tracking ml-5"><img src="../images/icons/ar-right.jpg" alt="">T??nh tr???ng h??ng
                                h??a
                                ??ang
                                ??? ????u?</p>
                            <p class="text-tracking ml-5"><img src="../images/icons/ar-right.jpg" alt="">L??m th??? n??o ?????
                                t???
                                m??nh
                                ki???m tra?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 mt-5">
                            <a class="border p-3 text-center ml-4" id="btn-nhap"><span>NH???P NGAY</span></a>
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
                                    <h4 style="color: white;">Vui L??ng Nh???p Tracking</h4>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-5 d-inline-flex mt-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control ip-nhapTracking"
                                            placeholder="Nh???p Tracking.....">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ml-5">
                                        <div class="form-group">
                                            <button type="submit" class="form-control w-100 p-2" id="btn-search">T??m
                                                ki???m</button>
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
                                <th style="text-align: center;">C??n N???ng(kg)</th>
                                <th style="text-align: center;">Th??? T??ch(kg)</th>
                                <th style="text-align: center;">Ng?????i G???i</th>
                                <th style="text-align: center;">Ng?????i Nh???n</th>
                                <th style="text-align: center;">S??T</th>
                                <th style="text-align: center;">?????a ch???</th>
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
                    <h3 class="text-center">QUY TR??NH G???I H??NG</h3>
                    <hr width="15%" color="orange">
                    <hr width="10%" color="orange">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center mt-4">
                        <img class="w-50" src="../images/donggoi/procedu.jpg" alt="">
                    </div>
                    <div class="mt-3  text-center">
                        <a href="#" class="border p-3" style="width:80% !important" id="see-more">Xem th??m</a>
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
                        <h3>D???CH V??? C???A SAIKO EXPRESS</h3>
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
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">KI???M TRA H??NG
                                        H??A</a></h4>
                                <p>M???i ki???n h??ng ?????n Saiko Express s??? ???????c ki???m tra ?????y ????? v?? ????ng l???i nguy??n ki???n. ?????m
                                    b???o ch??nh x??c v??? s??? l?????ng, c??n n???ng v?? k??ch th?????c th??ng h??ng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s4.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">????NG G??I CHUY??N
                                        NGHI???P</a></h4>
                                <p>H??? tr??? kh??ch h??ng ????ng g??i l???i h??ng h??a ch??a ????? ti??u chu???n v???n chuy???n. Chi ph?? ????ng
                                    g??i c??? th??? Saiko s??? th??ng b??o t??y theo t??nh tr???ng h??ng h??a ???????c g???i ?????n kho.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s1.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">B???O HI???M H??NG
                                        H??A</a></h4>
                                <p>Saiko s???n s??ng cung c???p d???ch v??? b???o hi???m h??ng h??a trong tr?????ng h???p m???t m??t, th???t l???c
                                    ????? gi???m thi???u t???i ??a r???i ro trong qu?? tr??nh v???n chuy???n.</p>
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
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">H??NH TH???C THANH
                                        TO??N</a></h4>
                                <p>??a d???ng h??nh th???c thanh to??n t???i Nh???t ho???c b??n Vi???t Nam, gi??p kh??ch h??ng c?? nhi???u s???
                                    l???a ch???n h??n, thu???n ti???n h??n, ph???c v??? l???i ??ch t???i ??a c???a kh??ch h??ng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s5.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">KHO B??I HI???N
                                        ?????I</a></h4>
                                <p>?????u t?? kho b??i chuy??n nghi???p. M???i ki???n h??ng ?????u ???????c l??u tr??? v?? s???p x???p m???t c??ch khoa
                                    h???c v?? logic. D??? d??ng ki???m tra v?? ?????i chi???u h??ng h??a.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-custom ">
                        <div class="item-divu">
                            <div>
                                <img src="../images/dichvu/s3.jpg" alt="item1" class="w-100">
                            </div>
                            <div class="text-center p-3">
                                <h4 class="a-font-size p-2"><a class="a-color" href="course_single.html">GIAO H??NG T???N
                                        N??I</a></h4>
                                <p>V???i m???ng l?????i li??n k???t c??ng c??c d???ch v??? v???n chuy???n n???i ?????a Vi???t Nam, ch??ng t??i c?? th???
                                    chuy???n h??ng ?????n ?????a ch??? ng?????i nh???n ??? t???t c??? 64 t???nh th??nh.</p>
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
                        <h3>T???I SAO CH???N CH??NG T??I</h3>
                        <hr width="15%" color="orange">
                        <hr width="10%" color="orange">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="3" data-speed="5"></h2>
                                <h4>3 chuy???n/ 1 tu???n</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="100000" data-speed="500000"></h2>
                                <h4>Kh??ch h??ng Saiko</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="980000" data-speed="400000"></h2>
                                <h4>S??? KG ???? v???n chuy???n</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="ed_counter">
                                <h2 class="timer" data-from="0" data-to="5" data-speed="100"></h2>
                                <h4>N??m kinh nghi???m</h4>
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
