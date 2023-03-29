<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper">
	<section id="blythe" class="blythe newtonBlythe contentBlock bv4.6.0 freeSnip publicSite" itemscope="" itemtype="http://schema.org/WebPage">

		<div class="page-title text-white">
			<div class="container page-title-container">
				<div class="row page-title-text">
					<div class="col-lg-12 text-center">
						<h1 itemprop="headline">Blog</h1>
						<p itemprop="description" class="lead">Discover all the latest blogging statistics and trends</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container blog-post-list mt-5 mt-4" id="blog-post-list">

			<div class="row search-filter blog mb-4">
				<div class="col-md-4 col-8">
					<?php echo get_search_form(); ?>
				</div>
				<div class="col-md-8 col-12 mt-4 mt-md-0 filter-type text-md-right text-sm-left">
					<?php post_sort_option_form(); ?>
				</div>
			</div>
			<div class="row blog-list" id="blog-list">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						?>
						<div class="col-lg-4 col-md-6 blog-card" style="">
							<div class="blog-post">
								<figure>
									<img alt="Jungles in Paris" src="<?php echo get_the_post_thumbnail_url(); ?>">
								</figure>
								<div class="post-meta">
									<div class="post-title">
										<h4>
											<a href="<?php echo get_permalink(); ?>" class="blog-title-text" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h4>
										<p class="post-short-desc">
											<?php 
												$content = get_the_content();
												echo substr($content,0,200);
												if(strlen($content)>200) {
													echo '...';
												}
											?>
										</p>
										
									</div>
									<p>
										<a href='<?php echo get_permalink(); ?>'>Read More</a>
									</p>
									<div class="post-date">
										By 
										<span><?php echo get_the_author_meta('display_name'); ?></span> 
										- 
										<span><?php echo get_the_date (); ?></span> 
									</div>
									<div class="post-ranking">											
										<span class="comments">
											<i class="fas fa-comment"></i>
											<span><?php echo get_comments_number(); ?> Comments</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<?php

					}
				}
				?>			
			</div>
			<div id="pagination-container" class="light-theme simple-pagination">				
				<?php the_posts_pagination(
					array(
  						'prev_text' => '«',
  						'next_text' => '»'
					)
				); ?>
			</div>

		</div>
	</section>
</div>

<?php
get_footer();
