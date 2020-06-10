<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php include 'links.php'; ?>
    <style>
    body {

        background-image: radial-gradient(red, black);
    }

    .box {
        /* height: auto; */
        padding: 40px;
        background-image: radial-gradient(red, black);
        text-align: center;
        transition: 0.25s;

    }

    .box input[type="email"],
    .box input[type="password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 10px 10px;
        width: 250px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s
    }

    .box h1 {
        color: white;
        text-transform: uppercase;
        font-weight: 500
    }

    .box input[type="email"]:focus,
    .box input[type="password"]:focus {
        width: 300px;
        border-color: #2ecc71
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 2s;
        cursor: pointer
    }

    .box input[type="submit"]:hover {
        background-image: radial-gradient(red, black);

    }

    .forgot {
        text-decoration: underline
    }

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left: 0 !important;
        padding: 0
    }

    ul.social-network li {
        display: inline;
        margin: 0 5px
    }

    .social-network a.icoFacebook:hover {
        background-color: #3B5998
    }

    .social-network a.icoTwitter:hover {
        background-color: #33ccff
    }

    .social-network a.icoGoogle:hover {
        background-color: #BD3518
    }

    .social-network a.icoFacebook:hover i,
    .social-network a.icoTwitter:hover i,
    .social-network a.icoGoogle:hover i {
        color: #fff
    }

    a.socialIcon:hover,
    .socialHoverClass {
        color: #44BCDD
    }

    .social-circle li a {
        display: inline-block;
        position: relative;
        margin: 0 auto 0 auto;
        border-radius: 50%;
        text-align: center;
        width: 50px;
        height: 50px;
        font-size: 20px
    }

    .social-circle li i {
        margin: 0;
        line-height: 50px;
        text-align: center
    }

    .social-circle li a:hover i,
    .triggeredHover {
        transform: rotate(360deg);
        transition: all 0.2s
    }

    .social-circle i {
        color: #fff;
        transition: all 0.8s;
        transition: all 0.8s
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
    <?php include 'navbar.php'; ?>
    <?php
    include 'connection.php';
    if (isset($_POST['admin_shalu'])) {

        $ems = $_POST['adminemail'];
        $admin_pss = $_POST['adminpass'];

        $shalini_login_name = "SELECT * FROM admin WHERE emails = '$ems'";
        $shalini_queryfire = mysqli_query($scon, $shalini_login_name);
        $checklines = mysqli_num_rows($shalini_queryfire);

        if ($checklines == 1) {

            $getdata_db = mysqli_fetch_array($shalini_queryfire);

            $database_pass = $getdata_db['adminpassword'];
            $_SESSION['adnames'] = $getdata_db['adminnames'];
            $_SESSION['adminimg'] = $getdata_db['adminimage'];

            if ($admin_pss === $database_pass) {
                echo "<script>
                            alert('login successfuly');
                            </script>";
    ?>
    <script>
    location.replace('admin_panel.php');
    </script>
    <?php


            } else {
                echo "<script>
                            swal('Invalid Password !', '', 'error');
                            </script>";
            }
        } else {
            echo "<script>
                            swal('Invalid Email Id !', '', 'error');
                            </script>";
        }
    }


    ?>
    <div class="container">
        <script>
        $(document).ready(function() {
            $('.shlji').waypoint(function(direction) {
                $('.shlji').addClass('animated fadeInLeft')
            }, {
                offset: '240px'
            });
            $('.sdm').waypoint(function(direction) {
                $('.sdm').addClass('animated fadeInRight')
            }, {
                offset: '450px'
            });
        });
        </script>
        <div class="row">
            <div class="col-lg-6 m-auto shlji" style="padding-top: 70px;">
                <div class="card">
                    <form class="box" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <h1 style="font-family: 'Metal Mania', cursive;">Admin Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p>
                        <input type="email" name="adminemail" autocomplete="off" value="" placeholder="Email Id">
                        <input type="password" name="adminpass" autocomplete="off" placeholder="Password">
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                        <input type="submit" name="admin_shalu" value="Login">
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i
                                            class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <?php include 'footer.php'; ?>
</body>

</html>