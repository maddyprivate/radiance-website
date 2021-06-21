<?php include('header.php'); ?>
<?php include('db_info.php'); ?>
  <!-- End Header -->
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Royal Empress Building, Near Suzuki Showroom, Baner, Pune 411045</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@radiancelpg.in<br>info@radiancelpg.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9028 2943 44<br>+91 9049 6815 99</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="save_contact.php" method="post" role="form" class="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1500&amp;height=400&amp;hl=en&amp;q=Royal Empress Building, Near Suzuki Showroom, Baner, Pune 411045&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/friday-night-funkin-mods-fnf-play-online/">FNF Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div><!-- End Map Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div class="modal fade" id="SuccessModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
      </div>

      <div class="modal-body text-center">
        <div class="thank-you-pop">
          <img src="assets/img/Green-Round-Tick.png" alt="">
          <h1>Thank You!</h1>
          <p>Your submission is received and we will contact you soon</p>
          <!-- <h3 class="cupon-pop">Your Id: <span>12345</span></h3> -->              
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var prm = window.location.search;
  var arrprm = prm.split('?');
  //console.log(arrprm[1]);
  if(arrprm[1]=='team-success'){
    $("#TeamSuccessModal").modal();
    window.history.pushState(null, null, window.location.pathname);
  }
  if(arrprm[1]=='success'){
    $("#SuccessModal").modal();
    window.history.pushState(null, null, window.location.pathname);
  }
  if(arrprm[1]=='error'){
    $("#ErrorModal").modal();
    window.history.pushState(null, null, window.location.pathname);
  }
</script>
  <?php include('footer.php'); ?>