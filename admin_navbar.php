 <nav class="shalini_navbar navbar navbar-expand-lg navbar-dark">
     <a class="navbar-brand font-bold" href="admin_index.php"
         style="color:white; font-family: 'Fugaz One', cursive;">Sooraj Resturent.</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1"
         aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse pl-5 pr-5" id="navbarText1">
         <ul class="sss navbar-nav m-auto animated bounceInLeft" style="font-family: 'Amaranth', sans-serif;">
             <li class="nav-item">
                 <a class="nav-link waves-effect waves-light" href="admin_index.php">Home<span
                         class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link waves-effect waves-light" href="admin_categories.php">Categories</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link waves-effect waves-light" href="admin_foods.php">Foods</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link waves-effect waves-light" href="admin_about.php">About Us</a>
             </li>


         </ul>
         <form class="form-inline">
             <input class="shalinisss mr-sm-2" style="outline: none;" type="text" aria-label="Search">
             <button class="btn btn-outline-warning btn-sm my-0 text-white" type="submit">Search</button>
         </form>
         <ul class="nav navbar-nav navbar-right ml-auto">

             <li class="nav-item dropdown">
                 <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img
                         src="<?php echo $_SESSION['adminimg']; ?>" alt="Avatar"> <?php echo $_SESSION['adnames']; ?>
                     <b class="caret"></b></a>
                 <ul class="dropdown-menu" style="margin-bottom:0;">
                     <li class="shs"><a href="user_profile.php" class="dropdown-item"><i class="fa fa-user-o"></i>
                             Profile</a></li>

                     <li class="shs"><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>
                             Settings</a></>
                     <li class="divider dropdown-divider"></li>
                     <li class="shs"><a href="logout.php" class=" dropdown-item"><i class="material-icons">&#xE8AC;</i>
                             Logout</a>
                     </li>
                 </ul>
             </li>
         </ul>
     </div>
 </nav>
 <script>
$(document).ready(function() {
    $('.shalini_navbar').css({
        "background-image": "linear-gradient(red,black)"
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 110) {
            $(".shalini_navbar").css({
                "background-image": "linear-gradient(darkblue,deeppink)"
            });
        } else {
            $(".shalini_navbar").css({
                "background-image": "linear-gradient(red,black)"
            });
        }
    })
})
$(document).ready(function() {
    $('.shalinisss').css({
        "border": "none",
        "background": "transparent",
        "border-bottom": "2px solid yellow",

        "color": "white",
    });
    $('.nav-link').css({
        "color": "yellow",
    });
});
$(function($) {
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 100) {
            $('.navbar').addClass('fixed-top');


        } else if ($(this).scrollTop() == 0) {
            $('.navbar').removeClass('fixed-top');
        }
    });


    // function adjustNav() {
    //     var winWidth = $(window).width(),
    //         dropdown = $('.dropdown'),
    //         dropdownMenu = $('.dropdown-menu');

    //     if (winWidth >= 760) {
    //         dropdown.on('mouseenter', function() {
    //             $(this).addClass('show')
    //                 .children(dropdownMenu).addClass('show');
    //         });

    //         dropdown.on('mouseleave', function() {
    //             $(this).removeClass('show')
    //                 .children(dropdownMenu).removeClass('show');
    //         });
    //     } else {
    //         dropdown.off('mouseenter mouseleave');
    //     }
    // }

    // $(window).on('resize', adjustNav);

    // adjustNav();
});
 </script>