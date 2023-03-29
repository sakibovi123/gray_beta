<!-- <?php echo SNIPPET_NAME_TEGAN; ?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_TEGAN); ?>"
         class="careertegan <?php echo APP_NAME . SNIPPET_NAME_TEGAN . ' ' . SNIPPET_CATEGORY_CONTENTBLOCK . ' ' . SNIPPET_CSS_CLASSES; ?>"
         itemscope itemtype="http://schema.org/WebPage">
    <!-- our-team block main wrapper -->
    <div class="our-team">
        <!-- our-team main image -->
        <div class="container-fluid team-image">
            <div class="row align-items-center team-background">
                <div class="col-lg-6">
                    <div class="row py-5">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1 my-auto">
                            <h2 itemprop="headline"><?php echo APP_STORY_TITLE; ?></h2>
                            <p itemprop="description"><?php echo APP_STORY_DESCRIPTION; ?></p>
                        </div>
                    </div>
                </div>
                <meta itemprop="image" content="<?php echo APP_STORY_IMAGE; ?>">
                <div class="col-lg-6 story-banner bg-white">
                    <img itemprop="image" width="918" height="500" src="<?php echo APP_STORY_IMAGE; ?>"
                         alt="<?php echo APP_STORY_TITLE; ?>">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- <?php echo SNIPPET_NAME_TEGAN; ?> section ends from here-->

