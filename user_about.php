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
        font-family: "Open Sans", sans-serif;
    }

    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        position: relative;
        margin: 0 0 50px 0;
        text-transform: uppercase;
        display: inline-block;
    }

    h2::after {
        content: "";
        width: 50%;
        position: absolute;
        height: 4px;
        border-radius: 1px;
        background: #ff5555;
        left: 0;
        bottom: -20px;
    }

    .carousel {
        margin: 50px auto;
    }

    .carousel .item {
        color: #999;
        overflow: hidden;
        min-height: 120px;
        font-size: 13px;
    }

    .carousel .media {
        position: relative;
        padding: 0 0 0 20px;
        margin-left: 20px;
    }

    .carousel .media img {
        width: 75px;
        height: 75px;
        display: block;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        border: 2px solid #fff;
    }

    .carousel .testimonial {
        color: #fff;
        position: relative;
        background: #9b9b9b;
        padding: 15px;
        margin: 0 0 20px 20px;
    }

    .carousel .testimonial::before,
    .carousel .testimonial::after {
        content: "";
        display: inline-block;
        position: absolute;
        left: 0;
        bottom: -20px;
    }

    .carousel .testimonial::before {
        width: 20px;
        height: 20px;
        background: #9b9b9b;
        box-shadow: inset 12px 0 13px rgba(0, 0, 0, 0.5);
    }

    .carousel .testimonial::after {
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        border-left-color: #fff;
    }

    .carousel .item .row>div:first-child .testimonial {
        margin: 0 20px 20px 0;
    }

    .carousel .item .row>div:first-child .media {
        margin-left: 0;
    }

    .carousel .testimonial p {

        line-height: 21px;
        margin: 0;
    }

    .carousel .testimonial p::before {
        content: '\94';
        color: #fff;
        font-weight: bold;
        font-size: 68px;
        line-height: 70px;
        position: absolute;
        left: -55px;
        top: 0;
    }

    .carousel .overview {
        padding: 3px 0 0 15px;
    }

    .carousel .overview .details {
        padding: 5px 0 8px;
    }

    .carousel .overview b {
        text-transform: uppercase;
        color: #ff5555;
    }

    .carousel .carousel-control {
        width: 30px;
        height: 30px;
        background: #666;
        text-shadow: none;
        top: 4px;
    }

    .carousel-control i {
        font-size: 16px;
    }

    .carousel-control.left {
        left: auto;
        right: 40px;
    }

    .carousel-control.right {
        left: auto;
    }

    .carousel-indicators {
        bottom: -80px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 18px;
        height: 18px;
        border-radius: 0;
        margin: 1px 4px;
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: 4px solid #fff;
    }

    .carousel-indicators li.active {
        color: #fff;
        background: #ff5555;
        border: 5px double;
    }

    .star-rating li {
        padding: 0 2px;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffdc12;
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2>About Our <b>Company</b></h2>
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>


                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-6 animated jackInTheBox">
                                    <div class="testimonial">
                                        <p>Shalini a web developer is a programmer who specializes in, or is
                                            specifically
                                            engaged in, the development of World Wide Web applications using a
                                            client–server model.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="admin_image/shalu3.webp" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Shalini Singh</b></div>
                                                <div class="details">Owner of Properties<span class="badge badge-danger"
                                                        style="font-size: 13px;">Lawyer</span></div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial animated rollIn">
                                        <p>Web design refers to the design of websites that are displayed on the
                                            internet. It usually refers to the user experience aspects of website
                                            development rather than software development. ...</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="admin_image/shalu2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Shalu Singh </b></div>
                                                <div class="details">Credits for Shalu <span class="badge badge-danger"
                                                        style="font-size: 13px;">Web developer</span></div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $('.sdds').waypoint(function(direction) {
                $('.sdds').addClass('animated fadeInUp')
            }, {
                offset: '240px'
            });
            $('.sdm').waypoint(function(direction) {
                $('.sdm').addClass('animated fadeInDown')
            }, {
                offset: '450px'
            });
        });
        </script>
        <!-- Container (About Section) -->
        <div id="about" class="container">
            <div class="row">
                <div class="col-sm-8 sdds">
                    <h2>About Company Page</h2><br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui
                        officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br>
                </div>
                <div class="col-sm-4">
                    <span class="m-auto"><img src="images/shs.png" class="img-fluid m-auto" style="height: 290px;"
                            alt=""></span>
                </div>
            </div>
        </div>

        <div class="container bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="w-25"><img src="images/17964.jpg" class="img-fluid w-50" alt=""></span>
                </div>
                <div class="col-sm-8 sdm">
                    <h2>Our Values</h2><br>
                    <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>