<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php include 'links.php'; ?>
    <title>title</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
        box-sizing: border-box;
    }




    .pars {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 10px 0 40px;
    }

    .spn {
        font-size: 12px;
    }

    .ankr {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 10px 0;
    }


    .mainform {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 16px;
        height: 100%;
        text-align: center;
    }

    .inp {
        background-color: #eee;
        border: 0.5px solid grey;
        padding: 4px;
        margin: 9px;
        width: 100%;
        height: 36px;
        border-radius: 7px;
        outline: none;
    }

    .inp:focus {
        background-color: #eee;
    }

    .errors {
        margin: -11.5px -6px;
        color: red;
        text-align: right;
        font-size: 0.9rem;
        font-weight: bold;
        height: 23px;
    }

    .maindivs {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        min-height: 625px;
    }

    .shalini-form {
        position: absolute;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .maindivs.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .maindivs.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {

        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .maindivs.right-panel-active .overlay-container {
        transform: translateX(-100%);
    }

    .overlay {
        background: #FF416C;
        background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
        background: linear-gradient(to right, #FF4B2B, #FF416C);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .maindivs.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .maindivs.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .maindivs.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .social-container {
        margin: 10px 0;
    }

    .social-container a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
        transition-duration: 0.4s;
    }

    .social-container a:hover {
        border: 1px solid darkblue;
        border-radius: 50%;
        color: yellow;
        background-color: deeppink;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }


    .shbtn {
        padding: 15px 26px;
        line-height: 5px;
        color: #fff;
        font-size: 20px;
        background: #ff0000;
        text-decoration: none;
        position: relative;
        transition: all ease .8s;
        overflow: hidden;
        display: inline-block;
        border-radius: 10px;
    }

    .shbtn span {
        z-index: 1;
        position: relative;
        color: white;
    }

    .shbtn:after {
        transform: scale(0);
        background: #000;
        position: absolute;
        right: -200px;
        bottom: -200px;
        content: '';
        border-radius: 100%;
        transition: all ease .8s;
        width: 400px;
        height: 400px
    }

    .shbtn:hover:after {
        transform: scale(1);
        transition: all ease .8s;

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
    <script>
    // var emaild = document.forms['shalini-form']['emails'];
    // var phone = document.forms['shalini-form']['numbers'];
    // var addresji = document.forms['shalini-form']['address'];
    // var loadimg = document.forms['shalini-form']['uploadimage'];
    // var password1 = document.forms['shalini-form']['passwords'];
    // var password2 = document.forms['shalini-form']['conf_pass'];
    // //    select all error elements

    // var err_email = document.getElementById('er_email');
    // var err_phone = document.getElementById('er_mobile');
    // var err_address = document.getElementById('er_address');
    // var err_upload = document.getElementById('er_upload');
    // var err_pass1 = document.getElementById('er_pass1');
    // var err_pass2 = document.getElementById('er_pass2');



    function userpress() {
        var full_name = document.getElementById('fullname').value;
        var fl_border = document.getElementById('fullname');
        var err_flname = document.getElementById('er_fullname');
        if (full_name == "") {
            err_flname.textContent = "please fill username !";
            fl_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (!isNaN(full_name)) {
            err_flname.textContent = "number is not allowed in username !";
            fl_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if ((full_name.length <= 2) || (full_name.length >= 20)) {
            err_flname.textContent = "username must be at least 3 or 20 char !";
            fl_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (full_name.length >= 3) {
            err_flname.textContent = "";
            fl_border.setAttribute("style", "border:1px solid grey;");
            return false;
        }
    }

    function hider() {
        var full_name = document.getElementById('fullname').value;
        var fl_border = document.getElementById('fullname');
        var err_flname = document.getElementById('er_fullname');
        if (full_name == "") {
            err_flname.textContent = "please fill username !";
            fl_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (full_name == "") {
            err_flname.textContent = "";
            fl_border.setAttribute("style", "border:1px solid grey;");
            return false;
        } else if (!isNaN(full_name)) {
            err_flname.textContent = "number is not allowed in username !";
            fl_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if ((full_name.length <= 2) || (full_name.length >= 20)) {
            err_flname.textContent = "username must be at least 3 or 20 char !";
            fl_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if ((full_name.length <= 2) || (full_name.length >= 20)) {
            err_flname.textContent = "";
            fl_border.setAttribute("style", "border:1px solid grey;");
            return false;
        } else if (!isNaN(full_name)) {
            err_flname.textContent = "";
            fl_border.setAttribute("style", "border:1px solid grey;");
            return false;
        }
    }

    function emailpress() {
        var emailval = document.getElementById('emailid').value;
        var em_border = document.getElementById('emailid');
        var err_em = document.getElementById('er_email');
        var atposition = emailval.indexOf("@");
        var dotposition = emailval.lastIndexOf(".");
        if (atposition < 1) {
            err_em.textContent = "@ invalid position";
            em_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (dotposition < atposition + 2) {
            err_em.textContent = "dot position invalid";
            em_border.setAttribute("style", "border:1px solid red;");
            return false;

        } else if (dotposition + 2 >= emailval.length) {
            err_em.textContent = "";
            em_border.setAttribute("style", "border:1px solid grey;");
            return false;
        }
    }

    function hideemail() {
        var emailval = document.getElementById('emailid').value;
        var em_border = document.getElementById('emailid');
        var err_em = document.getElementById('er_email');
        var atposition = emailval.indexOf("@");
        var dotposition = emailval.lastIndexOf(".");
        if (emailval == "") {
            err_em.textContent = "please fill email id !";
            em_border.setAttribute("style", "border:1px solid red;");
            return false;
        }
        if (atposition < 1) {
            err_em.textContent = "@ invalid position !";
            em_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (dotposition < atposition + 2) {
            err_em.textContent = "dot position invalid !";
            em_border.setAttribute("style", "border:1px solid red;");
            return false;

        } else if (dotposition + 2 >= emailval.length) {
            err_em.textContent = "";
            em_border.setAttribute("style", "border:1px solid grey;");
            return false;
        }
    }

    function numberpress() {
        var num_val = document.getElementById('mobile').value;
        var num_border = document.getElementById('mobile');
        var err_mobile = document.getElementById('er_mobile');
        if (num_val == "") {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "please fill number !";
            return false;
        } else if (isNaN(num_val)) {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "only numbers allowed !";
            return false;
        } else if (num_val.length < 10) {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "number length must be 10 digit !";
            return false;
        } else if (num_val.length < 11) {
            num_border.setAttribute("style", "border:1px solid grey");
            err_mobile.textContent = "";
            return false;
        } else if (num_val.length < 12) {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "invalid mobile number !";
            return false;
        }
    }

    function hidenumber() {
        var num_val = document.getElementById('mobile').value;
        var num_border = document.getElementById('mobile');
        var err_mobile = document.getElementById('er_mobile');
        if (num_val == "") {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "please fill number !";
            return false;
        } else if (isNaN(num_val)) {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "only numbers allowed !";
            return false;
        } else if (num_val.length < 10) {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "number length must be 10 digit !";
            return false;
        } else if (num_val.length < 11) {
            num_border.setAttribute("style", "border:1px solid grey");
            err_mobile.textContent = "";
            return false;
        } else if (num_val.length < 12) {
            num_border.setAttribute("style", "border:1px solid red");
            err_mobile.textContent = "invalid mobile number !";
            return false;
        }
    }

    function addresspress() {
        var add_val = document.getElementById('addre').value;
        var add_border = document.getElementById('addre');
        var err_add = document.getElementById('er_address');
        if (add_val == "") {
            err_add.textContent = "please fill address !";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (!isNaN(add_val)) {
            err_add.textContent = "number is not allowed in address !";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if ((add_val.length <= 5) || (add_val.length >= 50)) {
            err_add.textContent = "address must be at least 5 or 50 char !";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (add_val.length >= 8) {
            err_add.textContent = "";
            add_border.setAttribute("style", "border:1px solid grey;");
            return false;
        }
    }

    function hideaddress() {
        var add_val = document.getElementById('addre').value;
        var add_border = document.getElementById('addre');
        var err_add = document.getElementById('er_addre');
        if (add_val == "") {
            err_add.textContent = "please fill address !";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        }
        if (add_val == "") {
            err_add.textContent = "";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (!isNaN(full_name)) {
            err_add.textContent = "number is not allowed in address !";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if ((add_val.length <= 5) || (add_val.length >= 50)) {
            err_add.textContent = "address must be at least 5 or 50 char !";
            add_border.setAttribute("style", "border:1px solid red;");
            return false;
        } else if (add_val.length >= 8) {
            err_add.textContent = "";
            add_border.setAttribute("style", "border:1px solid grey;");
            return false;
        }
    }

    // function imgpress() {
    //     var img_val = document.getElementById('imgs').value;
    //     var img_border = document.getElementById('imgs');
    //     var err_img = document.getElementById('er_img');
    //     if (img_val) {

    //     }
    // }

    function passpress() {
        var passcheck = document.getElementById("password").value;
        var pass_border = document.getElementById("password");
        var er_pass = document.getElementById("er_pass1");
        if (passcheck == "") {
            er_pass.textContent = " Password must be filled !";
            pass_border.setAttribute("style", "border:1px solid red");
            return false;
        }
        if (passcheck.length <= 6) {
            er_pass.textContent = "Password must be more then 6 and 20 ! !";
            pass_border.setAttribute("style", "border:1px solid red");
            return false;
        }
        if (passcheck.length >= 7) {
            er_pass.textContent = "";
            pass_border.setAttribute("style", "border:1px solid red");
            return false;
        }

    }

    // 3. Password blur Validation Start
    function hidepass() {
        var passcheck = document.getElementById("password").value;
        var pass_border = document.getElementById("password");
        var er_pass = document.getElementById("er_pass1");
        if (passcheck == "") {
            er_pass.textContent = " Password must be filled !";
            pass_border.setAttribute("style", "border:1px solid red");
            return false;
        }

        if (passcheck.length <= 6) {
            er_pass.textContent = "Password must be more then 6 and 20 ! !";
            pass_border.setAttribute("style", "border:1px solid red");
            return false;
        }
        if (passcheck.length >= 7) {
            er_pass.textContent = "";
            pass_border.setAttribute("style", "border:1px solid grey");
            return false;
        }

    } // 3. End password blur validation
    // 3. End Password Validation

    // 4. Confirm password start validation
    function cpasspress() {
        var connpass = document.getElementById("confirmpas").value;
        var firstpass = document.getElementById("password").value;
        var cpas_border = document.getElementById("confirmpas");
        var errorpass = document.getElementById("er_passtwo");
        if (connpass == "") {
            errorpass.textContent = "Password must be filled !";
            cpas_border.setAttribute("style", "border:1px solid red");
            return false;
        }
        if (firstpass === connpass) {
            errorpass.textContent = "Password match!";
            cpas_border.setAttribute("style", "border:1px solid grey");
            return false;
        }
        if (firstpass !== connpass) {
            errorpass.textContent = "Failled to match passowrd !";
            cpas_border.setAttribute("style", "border:1px solid red");
            return false;

        }
    } // 4. End Password Validation
    </script>
    <div class="col-lg-8 m-auto pt-2">
        <div class="maindivs" id="shalini_main_container">
            <div class="shalini-form sign-up-container">
                <?php

                include 'connection.php';
                if (isset($_POST['shalini_submit'])) {
                    $fn = $_POST['fullname'];
                    $em = $_POST['emails'];
                    $nm = $_POST['numbers'];
                    $ad = $_POST['address'];
                    $filename = $_FILES["userimg"]["name"];
                    $tempname = $_FILES["userimg"]["tmp_name"];
                    $imgFolder = "uploded/" . $filename;
                    move_uploaded_file($tempname, $imgFolder);
                    $ps = $_POST['passwords'];
                    $cp = $_POST['conf_passs'];
                    $shalu_select = "SELECT * FROM register WHERE email = '$em'";
                    $sha_query = mysqli_query($scon, $shalu_select);
                    $check_row = mysqli_num_rows($sha_query);
                    if ($check_row) {

                        echo "<script>
                                swal('Email Already Exist!', '', 'error');
                                
                            </script>";
                    } else {

                        $shalu_insert  = "INSERT INTO register VALUES(id,'$fn','$em','$nm','$ad','$imgFolder','$ps','$cp')";
                        $shalini_qu = mysqli_query($scon, $shalu_insert);
                        if ($shalini_qu) {

                            echo "<script>
                            swal('Registration Successful!', '', 'success');
                            </script>";
                        } else {
                            echo "<script>
                                swal('Failled To Register!', '', 'error');
                                
                            </script>";
                        }
                    }
                }

                ?>


                <form class="mainform" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
                    enctype="multipart/form-data" method="POST" name="shalini_forms">
                    <h1 style="font-family: 'Fugaz One', cursive;">Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="ankr social"><i class="fa fa-facebook-f"></i></a>
                        <a href="#" class="ankr social"><i class="fa fa-google-plus"></i></a>

                        <a href="#" class="ankr social"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <span class="spn">or use your email for registration</span>
                    <input type="text" name="fullname" required="required" autocomplete="off" onkeyup="userpress()"
                        onblur="hider()" value="" id="fullname" class="inp w-75" placeholder="Full Name" />
                    <span class="errors float-right" id="er_fullname"></span>
                    <input type="email" name="emails" required="required" autocomplete="off" onkeyup="emailpress()"
                        onblur="hideemail()" value="" id="emailid" class="inp w-75" placeholder="Email" />
                    <span class="errors float-right" id="er_email"></span>
                    <input type="text" name="numbers" required="required" autocomplete="off" onkeyup="numberpress()"
                        onblur="hidernumber()" value="" id="mobile" class="inp w-75" placeholder="Mobile No." />
                    <span class="errors float-right" id="er_mobile"></span>
                    <input type="text" name="address" required="required" autocomplete="off" onkeyup="addresspress()"
                        onblur="hideaddress()" value="" id="addre" class="inp w-75" placeholder="Compelete Address" />
                    <span class="errors float-right" id="er_address"></span>
                    <input type="file" name="userimg" onkeyup="imgpress()" autocomplete="off" onblur="hideimg()"
                        value="" id="imgs" class="inp w-75" id="uploadimg" title="Upload Your Image" />
                    <span class="errors float-right" id="er_img"></span>
                    <input type="password" name="passwords" required="required" autocomplete="off" onkeyup="passpress()"
                        onblur="hidepass()" value="" id="password" class="inp w-75" placeholder="Password" />
                    <span class="errors float-right" id="er_pass1"></span>
                    <input type="password" name="conf_passs" required="required" autocomplete="off"
                        onkeyup="cpasspress()" onblur="hidecpass()" value="" id="confirmpas" class="inp w-75"
                        placeholder="Confirm Password" />
                    <span class="errors float-right" id="er_passtwo"></span>
                    <button class="shbtn mt-2" id="ghost" name="shalini_submit"><span> Sign Up</span></button>
                </form>
            </div>

            <div class="shalini-form pt-5 sign-in-container">
                <form class="mainform" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <h1 style="font-family: 'Fugaz One', cursive;">Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="ankr social"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="ankr social"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="ankr social"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <span class="spn">or use your account</span>
                    <input type="email" name="emailid" autocomplete="off" value="" required="required" class="inp w-75"
                        placeholder="Email" />
                    <!-- <span class="errors float-right">error</span> -->
                    <input type="password" name="passwording" autocomplete="off" value="" required="required"
                        class="inp w-75" placeholder="Password" />
                    <!-- <span class="errors float-right">error</span> -->
                    <a href="#" class="ankr">Forgot your password?</a>
                    <button class="btn shbtn" name="shalini_signin" value=""><span> Sign In</span></button>
                </form>
            </div>
            <?php
            include 'connection.php';
            if (isset($_POST['shalini_signin'])) {

                $ems = $_POST['emailid'];
                $user_pss = $_POST['passwording'];

                $shalini_login_name = "SELECT * FROM register WHERE email = '$ems'";
                $shalini_queryfire = mysqli_query($scon, $shalini_login_name);
                $checklines = mysqli_num_rows($shalini_queryfire);

                if ($checklines == true) {

                    $getdata_db = mysqli_fetch_array($shalini_queryfire);

                    $database_pass = $getdata_db['pass'];
                    $_SESSION['username'] = $getdata_db['fname'];
                    $_SESSION['emailid'] = $getdata_db['email'];
                    $_SESSION['mobileno'] = $getdata_db['mobile'];
                    $_SESSION['address'] = $getdata_db['adddress'];
                    $_SESSION['userimage'] = $getdata_db['iimage'];
                    if ($user_pss === $database_pass) {
                        echo "<script>
                            swal('Successfuly login !', '', 'success');
                            </script>";
            ?>
            <script>
            location.replace('userindex.php');
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
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="text-white" style="font-family: 'Fugaz One', cursive;">Welcome Back!</h1>
                        <p class="pars">To keep connected with us please login with your personal info</p>
                        <button class="shbtn" id="signIn"><span> Sign In</span></button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 class="text-white" style="font-family: 'Fugaz One', cursive;">Hello, Friend!</h1>
                        <p class="pars">Enter your personal details and start order products with us</p>
                        <button class="shbtn" id="signUp"><span> Sign Up</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>


    <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('shalini_main_container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
    </script>

</body>

</html>