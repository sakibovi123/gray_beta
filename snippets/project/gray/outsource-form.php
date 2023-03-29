


<!-- <?php echo SNIPPET_NAME_TEGAN; ?> section start from here -->

<section id="<?php echo lcfirst(SNIPPET_NAME_TEGAN);?>" aria-label="form" class="careertegan <?php echo APP_NAME.SNIPPET_NAME_TEGAN.' '.SNIPPET_CATEGORY_CONTENTBLOCK.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">
    <!-- our-team block main wrapper -->
    <div class="our-team" id='outsourceform'>
        <!-- our-team main image -->
        <div class="container-fluid our-team-content-a">
            <div class="row">
                <div class="col-md-6 col-lg-7"></div>
                <div class="col-md-6 col-lg-4">
                    <form method="post" action="outsource-form-submit.php">
                        <div class="custom-form-group">
                            <label for="fullname"><?php echo APP_OUTSOURCE_FORM_LEVELA; ?></label>
                            <input type="text" class="input-field" id="fullname" name='fullname' required>                        
                        </div>
                        <div class="custom-form-group">
                            <label for="email"><?php echo APP_OUTSOURCE_FORM_LEVELB; ?></label>
                            <input type="email" class="input-field" id="email" name="email" required>                        
                        </div>
                        <div class="custom-form-group">
                            <label for="telephone"><?php echo APP_OUTSOURCE_FORM_LEVELC; ?></label>
                            <input type="text" class="input-field" id="telephone" name='telephone' required>
                        </div>
                        <div class="custom-form-group">
                            <textarea rows="5" class="text-field mt-4" id="comment" name="comment" placeholder="<?php echo APP_OUTSOURCE_MESSAGE_PLACEHOLDER; ?>" required></textarea>
                        </div>
                        <div class="custom-form-group outsource-submit-button mt-3">
                            <button type="submit" name="outsource-form-submit"><?php echo APP_OUTSOURCE_FORM_BUTTON; ?></button>
                        </div>                              
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_TEGAN; ?> section ends from here-->