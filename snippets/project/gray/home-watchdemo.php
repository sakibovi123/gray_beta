<!-- <?php echo SNIPPET_NAME_WALLER;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_WALLER);?>" class="<?php echo lcfirst(SNIPPET_NAME_WALLER).' '.APP_NAME.SNIPPET_NAME_WALLER.' '.SNIPPET_CATEGORY_CONTENTBLOCK.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">
  <!-- watch-demo block main wrapper -->
  <div class="container watch-demo">
    <!-- image block -->
    <div class="watch-demo-img-area">
      <img itemprop="image" width="100%" height="530" src="<?php echo APP_WATCH_IMAGE; ?>" alt="<?php echo APP_WATCH_TITLE; ?>" title="<?php echo APP_WATCH_TITLE; ?>" class="watch-demo-img"/>
      <i class="<?php echo APP_WATCH_VIDEO_ICON; ?>"></i>
    </div>
    <!-- form block -->
    <div class="watch-demo-form-area">
      <h3 itemprop="headline" class="brand-color mb-3"><?php echo APP_WATCH_TITLE; ?></h3>
      <p itemprop="description"><?php echo APP_WATCH_SUBTITLE; ?></p>
      <form autocomplete="off">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="firstname" aria-label="<?php echo APP_WATCH_FIRSTNAME; ?>" placeholder="<?php echo APP_WATCH_FIRSTNAME; ?>" autocomplete="off" required>
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="lastname" aria-label="<?php echo APP_WATCH_LASTNAME; ?>" placeholder="<?php echo APP_WATCH_LASTNAME; ?>" autocomplete="off" required>
          </div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" aria-label="<?php echo APP_WATCH_EMAIL; ?>" placeholder="<?php echo APP_WATCH_EMAIL; ?>" autocomplete="off" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="phone" aria-label="<?php echo APP_WATCH_PHONE; ?>" placeholder="<?php echo APP_WATCH_PHONE; ?>" autocomplete="off" required>
        </div>
        <div class="form-group">
          <select  id="enqury-type" class="form-control" title="<?php echo APP_WATCH_LEARNER_NUMBER; ?>" required>
            <option value="" selected disabled><?php echo APP_WATCH_LEARNER_NUMBER; ?></option>
            <option value="0-50"><?php echo APP_WATCH_LEARNER_NUMBERA; ?></option>
            <option value="50-250"><?php echo APP_WATCH_LEARNER_NUMBERB; ?></option>
            <option value="250-500"><?php echo APP_WATCH_LEARNER_NUMBERC; ?></option>
            <option value="500-1500"><?php echo APP_WATCH_LEARNER_NUMBERD; ?></option>
            <option value="1500-3000"><?php echo APP_WATCH_LEARNER_NUMBERE; ?></option>
            <option value="3000-6000"><?php echo APP_WATCH_LEARNER_NUMBERF; ?></option>
            <option value="6000-12000"><?php echo APP_WATCH_LEARNER_NUMBERG; ?></option>
            <option value="More than 12000"><?php echo APP_WATCH_LEARNER_NUMBERH; ?></option>
          </select>
        </div>
        <button type="submit" class="btn btn-brand"><i class="<?php echo APP_WATCH_FORM_SUBMIT_BUTTON_ICON; ?>"></i> <?php echo APP_WATCH_FORM_SUBMIT_TEXT; ?></button>
      </form>
    </div>
  </div>  
</section>
<!-- <?php echo SNIPPET_NAME_WALLER;?> section ends from here-->


