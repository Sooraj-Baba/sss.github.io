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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="user_image.css">
    <link rel="stylesheet" href="home_prod.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="footest.css">
    <style>
    .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: 450px;
        display: inline-block;
        cursor: zoom-in;
    }


    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }

    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
    }
    </style>
    <style>
    .navbar-nav li {
        position: relative;
        padding-left: 5px;
    }


    .navbar-nav li:before {
        content: "";
        position: absolute;
        top: 78%;
        height: 3px;
        left: 0;
        width: 0;
        background-color: red;
        transition: all 0.4s linear;

    }

    .navbar-nav li:after {
        content: "";
        position: absolute;
        top: 26%;
        height: 3px;
        right: 0;
        width: 0;
        background-color: red;
        transition: all 0.4s linear;

    }

    .navbar-nav li:hover:before {
        width: 100%;
        background-color: lime;
    }

    .navbar-nav li:hover:after {
        width: 100%;
        background-color: lime;
    }
    </style>
</head>

<body>
    <?php include 'user_navbar.php'; ?>

    <div class="container">
        <?php
        include 'connection.php';
        $productid = $_GET['knowmore'];
        $shalu = "SELECT * FROM home_product WHERE id={$productid}";
        $shaluji = mysqli_query($scon, $shalu);
        $shalus = mysqli_num_rows($shaluji);

        if ($shalus == true) {

            while ($datapro = mysqli_fetch_array($shaluji)) {
                $dataid = $datapro['id'];
        ?>
        <form action="" method="POST">
            <br>
            <div class="card">
                <div class="row">
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img src="<?php echo $datapro['image1']; ?>"></a></div>
                            </div> <!-- slider-product.// -->
                            <div class="img-small-wrap">
                                <div class="item-gallery"> <img src="<?php echo $datapro['image2']; ?>"> </div>
                                <div class="item-gallery"> <img src="item/1.jpg"> </div>
                                <div class="item-gallery"> <img src="item/2.jpg"> </div>
                                <div class="item-gallery"> <img src="item/3.jpg"> </div>
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">Original Version of Some product name</h3>

                            <p class="price-detail-wrap">
                                <span class="price h3 text-warning">
                                    <span class="currency">US $</span><span class="num">1299</span>
                                </span>
                                <span>/per kg</span>
                            </p> <!-- price-detail-wrap .// -->
                            <dl class="item-property">
                                <dt>Description</dt>
                                <dd>
                                    <p>Here goes description consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco </p>
                                </dd>
                            </dl>
                            <dl class="param param-feature">
                                <dt>Pin Code Supported</dt>
                                <dd>according to given delivery area</dd>
                            </dl> <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>Dish Type</dt>
                                <dd>Vegetarian and Non Vegetarian</dd>
                            </dl> <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>Delivery place</dt>
                                <dd>Ghazipur,Mau, Kasimabad, Yurajpur,</dd>
                            </dl> <!-- item-property-hor .// -->

                            <hr>

                            <hr>
                            <a href="user_categories.php" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>

                        </article>
                    </aside>
                </div>
            </div>

        </form>
    </div>
    <?php
            }
        }
?>





    <?php include 'footer.php'; ?>
</body>

</html>