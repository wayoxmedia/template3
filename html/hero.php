<!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up"><?= HERO_TEXT_1; ?><br><?= HERO_TEXT_2; ?></h1>
            <p data-aos="fade-up" data-aos-delay="100"><?= HERO_TEXT_3; ?></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started "><?php echo BUTTON_TEXT; ?></a>
              <a href="<?= URL_YOUTUBE_VIDEO?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span><?= TXT_WATCH_VIDEO?></span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="<?= IMG_HERO; ?>" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
      
    </section><!-- /Hero Section -->
