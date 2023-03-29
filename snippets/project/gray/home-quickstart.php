<!-- <?php echo SNIPPET_NAME_QUINTA;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_QUINTA);?>" class="<?php echo lcfirst(SNIPPET_NAME_QUINTA).' '.APP_NAME.SNIPPET_NAME_QUINTA.' '.SNIPPET_CATEGORY_CONTENTBLOCK.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage"> 
  <!-- quick-start block main wrapper --> 
  <div class="fw-block">
    <div class="container-fluid">
      <div class="row">
        <!-- block content --> 
        <div class="col-lg-6">
          <div class="row fw-block-content">
            <div class="col-lg-8 offset-lg-2 my-auto">
              <h2 itemprop="headline" class="mb-3"><?php echo APP_QUICKSIGNUP_TTTLE; ?></h2>
              <p itemprop="description" class="mb-5 lead"><?php echo APP_QUICKSIGNUP_SUBTTTLE; ?></p>
              <form action="#" method="post" id="quick-start" class="quick-start">
                <div class="row">
                  <div class="col-xl-9 col-lg-11 col-12">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="<?php echo APP_QUICKSIGNUP_EMAIL; ?> " aria-label="<?php echo APP_QUICKSIGNUP_EMAIL; ?>" aria-describedby="button-getstarted" required>
                      <div class="input-group-append">
                        <button class="btn btn-blue" type="submit" id="button-getstarted"><i class="fas fa-phone"></i>  <?php echo APP_QUICKSIGNUP_BUTTON_TEXT; ?> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- block background image -->
        <meta itemprop="image" content="<?php echo APP_QUICKSIGNUP_IMAGE; ?>">
        <div class="col-lg-6 fw-block-bg-images">
        <img itemprop="image" width="100%" height="100%" src="<?php echo APP_QUICKSIGNUP_IMAGE; ?>" alt="<?php echo APP_QUICKSIGNUP_IMAGE; ?>">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <?php echo SNIPPET_NAME_QUINTA;?> section ends from here-->


