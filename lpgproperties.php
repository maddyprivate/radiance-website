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
                  <img src="assets/img/portfolio/5.jpg" alt="">
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
              <h3>LPG Prperties</h3>
              <ul>
                <li><strong>Consit of</strong>:C4H10/C4H8</li>
                <li><strong>State</strong>:Liquid</li>
                <li><strong>Ignition range</strong>:410-580 DC</li>
                <li><strong>Best qulity</strong>:Cleanest Fuel</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Properties of LPG</h2>
              <p>
                Liquefied Petroleum gas, or LPG as it is better known as, is a hydrocarbon. It contains propane, butane, propylene and butylene. Since it is an inflammable mixture of all these gases, it has to be stored carefully. The various properties of LPG are: It is a good mixture of gases, mainly constituting Propane and Butane. It has a simple structure in chemical terms. It is one of the cleanest of all alternative fuels. It is a liquid under normal pressure but at ambient conditions, it is found to be gaseous. LPG in vaporous form is two times heavier than air. Properties of LPG· The boiling point of LPG normally ranges anywhere between -42 degrees to 0 degree. The boiling point depends on what proportions are Butane and Propane present in the mixture.<span id="dots-1">..</span><br>
                <a href="javascript:void(0)" onclick="showMore(1)" id="myBtn-1">Read More</a>
              </p>
            </div>
          </div>
          <div class="col-lg-12" style="display: none;" id="more-1">
            LPG is almost colourless and has to be stored as liquid under pressure. Its weight is about half that of the same volume of water. Ethyl Mercaptan is another product which is used to detect LPG leaks. It works like odorant and helps to know when there are LPG leaks. LPG’s Flash point is -76 degrees Fahrenheit. LPG is essentially a non toxic substance but it can be dangerous if not handled carefully. LPG is also known to cause suffocation. It is mildly anaesthetic and can be harmful if it is found to be present in high proportions. In spite of its anaesthetic properties, LPG has never been used or considered safe enough for medicinal purposes. The ignition temperature of LPG is found to be in the range of 410 to 580 deg Celsius. It is also known that liquid LPG has resulted in cold burns to human skin since it causes vaporisation at a very fast rate.  
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