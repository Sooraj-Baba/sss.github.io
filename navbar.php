 <nav class="shalini_navbar navbar navbar-expand-lg navbar-dark">
     <a class="navbar-brand font-bold" href="index.php" style="color:white; font-family: 'Fugaz One', cursive;
">Shalini Resturent.</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1"
         aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarText1">
         <ul class="navbar-nav m-auto animated fadeInRight" style="font-family: 'Amaranth', sans-serif;">
             <li class="shb nav-item">
                 <a class="nav-link waves-effect waves-light" href="index.php">Home<span
                         class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="shb nav-link waves-effect waves-light" href="about.php">About Us</a>
             </li>
             <li class="nav-item">
                 <a class="shb nav-link waves-effect waves-light" href="categories.php">Categories</a>
             </li>
             <li class="nav-item">
                 <a class="shb nav-link waves-effect waves-light" href="foods.php">Foods</a>
             </li>
             <li class="nav-item">
                 <a class="shb nav-link waves-effect waves-light" href="contact.php">Contact</a>
             </li>
             <li class="nav-item">
                 <a class="shb nav-link waves-effect waves-light" href="join.php">Join To Buy</a>
             </li>
             <li class="nav-item">
                 <a class="shb nav-link waves-effect waves-light" href="admin_login.php">Admin</a>
             </li>


         </ul>
         <form class="form-inline">
             <input class="shalinisss mr-sm-2" style="outline: none;" type="text" aria-label="Search">
             <button class="btn btn-outline-warning btn-sm my-0 text-white" type="submit">Search</button>
         </form>

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


    function adjustNav() {
        var winWidth = $(window).width(),
            dropdown = $('.dropdown'),
            dropdownMenu = $('.dropdown-menu');

        if (winWidth >= 768) {
            dropdown.on('mouseenter', function() {
                $(this).addClass('show')
                    .children(dropdownMenu).addClass('show');
            });

            dropdown.on('mouseleave', function() {
                $(this).removeClass('show')
                    .children(dropdownMenu).removeClass('show');
            });
        } else {
            dropdown.off('mouseenter mouseleave');
        }
    }

    $(window).on('resize', adjustNav);

    adjustNav();
});
 </script>
 <!--/.Navbar -->