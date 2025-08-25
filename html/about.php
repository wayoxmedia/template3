<!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo ABOUT_TITLE; ?><br></h2>
        <p><span><?php echo LEARN_MORE; ?></span> <span class="description-title"><?php echo ABOUT_DESCRIPTION; ?></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3><?php echo BUTTON_TEXT; ?></h3>
              <p><?php echo NUMBER_CONTACT; ?></p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <?php echo TEXT_ABOUT; ?>
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span><?php echo LIST_ITEM_1; ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><?php echo LIST_ITEM_2; ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><?php echo LIST_ITEM_3; ?></span></li>
              </ul>
              <p>
                <?php echo TEXT_VIDEO; ?>
              </p>

              <div class="position-relative mt-4">
                <img src="<?= IMG_ABOUT?>" class="img-fluid" alt="">
                <a href="<?php echo URL_VIDEO; ?>" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
