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
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
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
              <h3>What is LPG?</h3>
              <ul>
                <li><strong>Consit of</strong>:C4H10/C4H8</li>
                <li><strong>State</strong>:Liquid</li>
                <li><strong>Ignition range</strong>:410-580 DC</li>
                <li><strong>Best qulity</strong>:Cleanest Fuel</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Where is the name LPG come from?</h2>
              <p>
                Liquefied Petroleum Gas (LPG) is a blend of light hydrocarbon compounds. It mainly consists of butane (C4H10) or propane (C3H8) or a mixture of both. At room temperature, both gases are colourless and odourless. Propane has its boiling point at -42°C and butane at -0.5 °C. Under modest pressure or in cooler conditions, LPG transforms into a liquid state.<span id="dots-1">..</span><br>
                <a href="javascript:void(0)" onclick="showMore(1)" id="myBtn-1">Read More</a>
              </p>
            </div>
          </div>
          <div class="col-lg-12" style="display: none;" id="more-1">
            LPG in domestic cylinders used for cooking generally comprises more butane than propane, because the fuel value per kilogram of butane is higher than propane and it liquefies under much lower pressure than propane and thus the handling is safer. National and international standards specify the minimum content of butane and a maximum LPG vapor pressure. When liquefied under pressure, the volume of butane and propane is reduced to around 1/260 of the gaseous aggregate state. The specific calorific value of LPG is around 46 MJ/kg or 12.78 kWh/kg depending on the composition of LPG. In comparison, wood has an energy content in the range of 14-18 MJ/kg or 3.89 - 5 kWh/kg (depending of the type of wood and the moisture content) and charcoal in the range of 27 - 33 MJ/kg or 7.5 - 8.34 kWh/kg (depending on the type of charcoal). If made available as a cooking energy fuel it could help to reduce the use of wood and biomass in households in developing countries. Liquefied Gas is heavier than air and can therefore accumulate above the ground. This may lead to LPG-'lakes'. It is common practice to add a foul smelling odorant to the gas in order to detect leaks and reduce the risk of explosions. LPG is non toxic but highly flammable. Therefore, LPG has to be handled with care and all equipment and appliances used to store or transport the gas must comply with high safety standards. They have to be maintained and regularly inspected. Trading with LPG is normaly subject to government safety regulations and corresponding enforcement do prevent fire and explosion accidents.  
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