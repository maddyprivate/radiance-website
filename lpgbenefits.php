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
                  <img src="assets/img/portfolio/2.jpeg" alt="">
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
              <h3>Benefits of LPG</h3>
              <ul>
                <li><strong>Consit of</strong>:C4H10/C4H8</li>
                <li><strong>State</strong>:Liquid</li>
                <li><strong>Ignition range</strong>:410-580 DC</li>
                <li><strong>Best qulity</strong>:Cleanest Fuel</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Here are some exiting benefits of LPG</h2>
              <p>
                Easy to Handle: LPG is easy to manage with instantaneous on and off initiation as you twist the knob. It offers better control when you cook as you can regulate the flames as per requirements. Yes, the intensity of flame is totally in your hands and it is noticeable in the form of cerulean flames.
                Swifter Cooking: LPG can cook quicker than any other available alternatives as it has huge calorific value.
                Lesser Kitchen Temperature: Cooking with LPG is certainly not a hot and humid affair as stoves give out really less heat compared to other cooking gas, thereby not shooting up your kitchen temperature alarmingly.
                Eco Friendly: LPG generates the minimum greenhouse gas discharge out of all the existing fossil fuels. It comprises really less quantity of Nitrogen, Sulphur, and other particulate substances that are detrimental to the atmosphere. Research states that cooking with LPG actually helps in bringing down the greenhouse emission by up to 70 percent.
                Spotless Kitchen: It is simple enough to stock an LPG cylinder in the kitchen as it doesn’t take up much space. It is nothing like old-fashioned cooking methods like wood, charcoal and kerosene oil that leaves behind thick puffs of smoke, soot or residue.
                Reasonably Priced: LPG is an inexpensive cooking fuel. LPG ranges, stoves and gas rings need minimal upkeep as compared to other cooking methods.<span id="dots-1">..</span><br>
                <a href="javascript:void(0)" onclick="showMore(1)" id="myBtn-1">Read More</a>
              </p>
            </div>
          </div>
          <div class="col-lg-12" style="display: none;" id="more-1">
            Easy Booking: Booking for a new connection or a refill does not mean traipsing around gas distributors and standing in long queues etc any longer. The entire procedure will now be a lot simpler as it can be done online with a couple of clicks. 
                Advantages of LPG Gas for Vehicles : High Savings of a maximum of 40 percent and a reduced amount of carbon emission are reasons that have led to the wide usage of auto Liquified Petroleum Gas or LPG for vehicles. In addition to this, Auto LPG does not produce impurities or soot while burning which results in increased performance and engine life.
                Other benefits are as mentioned below - Since LPG is a clean fuel, harmful emission such as oxides of sulphur, carbon dioxide, suspended particulate matter and nitrogen is reduced significantly. LPG cannot be tampered with and hence its purity is maintained. Using LPG as fuel will ensure that the performance of the vehicle is always consistent and smooth. Auto LPG improves the life of the engine, reduces noise and vibration. In addition to the above, there are  numerous dispensing stations all around that makes it easy to procure auto LPG. However, the best aspect is the fact that customers can save up to 40 percent of the bill as compared to petrol and customers can save up on repeated maintenance costs as well. Procuring auto LPG for vehicles is one of the best choices that can be made. 
                Benefits of Using LPG for Hotels and Commercial Use :The benefits of using LPG for commercial purposes such as in hotels have numerous environmental and economic benefits as compared to fossil fuels and natural gas. When it comes to hotels and other establishments, it is important to ensure that as much time and energy is saved while making sure that food is top notch. LPG is the best choice for them. SUPER gas is a reliable partner for this purpose and also offers customized solutions. Some of the benefits are -
                LPG offers energy solutions that are extremely economical. Environmental hazards are increasing and the earth’s energy sources are fast depleting. Pollution is on the rise and it is imperative that something is done to combat this. LPG significantly reduces greenhouse gas emission, carbon emission by almost 25 percent as compared to other liquid fuels such as LDO, HSD, FO and SKO. The emission is also less than half of that given by coal. Using LPG is very easy as it can be utilized without the need for significant infrastructural changes and technological requirements. Heat control and distribution is much better as compared to other energy sources such as electric. Convenience is given utmost importance. Every time customers wish to refill their cylinders, delivery of the same is provided within a very short amount of time. Safety is also taken into consideration. Delivery is reliable and safe. As mentioned above, LPG comes with numerous benefits and advantages that make it one of the most sought after sources of fuel for everyone within the country.  
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