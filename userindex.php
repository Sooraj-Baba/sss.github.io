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
    <title>Resturent with Shalini</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="refresh" content="1"> -->

    <?php include 'links.php'; ?>
    <style type="text/css">
    .carousel {

        background: #ccc;
        position: relative;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    }

    .carousel:after {
        content: "";
        position: absolute;
        z-index: -1;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        height: 60px;
        bottom: 0px;
        left: 10px;
        right: 10px;
        border-radius: 100px / 20px;
    }

    .carousel .item {
        text-align: center;
        overflow: hidden;
        height: 475px;
    }



    .carousel .carousel-control {
        width: 50px;
        height: 50px;
        background: #000;
        margin: auto 0;
        opacity: 0.8;
    }

    .carousel .carousel-control:hover {
        opacity: 0.9;
    }

    .carousel .carousel-control i {
        font-size: 41px;
    }

    .carousel-caption h3,
    .carousel-caption p {
        color: #fff;
        display: inline-block;
        font-family: 'Oswald', sans-serif;
        text-shadow: none;
        margin-bottom: 20px;
    }

    .carousel-caption h3 {
        background: rgba(0, 0, 0, 0.9);
        padding: 12px 24px;
        font-size: 40px;
        text-transform: uppercase;
    }

    .carousel-caption p {
        background: #8fc93c;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: 300;
    }

    .carousel-action {
        padding: 10px 0 30px;
    }

    .carousel-action .btn {
        min-height: 34px;
        border-radius: 0;
        margin: 3px;
        min-width: 150px;
        text-transform: uppercase;
        font-family: 'Oswald', sans-serif;
    }

    .carousel-action .btn-primary {
        border-color: #000;
        background: none;
        color: #000;
    }

    .carousel-action .btn-primary:hover {
        background: #000;
        color: #fff;
    }

    .carousel-action .btn-success {
        background: #8fc93c;
        border: none;
    }

    .carousel-action .btn-success:hover {
        background: #87bd35;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        margin: 1px 6px;
    }

    .carousel-indicators li {
        background: transparent;
        border: 1px solid #fff;
    }

    .carousel-indicators li.active {
        background: #8fc93c;
        border-color: #8fc93c;
    }

    .nav-link img {
        border-radius: 50%;
        width: 36px;
        height: 36px;
        margin: -8px 0;
        float: left;
        margin-right: 10px;
    }
    </style>
    <style>
    .box {
        width: 1200px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        grid-gap: 15px;
        margin: 0 auto;
    }

    .shcard {
        position: relative;
        width: 300px;
        height: 350px;
        position: relative;
        background: linear-gradient(to right, purple, red);
        margin: 0 auto;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
    }

    .shcard:before,
    .shcard:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 4px;
        background: lightcoral;
        transition: 0.5s;
        z-index: -1;
    }

    .shcard:hover:before {
        transform: rotate(20deg);
        box-shadow: 0 2px 20px rgba(97, 221, 14, 0.795);
    }

    .shcard:hover:after {
        transform: rotate(10deg);
        box-shadow: 0 2px 20px rgba(9, 22, 206, 0.822);
    }

    .shcard .imgBx {
        position: absolute;
        top: 10px;
        left: 10px;
        bottom: 10px;
        right: 10px;
        background: #222;
        transition: 0.5s;
        z-index: 1;
    }

    .shcard:hover .imgBx {
        bottom: 80px;
    }

    .shcard .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .shcard .details {
        position: absolute;
        left: 10px;
        right: 10px;
        bottom: 10px;
        height: 60px;
        text-align: center;
    }

    .shcard .details h2 {
        margin: 0;
        padding: 0;
        font-weight: 600;
        font-size: 20px;
        color: #777;
        text-transform: uppercase;
    }

    .shcard .details h2 span {
        font-weight: 500;
        font-size: 16px;
        color: #f38695;
        display: block;
        margin-top: 5px;
    }

    .dropdown-menu {
        background-image: linear-gradient(black, red);
    }

    .dropdown-item {
        color: white;

    }

    .dropdown-item:hover {
        color: black;
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

    <?php include 'slider.php'; ?>

    <?php include 'user_home_product.php'; ?>

    <?php include 'gallery.php'; ?>
    <script>
    $(document).ready(function() {
        $('#cardss').waypoint(function(direction) {
            $('#cardss').addClass('animated bounceInLeft')
        }, {
            offset: '60%'
        });
        $('#cardss3').waypoint(function(direction) {
            $('#cardss3').addClass('animated flipInX')
        }, {
            offset: '60%'
        });
        $('#cardss2').waypoint(function(direction) {
            $('#cardss2').addClass('animated fadeInDownBig')
        }, {
            offset: '60%'
        });

    });
    </script>
    <?php include 'footer.php'; ?>

</body>

</html>