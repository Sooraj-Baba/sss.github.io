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

    <style>
    .demo {
        padding: 45px 0
    }

    .product-grid2 {
        font-family: 'Open Sans', sans-serif;
        position: relative
    }

    .product-grid2 .product-image2 {
        overflow: hidden;
        position: relative
    }

    .product-grid2 .product-image2 a {
        display: block
    }

    .product-grid2 .product-image2 img {
        width: 100%;
        height: 230px;
    }

    .product-image2 .pic-1 {
        opacity: 1;
        transition: all .5s
    }

    .product-grid2:hover .product-image2 .pic-1 {
        opacity: 0
    }

    .product-image2 .pic-2 {
        width: 100%;
        height: 100%;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: all .5s
    }

    .product-grid2:hover .product-image2 .pic-2 {
        opacity: 1
    }

    .product-grid2 .social {
        padding: 0;
        margin: 0;
        position: absolute;
        bottom: 50px;
        right: 25px;
        z-index: 1
    }

    .product-grid2 .social li {
        margin: 0 0 10px;
        display: block;
        transform: translateX(100px);
        transition: all .5s
    }

    .product-grid2:hover .social li {
        transform: translateX(0)
    }

    .product-grid2:hover .social li:nth-child(2) {
        transition-delay: .15s
    }

    .product-grid2:hover .social li:nth-child(3) {
        transition-delay: .25s
    }

    .product-grid2 .social li a {
        color: #505050;
        background-color: #fff;
        font-size: 17px;
        line-height: 45px;
        text-align: center;
        height: 45px;
        width: 45px;
        border-radius: 50%;
        display: block;
        transition: all .3s ease 0s
    }

    .product-grid2 .social li a:hover {
        color: #fff;
        background-color: #3498db;
        box-shadow: 0 0 10px rgba(0, 0, 0, .5)
    }

    .product-grid2 .social li a:after,
    .product-grid2 .social li a:before {
        content: attr(data-tip);
        color: #fff;
        background-color: #000;
        font-size: 12px;
        line-height: 22px;
        border-radius: 3px;
        padding: 0 5px;
        white-space: nowrap;
        opacity: 0;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: -30px
    }

    .product-grid2 .social li a:after {
        content: '';
        height: 15px;
        width: 15px;
        border-radius: 0;
        transform: translateX(-50%) rotate(45deg);
        top: -22px;
        z-index: -1
    }

    .product-grid2 .social li a:hover:after,
    .product-grid2 .social li a:hover:before {
        opacity: 1
    }

    .product-grid2 .add-to-cart {
        color: #fff;
        background-color: #404040;
        font-size: 15px;
        text-align: center;
        width: 100%;
        padding: 10px 0;
        display: block;
        position: absolute;
        left: 0;
        bottom: -100%;
        transition: all .3s
    }

    .product-grid2 .add-to-cart:hover {
        background-color: #3498db;
        text-decoration: none
    }

    .product-grid2:hover .add-to-cart {
        bottom: 0
    }

    .product-grid2 .product-new-label {
        background-color: #3498db;
        color: #fff;
        font-size: 17px;
        padding: 5px 10px;
        position: absolute;
        right: 0;
        top: 0;
        transition: all .3s
    }

    .product-grid2:hover .product-new-label {
        opacity: 0
    }

    .product-grid2 .product-content {
        padding: 20px 10px;
        text-align: center
    }

    .product-grid2 .title {
        font-size: 17px;
        margin: 0 0 7px
    }

    .product-grid2 .title a {
        color: #303030
    }

    .product-grid2 .title a:hover {
        color: #3498db
    }

    .product-grid2 .price {
        color: #303030;
        font-size: 15px
    }

    @media screen and (max-width:990px) {
        .product-grid2 {
            margin-bottom: 30px
        }
    }

    .list-group-item a {
        color: black;
    }

    .list-group-item a:hover {
        color: white;
    }

    .list-group-item:hover {
        background-color: cornflowerblue;
        color: white;
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

    <script>
    $(document).ready(function() {
        $('.sns').waypoint(function(direction) {
            $('.sns').addClass('animated flipInY')
        }, {
            offset: '60%'
        });
        $('.scs').waypoint(function(direction) {
            $('.scs').addClass('animated flipInX')
        }, {
            offset: '35%'
        });

    });
    </script>
    <script>
    $(document).ready(function() {
        $('.wishtou').click(function() {
            swal('Product not available !', '', 'error');
        });
    });
    </script>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-sm-3">
                <div class="card bg-light mb-3 sns">
                    <div class="card-header bg-danger text-white text-uppercase"><i class="fa fa-list"></i> Categories
                    </div>
                    <ul class="list-group category_block">
                        <li class="list-group-item active"><a href="user_categories.php" class=" text-white">Indian
                                Foods</a>
                        </li>
                        <li class="list-group-item wishtou"><a href="">Chinese Foods</a></li>
                        <li class="list-group-item wishtou"><a href="">Fast Food</a></li>
                        <li class="list-group-item wishtou"><a href="">Family Fare</a></li>
                        <li class="list-group-item wishtou"><a href="">Buffets</a></li>
                    </ul>
                </div>
                <div class="card bg-light mb-3 scs">
                    <div class="card-header bg-success text-white text-uppercase">Last product</div>
                    <div class="card-body">
                        <img class="img-fluid" src="cate/qq.jpg" />
                        <h5 class="card-title">Pizza</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="bloc_left_price">13.00 $</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">


                <div class="container">

                    <div class="row">
                        <?php

                        include 'connection.php';
                        // $shid = $_GET['gotid'];
                        $shaluS = "SELECT * FROM category ORDER by id ASC";
                        $shalini_queryfire = mysqli_query($scon, $shaluS);
                        $shalu_check_row = mysqli_num_rows($shalini_queryfire);
                        if ($shalu_check_row > 0) {

                            while ($shalu_fetch_data = mysqli_fetch_array($shalini_queryfire)) {
                                $findId = $shalu_fetch_data['id'];


                        ?>
                        <div class="col-md-3 col-sm-6">
                            <form action="" method="POST">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="#">
                                            <img class="pic-1" src="<?php echo $shalu_fetch_data['item_image']; ?>">
                                            <img class="pic-2" src="<?php echo $shalu_fetch_data['img2']; ?>">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                        class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="#" data-tip="Add to Cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                        <a class="shalini_buy add-to-cart"
                                            href="orderpage.php?gotid=<?php echo $shalu_fetch_data['id']; ?>">Order
                                            Now</a>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#"><?php echo $shalu_fetch_data['item_name']; ?></a>
                                        </h3>
                                        <span class="price"><?php echo $shalu_fetch_data['price']; ?></span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                            }
                        }
                        ?>





                    </div>



                </div>


            </div>

        </div>
    </div>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>