  <div class="container-fluid">

      <h2 class="text-center pt-4 pb-4" style="font-family: 'Lobster', cursive;
 font-size:2.5rem;">
          World Best Dishes Shop
          <hr class="m-auto w-50 border border-success">

      </h2>

      <br>

      <div class="row">
          <?php
            include 'connection.php';

            $shsel = "SELECT * FROM home_product ORDER BY id ASC";
            $qus = mysqli_query($scon, $shsel);
            $chk = mysqli_num_rows($qus);
            if ($chk > 0) {

                while ($showval = mysqli_fetch_array($qus)) {
                    $dataid = $showval['id'];

            ?>
          <script>
          $(document).ready(function() {
              $('.shsh').waypoint(function(direction) {
                  $('.shsh').addClass('animated flipInX')
              }, {
                  offset: '60%'
              });

          });
          </script>
          <div class="col-md-3 col-sm-6 shsh">
              <form action="" method="POST">
                  <div class="product-grid4">
                      <div class="product-image4">
                          <a href="#">
                              <img class="pic-1 img-fluid" src="<?php echo $showval['image1']; ?>">
                              <img class="pic-2 img-fluid" src="<?php echo $showval['image2']; ?>">
                          </a>
                          <ul class="social">
                              <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                              <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                              <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                          <span class="product-new-label"><?php echo $showval['new']; ?></span>
                          <span class="product-discount-label"><?php echo $showval['off']; ?></span>
                      </div>
                      <div class="product-content">
                          <h3 class="title" style="font-size:1.2rem;"><a href="#"><?php echo $showval['name']; ?></a>
                          </h3>
                          <div class="price">
                              <?php echo $showval['price']; ?>
                              <span><?php echo $showval['cutprice']; ?></span>
                          </div>
                          <a href="more.php?knowmore=<?php echo $showval['id']; ?>" class="add-to-cart" name="knowbtn"
                              href="">Know More</a>
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