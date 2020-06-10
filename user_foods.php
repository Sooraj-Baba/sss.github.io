<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php'; ?>
    <style type="text/css">
    body {
        background: #ebebeb;
    }

    h2 {
        color: #696969;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        position: relative;
        margin: 40px 70px;
        text-transform: uppercase;
        font-family: 'Open Sans', sans-serif;
    }

    h2::after {
        content: "";
        width: 100%;
        position: absolute;
        margin: 0 auto;
        height: 1px;
        border-radius: 1px;
        background: #d4d4d4;
        left: 0;
        right: 0;
        bottom: 14px;
    }

    h2 span {
        display: inline-block;
        padding: 0 25px;
        background: #ebebeb;
        position: relative;
        z-index: 2;
    }

    .col-center {
        margin: 0 auto;
        float: none !important;
    }

    .carousel {
        margin: 30px auto 50px;
        padding: 0 68px;
    }

    .carousel .item {
        text-align: center;
        overflow: hidden;
        height: 240px;
    }

    .carousel .item .img-box {
        background: #fff;
        padding: 9px;
        box-shadow: 0 6px 20px -6px rgba(0, 0, 0, 0.4);
    }

    .carousel .item img {
        margin: 0 auto;
    }

    .carousel .carousel-control {
        width: 68px;
        background: none;
    }

    .carousel .carousel-control i {
        font-size: 28px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin-top: -15px;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }

    .carousel .carousel-indicators {
        bottom: -40px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin: 1px 4px;
        box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li {
        background: #999;
        border-color: transparent;
    }

    .carousel-indicators li.active {
        background: #555;
    }
    </style>
    <style>
    .sss li {
        position: relative;
        padding-left: 5px;
    }


    .sss li:before {
        content: "";
        position: absolute;
        top: 78%;
        height: 3px;
        left: 0;
        width: 0;
        background-color: red;
        transition: all 0.4s linear;

    }

    .sss li:after {
        content: "";
        position: absolute;
        top: 26%;
        height: 3px;
        right: 0;
        width: 0;
        background-color: red;
        transition: all 0.4s linear;

    }

    .sss li:hover:before {
        width: 100%;
        background-color: lime;
    }

    .sss li:hover:after {
        width: 100%;
        background-color: lime;
    }
    </style>
</head>

<body>
    <?php include 'user_navbar.php'; ?>
    <div class="container-fluid">
        <script>
        $(document).ready(function() {
            $('.sdh').waypoint(function(direction) {
                $('.sdh').addClass('animated rotateInUpLeft')
            }, {
                offset: '300px'
            });
            $('.scs').waypoint(function(direction) {
                $('.scs').addClass('animated rotateInUpRight')
            }, {
                offset: '35%'
            });

        });
        </script>
        <div class="row">
            <div class="col-md-12 m-auto sdh">
                <h2><span>Our Foods <b>Item</b></span></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/cx.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/cxx.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/df.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/ges.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/im.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/m.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/n.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/nm.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/s5.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-auto sdh">
                <h2><span>Our Foods <b>Item</b></span></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/sa.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/v.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/vf.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/xx.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/im.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/m.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/n.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/nm.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-box"><img src="foods/s5.jpg" class="img-responsive img-fluid"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>