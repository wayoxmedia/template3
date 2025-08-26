<footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4><?php echo ADDRESS_TITLE; ?></h4>
            <p><?php echo ADDRESS; ?></p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4><?php echo CONTACT_TITLE; ?></h4>
            <p>
              <strong><?php echo PHONE; ?></strong> <span><?php echo CALL_US; ?></span><br>
              <strong><?php echo EMAIL; ?></strong> <span><?php echo EMAIL_US; ?></span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4><?php echo OPENING_HOURS_TITLE; ?></h4>
            <p>
              <strong><?php echo DAY_OPEN; ?></strong> <span><?php echo HOUR_OPEN; ?></span><br>
              <strong><?php echo DAY_CLOSED; ?></strong>: <span><?php echo HOUR_CLOSED; ?></span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
       <p>© <span><?= COPYRIGHT ?></span> <strong class="px-1 sitename"><?= SITE_NAME ?></strong> <span><?= ALL_RIGHTS_RESERVED ?></span></p>
      <div class="credits">
        Designed by <a href="/"><?= DESIGNED_BY ?></a> Distributed by <a href="#"><?= DISTRIBUTED_BY ?></a>
      </div>
    </div>

  </footer>
