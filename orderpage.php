<?php session_start();
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
    .img-cart {
        display: block;
        max-width: 180px;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }

    table tr td {
        border: 1px solid #FFFFFF;
    }

    table tr th {
        background: #eee;
    }

    .panel-shadow {
        box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px 7px;
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
    <div class="container bootstrap snippet">
        <div class="col-lg-9 col-sm-9 content m-auto pt-5">

            <div class="row">
                <?php
                include 'connection.php';
                $buyid = $_GET['gotid'];
                $sha = "SELECT * FROM category WHERE id = {$buyid} ";
                $shs = mysqli_query($scon, $sha);
                $sss = mysqli_num_rows($shs);
                if ($sss == true) {
                    while ($shaso = mysqli_fetch_array($shs)) {
                ?>

                <div class="col-lg-12">
                    <div class="panel panel-info panel-shadow">
                        <h1 class="text-center" style="font-family: 'Amaranth', sans-serif;">Order package Details</h1>
                        <div class="panel-heading">

                            <h4 class="">

                                <img class="img-circle img-fluid" style="height: 70px; width:70px; border-radius:40%;"
                                    src="<?php echo $_SESSION['userimage']; ?>">
                                <span style="font-size: 1.4rem; color:blue;">
                                    <?php echo $_SESSION['username']; ?></span>--<span style="font-size: 1.3rem;">
                                    <i class=" text-dark">Address</i>---<span class="text-danger"
                                        style="font-size: 1.2rem;">
                                        <?php echo $_SESSION['address']; ?></span>
                                </span>
                            </h4>
                        </div>
                        <div class=" panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>MRP</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="<?php echo $shaso['item_image']; ?>" class="img-cart"></td>
                                            <td><strong><?php echo $shaso['item_name']; ?></strong>
                                                <p>1 :KG </p>
                                            </td>
                                            <td>
                                                <form class="form-inline">
                                                    <input class="form-control" type="text" value="1">
                                                    <button rel="tooltip" class="btn btn-default"><i
                                                            class="fa fa-pencil"></i></button>
                                                    <a href="#" class="btn btn-primary"><i
                                                            class="trashs fa fa-trash-o"></i></a>
                                                </form>
                                            </td>
                                            <script>
                                            $(document).ready(function() {
                                                $('.trashs').click(function() {
                                                    alert('item delet !');
                                                    location.replace('user_categories.php');
                                                });
                                            });
                                            </script>
                                            <td><strike><?php echo $shaso['cut_price']; ?></strike></td>
                                            <td><?php echo $shaso['price']; ?></td>
                                        </tr>

                                        <tr>
                                            <td colspan="4" class="text-right"><strong>Total</strong></td>
                                            <td><?php echo $shaso['price']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center m-auto pt-3">
                        <a href="confirm_order.php" class="btn text-white" style="background-image: 
                        radial-gradient(red,black);">Continue
                            Shopping</a>
                    </div>

                </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>