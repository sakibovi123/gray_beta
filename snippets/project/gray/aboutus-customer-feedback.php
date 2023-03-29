<!-- <?php echo SNIPPET_NAME_CULLEN;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_CULLEN);?>" class="<?php echo lcfirst(SNIPPET_NAME_CULLEN).' '.APP_NAME.SNIPPET_NAME_CULLEN.' '.SNIPPET_CATEGORY_TESTIMONIALS.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">
  <!-- customer-feedback block main wrapper -->
  <div class="container customer-feedback mb-5">
    <!-- block title -->
    <div class="row mt-5 mb-5">
      <div class="col-lg-12 text-center">
        <h2 itemprop="headline"><?php echo APP_REVIEWS_TTTLE; ?></h2>
      </div>
    </div>
    <!-- feedback content -->
    <div class="row">
      <!-- feedback info -->
      <div class="col-lg-6 feedback-info">
        <div class="feedback-heading">
          <h3 itemprop="description"><?php echo APP_REVIEWS_DESCRIPTION; ?></h3>
          <div class="feedback-buttons"></div>
        </div>
      </div>
      <!-- feedback slider -->
      <div class="col-lg-6">
        <div class="feedback-slider-area">
          <div class="feedback-slider owl-carousel">
            <div class="item">
              <div class="author-img">
                <img itemprop="image" width="72" height="72" src="<?php echo APP_REVIEWS_ONE_IMAGE; ?>" alt="<?php echo APP_REVIEWS_ONE_NAME; ?>" title="<?php echo APP_REVIEWS_ONE_NAME; ?>"/>
              </div>
              <p itemprop="text"><?php echo APP_REVIEWS_ONE_DETAILS; ?></p>
              <div itemprop="name" class="customer-name"><?php echo APP_REVIEWS_ONE_NAME; ?></div>
              <div itemprop="position" class="customer-title"><?php echo APP_REVIEWS_ONE_POSITION; ?></div>
            </div>
             <div class="item">
              <div class="author-img">
                <img itemprop="image" width="72" height="72" src="<?php echo APP_REVIEWS_TWO_IMAGE; ?>" alt="<?php echo APP_REVIEWS_TWO_NAME; ?>" title="<?php echo APP_REVIEWS_TWO_NAME; ?>"/>
              </div>
              <p itemprop="text"><?php echo APP_REVIEWS_ONE_DETAILS; ?></p>
              <div itemprop="name" class="customer-name"><?php echo APP_REVIEWS_TWO_NAME; ?></div>
              <div itemprop="position" class="customer-title"><?php echo APP_REVIEWS_TWO_POSITION; ?></div>
            </div>
             <div class="item">
              <div class="author-img">
                <img itemprop="image" width="72" height="72" src="<?php echo APP_REVIEWS_THREE_IMAGE; ?>" alt="<?php echo APP_REVIEWS_THREE_NAME; ?>" title="<?php echo APP_REVIEWS_THREE_NAME; ?>"/>
              </div>
              <p itemprop="text"><?php echo APP_REVIEWS_THREE_DETAILS; ?></p>
              <div itemprop="name" class="customer-name"><?php echo APP_REVIEWS_THREE_NAME; ?></div>
              <div itemprop="position" class="customer-title"><?php echo APP_REVIEWS_THREE_POSITION; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <?php echo SNIPPET_NAME_CULLEN;?> section ends from here -->