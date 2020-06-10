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
    .inlineimage {
        max-width: 470px;
        margin-right: 8px;
        margin-left: 10px
    }

    .images {
        display: inline-block;
        max-width: 98%;
        height: auto;
        width: 22%;
        margin: 1%;
        left: 20px;
        text-align: center
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

        <!-- Credit Card Payment Form - START -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-md-offset-4 m-auto shadow ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <h2 class="text-center m-auto pb-4" style="font-family: 'Amaranth', sans-serif;">Payment
                                    Details</h2>
                                <div class="inlineimage"> <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png">
                                    <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png">
                                    <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png">
                                    <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php
                            include 'connection.php';


                            if (isset($_POST['shalu_conf_order'])) {
                                $card_no = $_POST['cardn'];
                                $exp = $_POST['expiredate'];
                                $cvvc = $_POST['cvvcode'];
                                $own = $_POST['cardowner'];

                                $shas = "INSERT INTO order_details(cardno,expiry,cvv,owners)VALUES('$card_no','$exp','$cvvc','$own')";
                                $msha = mysqli_query($scon, $shas);

                                if ($msha) {
                                    echo "<script> alert('Order Placed');
                                    </script>";
                                    echo "<script> location.replace('userindex.php'); 
                                
                                    </script>";
                                } else {
                                    echo "<script> swal('Failled to order ', ':)', 'error'); </script>";
                                }
                            }
                            ?>
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group"> <label>CARD NUMBER</label>
                                            <div class="input-group"> <input type="text" class="form-control"
                                                    placeholder="Valid Card Number" name="cardn" required="required"
                                                    value="" /> <span class="input-group-addon"><span
                                                        class="fa fa-credit-card" style="font-size:40px;"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-lg-7">
                                        <div class="form-group"> <label><span class="hidden-xs">EXPIRATION</span><span
                                                    class="visible-xs-inline">EXP</span> DATE</label> <input type="text"
                                                class="form-control" name="expiredate" value="" required="required"
                                                placeholder="MM / YY" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-lg-5 pull-right">
                                        <div class="form-group"> <label>CV CODE</label> <input type="text"
                                                name="cvvcode" value="" required="required" class="form-control"
                                                placeholder="CVC" /> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group"> <label>CARD OWNER</label> <input type="text"
                                                name="cardowner" value="" required="required" class="form-control"
                                                placeholder="Card Owner Name" /> </div>
                                    </div>
                                </div>
                                <div class="text-center pb-2"> <button class="btn btn-success btn-md text-center" style="background-image: 
                        radial-gradient(red,black);" name="shalu_conf_order" id="cnbtn">Confirm
                                        Payment</button> </div>
                            </form>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <br>
    <br><br>
    <?php include 'footer.php'; ?>
</body>

</html>