<?php include('header.php'); ?>

    <!-- =======All About LPG ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>All about LPG</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">LPG</a></li>
            <li>All about LPG</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/3.png" alt="">
                </div>

               <!--  <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
<<<<<<< HEAD
                  <img src="assets/img/portfolio/bottle.jpg" alt="">
                </div>
=======
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div> -->
>>>>>>> 00da714088c08bc478f93d6dc021a4fd476741ac

           </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Refining</h3>
              <ul>
                <li><strong>Consit of</strong>:C4H10/C4H8</li>
                <li><strong>State</strong>:Liquid</li>
                <li><strong>Ignition range</strong>:410-580 DC</li>
                <li><strong>Best qulity</strong>:Cleanest Fuel</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>What is Refining</h2>
              <p>
                The propane and butane blended into LPG can come from many different process units in the refinery, as well as from outside sources such as natural gas plants (from separating NGLs) or steam crackers (from C4 raffinates). Major sources inside the refinery include: Atmospheric distillation - All crude oils yield some amount of propane and butane when distilled.<span id="dots-1">.</span><br>
                <a href="javascript:void(0)" onclick="showMore(1)" id="myBtn-1">Read More</a>
              </p>
            </div>
          </div>
          <div class="col-lg-12" style="display: none;" id="more-1">
             Typically, they leave the distillation tower in a wet gas stream that is sent to the saturated gas plant for separation of propane and butane from lighter gases (methane and ethane) that are then used for refinery fuel FCC - In the FCC conversion process, large amounts of C3s and C4s are produced,
             including both saturated propane and butane and unsaturated propylene and butylene. Often the unsaturated olefins are separated for use as feed to the alkylation unit or as feed to petrochemicals units Coker - Similar to the FCC, the coker conversion process generates mixed C3s and C4s containing saturated and unsaturated molecules. However, it is less common for coker C3s and C4s to have their olefins separated out Reformer - Reformers will yield approximately 5% (by volume) of both C3s and C4s in the conversion process  
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->
  <?php include('footer.php'); ?>
  <script type="text/javascript">
    function showMore(div) {
      var dots = document.getElementById("dots-"+div);
      var moreText = document.getElementById("more-"+div);
      var btnText = document.getElementById("myBtn-"+div);

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
  </script>