<!-- <?php echo SNIPPET_NAME_CANDELLA;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_CANDELLA);?>" class="<?php echo lcfirst(SNIPPET_NAME_CANDELLA).' '.APP_NAME.SNIPPET_NAME_CANDELLA.' '.SNIPPET_CATEGORY_CONTENTBLOCK.' '.SNIPPET_CSS_CLASSES;?>" itemprop="offers" itemscope itemtype="https://schema.org/Offer">  
	<!-- career summary main wrapper -->
	<div class="job-title gray-bg">
		<div class="container career-summary">
			<div class="row">
				<div class="col-lg-8">
					<?php 
					$type=$_GET["t"]??'';

					if($type=='front-end'){
						?>
						<div class="employer-info">
						<h2 itemprop="itemOffered"><?php echo APP_CAREER_TITLE; ?></h2>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_CONTACT_PERSON_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="name"><?php echo APP_CAREER_CONTACT_PERSON; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_TYPE_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="category"><?php echo APP_CAREER_TYPE; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_REQUIREMENT_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="description"><?php echo APP_CAREER_REQUIREMENT; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_LOCATION_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="areaServed"><?php echo APP_CAREER_LOCATION; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_SALARY_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="price"><?php echo APP_CAREER_SALARY_RANGE; ?></span></div>
						</div>
					</div>
					<?php
					}

					elseif($type=='ui-ux'){
						?>
						<div class="employer-info">
						<h2 itemprop="itemOffered"><?php echo APP_CAREER_TITLE2; ?></h2>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_CONTACT_PERSON_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="name"><?php echo APP_CAREER_CONTACT_PERSON; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_TYPE_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="category"><?php echo APP_CAREER_TYPE; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_REQUIREMENT_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="description"><?php echo APP_CAREER_REQUIREMENT; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_LOCATION_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="areaServed"><?php echo APP_CAREER_LOCATION; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_SALARY_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="price"><?php echo APP_CAREER_SALARY_RANGE; ?></span></div>
						</div>
					</div>
					<?php
					}
					elseif($type=='graphics'){
						?>
						<div class="employer-info">
						<h2 itemprop="itemOffered"><?php echo APP_CAREER_TITLE3; ?></h2>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_CONTACT_PERSON_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="name"><?php echo APP_CAREER_CONTACT_PERSON; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_TYPE_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="category"><?php echo APP_CAREER_TYPE; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_REQUIREMENT_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="description"><?php echo APP_CAREER_REQUIREMENT; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_LOCATION_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="areaServed"><?php echo APP_CAREER_LOCATION; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_SALARY_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="price"><?php echo APP_CAREER_SALARY_RANGE; ?></span></div>
						</div>
					</div>
					<?php
					}
					elseif($type=='java-script'){
						?>
						<div class="employer-info">
						<h2 itemprop="itemOffered"><?php echo APP_CAREER_TITLE4; ?></h2>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_CONTACT_PERSON_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="name"><?php echo APP_CAREER_CONTACT_PERSON; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_TYPE_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="category"><?php echo APP_CAREER_TYPE; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_REQUIREMENT_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="description"><?php echo APP_CAREER_REQUIREMENT; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_LOCATION_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="areaServed"><?php echo APP_CAREER_LOCATION; ?></span></div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3" itemprop="subjectOf"><?php echo APP_CAREER_SALARY_TEXT; ?>:</div>
							<div class="col-md-9"><span itemprop="price"><?php echo APP_CAREER_SALARY_RANGE; ?></span></div>
						</div>
					</div>
					<?php
					}

					?>
					
				</div>
				<div class="col-lg-4 text-right">
					<div class="salary-area mt-2 mt-lg-4">
						<ul class="social-media">
							<li><span><a itemprop="sameAs" target="_blank" href="<?php echo APP_CAREER_FACEBOOK_LINK; ?>" title="<?php echo APP_FACEBOOK_TITLE; ?>"><i class="<?php echo APP_FACEBOOK_ICON; ?>"></i></a></span></li>
							<li><span><a itemprop="sameAs" target="_blank" title="<?php echo APP_YOUTUBE_TITLE; ?>" href="<?php echo APP_CAREER_YOUTUBE_LINK; ?>"><i class="<?php echo APP_YOUTUBE_ICON; ?>"></i></a></span></li>
							<li><span><a itemprop="sameAs" target="_blank" title="<?php echo APP_LINKEDIN_TITLE; ?>" href="<?php echo APP_CAREER_LINKEDIN_LINK; ?>"><i class="<?php echo APP_LINKEDIN_ICON; ?>"></i></a></span></li>
							<li><span><a itemprop="sameAs" target="_blank" title="<?php echo APP_TWITTER_TITLE; ?>" href="<?php echo APP_CAREER_TWITTER_LINK; ?>"><i class="<?php echo APP_TWITTER_ICON; ?>"></i></a></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <?php echo SNIPPET_NAME_CANDELLA;?> section ends from here -->