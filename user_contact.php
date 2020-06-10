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
    <?php include 'links.php'; ?><style type="text/css">
    body {
        color: #333;
        background: light;
        font-family: "Patua One", sans-serif;
    }

    .contact-form {
        padding: 30px;
        margin: 30px 0;
    }

    .contact-form h1 {
        color: darkmagenta;
        font-weight: bold;
        margin: 0 0 15px;
    }

    .contact-form .form-control,
    .contact-form .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .contact-form .form-control:focus {
        border-color: #19bc9d;
    }

    .contact-form .btn-primary {
        color: #fff;
        min-width: 150px;
        font-size: 16px;
        transition-delay: 0.3s;
        background-image: radial-gradient(red, black);
        border: none;

    }

    .contact-form .btn-primary:hover {
        background-image: linear-gradient(red, black);
    }

    .contact-form .btn i {
        margin-right: 5px;
    }

    .contact-form label {
        opacity: 0.7;
    }

    .contact-form textarea {
        resize: vertical;
    }

    .hint-text {
        font-size: 15px;
        padding-bottom: 20px;
        opacity: 0.6;
    }

    .con-form {
        max-width: auto;
        padding: 1rem;

        border-width: 3px;
        border-style: solid;
        border-image:
            linear-gradient(to bottom,
                red,
                rgba(0, 0, 0, 0)) 1 100%;
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
        $('.cnfm').waypoint(function(direction) {
            $('.cnfm').addClass('animated zoomIn')
        }, {
            offset: '240px'
        });

    });
    </script>
    <div class="container">
        <div class="row">
            <div class="con-form col-lg-6 col-md-offset-1 m-auto cnfm">
                <div class="contact-form">
                    <h1>Contact Us</h1>
                    <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query or
                        question.</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputPhone">Phone</label>
                                    <input type="text" class="form-control" id="inputPhone" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" class="form-control" id="inputSubject" required>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea class="form-control" id="inputMessage" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>