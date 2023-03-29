<!-- <?php echo SNIPPET_NAME_TEGAN;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_TEGAN);?>" class="<?php echo lcfirst(SNIPPET_NAME_TEGAN).' '.APP_NAME.SNIPPET_NAME_TEGAN.' '.SNIPPET_CATEGORY_CONTENTBLOCK.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">
  <!-- our-team block main wrapper -->
  <div class="our-team">
    <!-- our-team main image -->
    <div class="container-fluid team-image">
      <div class="row">
        <div class="col-lg-6">
          <div class="row our-team-content">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1 my-auto">
              <h2 itemprop="headline"><?php echo APP_ABOUTUS_TEAM_TITLE; ?></h2>
              <p itemprop="description"><?php echo APP_ABOUTUS_TEAM_DESCRIPTION; ?></p>
            </div>
          </div>
        </div>
        <meta itemprop="image" content="<?php echo APP_ABOUTUS_TEAM_IMAGE; ?>">
        <div class="col-lg-6 our-team-bg-images">
        <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_IMAGE; ?>" alt="<?php echo APP_ABOUTUS_TEAM_IMAGE; ?>">
          <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9961.71485127456!2d-0.0968481!3d51.3767983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef1d08778c59b760!2sMarco%20Polo%20House!5e0!3m2!1sen!2suk!4v1645613928762!5m2!1sen!2suk" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        </div>
      </div>
    </div>

    <!-- team member list --> 
    <!-- <?php echo SNIPPET_NAME_TESSICA;?> section start from here -->
<div id="<?php echo lcfirst(SNIPPET_NAME_TESSICA);?>" class="<?php echo lcfirst(SNIPPET_NAME_TESSICA).' '.APP_NAME.SNIPPET_NAME_TESSICA.' '.SNIPPET_CATEGORY_TEAMS.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/Organization">  
  
  <!-- team-members main wrapper -->
  <div class="container team-page mt-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="team-member"  itemprop="employee" itemscope itemtype="http://schema.org/Person">
          <figure>
            <img itemprop="image" width="350" height="350" src="<?php echo APP_TEAM_IMAGES; ?>member-1.jpg" alt="<?php echo APP_TEAM_MEMBER1_NAME; ?>">
            <figcaption>
            <p itemprop="description" class="d-none d-md-block"><?php echo APP_TEAM_MEMBER1_SHORT_DESC; ?></p>
            <ul>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER1_FACEBOOK_LINK; ?>" title="<?php echo APP_FACEBOOK_TITLE; ?>"><i class="<?php echo APP_TEAM_FACEBOOK_ICON; ?>"></i></a></li>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER1_TWITTER_LINK; ?>" title="<?php echo APP_TWITTER_TITLE; ?>"><i class="<?php echo APP_TEAM_TWITTER_ICON; ?>"></i></a></li>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER1_LINKEDIN_LINK; ?>" title="<?php echo APP_LINKEDIN_TITLE; ?>"><i class="<?php echo APP_TEAM_LINKEDIN_ICON; ?>"></i></a></li>
            </ul>
            </figcaption>
          </figure>
          <h4 itemprop="name"><?php echo APP_TEAM_MEMBER1_NAME; ?></h4>
          <p itemprop="jobTitle"><?php echo APP_TEAM_MEMBER1_POSITION; ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="team-member" itemprop="employee" itemscope itemtype="http://schema.org/Person">
          <figure>
            <img itemprop="image" width="350" height="350" src="<?php echo APP_TEAM_IMAGES; ?>member-2.jpg" alt="<?php echo APP_TEAM_MEMBER2_NAME; ?>">
            <figcaption>
           <p itemprop="description" class="d-none d-md-block"><?php echo APP_TEAM_MEMBER2_SHORT_DESC; ?></p>
            <ul>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER2_FACEBOOK_LINK; ?>" title="<?php echo APP_FACEBOOK_TITLE; ?>"><i class="<?php echo APP_TEAM_FACEBOOK_ICON; ?>"></i></a></li>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER2_TWITTER_LINK; ?>" title="<?php echo APP_TWITTER_TITLE; ?>"><i class="<?php echo APP_TEAM_TWITTER_ICON; ?>"></i></a></li>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER2_LINKEDIN_LINK; ?>" title="<?php echo APP_LINKEDIN_TITLE; ?>"><i class="<?php echo APP_TEAM_LINKEDIN_ICON; ?>"></i></a></li>
            </ul>
            </figcaption>
          </figure>
          <h4 itemprop="name"><?php echo APP_TEAM_MEMBER2_NAME; ?></h4>
          <p itemprop="jobTitle"><?php echo APP_TEAM_MEMBER2_POSITION; ?></p>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="team-member" itemprop="employee" itemscope itemtype="http://schema.org/Person">
          <figure>
            <img itemprop="image" width="350" height="350" src="<?php echo APP_TEAM_IMAGES; ?>member-1.jpg" alt="<?php echo APP_TEAM_MEMBER3_NAME; ?>">
            <figcaption>
            <p itemprop="description" class="d-none d-md-block"><?php echo APP_TEAM_MEMBER3_SHORT_DESC; ?></p>
            <ul>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER3_FACEBOOK_LINK; ?>" title="<?php echo APP_FACEBOOK_TITLE; ?>"><i class="<?php echo APP_TEAM_FACEBOOK_ICON; ?>"></i></a></li>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER3_TWITTER_LINK; ?>" title="<?php echo APP_TWITTER_TITLE; ?>"><i class="<?php echo APP_TEAM_TWITTER_ICON; ?>"></i></a></li>
              <li><a itemprop="sameAs" target="_blank" href="<?php echo APP_TEAM_MEMBER3_LINKEDIN_LINK; ?>" title="<?php echo APP_LINKEDIN_TITLE; ?>"><i class="<?php echo APP_TEAM_LINKEDIN_ICON; ?>"></i></a></li>
            </ul>
            </figcaption>
          </figure>
          <h4 itemprop="name"><?php echo APP_TEAM_MEMBER3_NAME; ?></h4>
          <p itemprop="jobTitle"><?php echo APP_TEAM_MEMBER3_POSITION; ?></p>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- <?php echo SNIPPET_NAME_TESSICA;?> section ends from here -->



    <!-- our-team gallery -->
    <div class="container our-team-gallery">
      <div class="row mb-5">
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY1; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY2; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY3; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY4; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY5; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY6; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY7; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mb-4">
          <img itemprop="image" width="100%" height="100%" src="<?php echo APP_ABOUTUS_TEAM_GALLERY8; ?>" class="img-fluid" alt="<?php echo APP_ABOUTUS_TEAM_GALLERY_ALT_TXT; ?>">
        </div>
      </div>
      <!-- our-team empowerment 
      <div class="row heading">
        <div class="col-lg-12 text-center">
          <h4 itemprop="headline"><?php echo APP_ABOUTUS_EMPOWER_TITLE; ?></h4>
        </div>
      </div>
      <div class="row box-area">
        <div class="col-lg-4 text-center">
          <div class="box">
            <img itemprop="image" width="70" height="70" src="<?php echo APP_ABOUTUS_EMPOWER_BLOCKA_ICON; ?>" alt="<?php echo APP_ABOUTUS_EMPOWER_BLOCKA_TITLE; ?>">
            <h4 itemprop="headline"><?php echo APP_ABOUTUS_EMPOWER_BLOCKA_TITLE; ?></h4>
            <p itemprop="text"><?php echo APP_ABOUTUS_EMPOWER_BLOCKA_DESCRIPTION; ?></p>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="box">
            <img itemprop="image" width="70" height="70" src="<?php echo APP_ABOUTUS_EMPOWER_BLOCKB_ICON; ?>" alt="<?php echo APP_ABOUTUS_EMPOWER_BLOCKB_TITLE; ?>">
            <h4 itemprop="headline"><?php echo APP_ABOUTUS_EMPOWER_BLOCKB_TITLE; ?></h4>
            <p itemprop="text"><?php echo APP_ABOUTUS_EMPOWER_BLOCKB_DESCRIPTION; ?></p>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="box">
            <img itemprop="image" width="70" height="70" src="<?php echo APP_ABOUTUS_EMPOWER_BLOCKC_ICON; ?>" alt="<?php echo APP_ABOUTUS_EMPOWER_BLOCKC_TITLE; ?>">
            <h4 itemprop="headline"><?php echo APP_ABOUTUS_EMPOWER_BLOCKC_TITLE; ?></h4>
            <p itemprop="text"><?php echo APP_ABOUTUS_EMPOWER_BLOCKC_DESCRIPTION; ?></p>
          </div>
        </div>
      </div>
    -->
    </div>
  </div>
</section>
<!-- <?php echo SNIPPET_NAME_TEGAN;?> section ends from here-->

