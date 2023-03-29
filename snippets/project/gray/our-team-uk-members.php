<!-- <?php echo SNIPPET_NAME_TESSICA;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_TESSICA);?>" class="<?php echo lcfirst(SNIPPET_NAME_TESSICA).' '.APP_NAME.SNIPPET_NAME_TESSICA.' '.SNIPPET_CATEGORY_TEAMS.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/Organization">  
  
  <!-- team-members main wrapper -->
  <div class="container team-page mt-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="team-member"  itemprop="employee" itemscope itemtype="http://schema.org/Person">
          <figure>
            <img itemprop="image" width="350" height="350" src="<?php echo APP_TEAM_IMAGES; ?>member-1.jpg" alt="<?php echo APP_TEAM_MEMBER1_NAME; ?>">
           
          </figure>
          <h4 itemprop="name"><?php echo APP_TEAM_MEMBER1_NAME; ?></h4>
          <p itemprop="jobTitle"><?php echo APP_TEAM_MEMBER1_POSITION; ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="team-member" itemprop="employee" itemscope itemtype="http://schema.org/Person">
          <figure>
            <img itemprop="image" width="350" height="350" src="<?php echo APP_TEAM_IMAGES; ?>member-2.jpg" alt="<?php echo APP_TEAM_MEMBER2_NAME; ?>">
            
          </figure>
          <h4 itemprop="name"><?php echo APP_TEAM_MEMBER2_NAME; ?></h4>
          <p itemprop="jobTitle"><?php echo APP_TEAM_MEMBER2_POSITION; ?></p>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="team-member" itemprop="employee" itemscope itemtype="http://schema.org/Person">
          <figure>
            <img itemprop="image" width="350" height="350" src="<?php echo APP_TEAM_IMAGES; ?>member-1.jpg" alt="<?php echo APP_TEAM_MEMBER3_NAME; ?>">
            
          </figure>
          <h4 itemprop="name"><?php echo APP_TEAM_MEMBER3_NAME; ?></h4>
          <p itemprop="jobTitle"><?php echo APP_TEAM_MEMBER3_POSITION; ?></p>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- <?php echo SNIPPET_NAME_TESSICA;?> section ends from here -->