<div class="container-fluid">
    <script>
    $(document).ready(function() {
        $('.shsd').waypoint(function(direction) {
            $('.shsd').addClass('animated flipInX')
        }, {
            offset: '60%'
        });

    });
    </script>


    <h2 class="text-center pt-4 pb-3" style="font-family: 'Lobster', cursive;
 font-size:2.5rem;">
        Our Gallery
        <hr class="m-auto w-25 border border-success">
    </h2>
    <br>
    <div class="row">
        <div class="shcard card cardss" id="cardss">
            <div class="imgBx">
                <img src="gallery/s3.jpg" alt="images">
            </div>
            <div class="details">
                <h2>Basa Furama<br><span>at Emerlad</span></h2>
            </div>
        </div>

        <div class="shcard card cardss2" id="cardss3">
            <div class="imgBx">
                <img src="gallery/s4.jpg" alt="images">
            </div>
            <div class="details">
                <h2>Arancini<br><span>at Global Affair</span></h2>
            </div>
        </div>

        <div class="shcard card cardss3" id="cardss2">
            <div class="imgBx">
                <img src="gallery/s6.jpg" alt="images">
            </div>
            <div class="details">
                <h2>Chimichangas<br><span>at Blanco</span></h2>
            </div>
        </div>

    </div>
</div>