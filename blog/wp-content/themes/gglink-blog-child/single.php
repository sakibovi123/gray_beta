<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<section id="barnard" class="barnard newtonBarnard banner bv4.6.0 freeSnip publicSite" itemscope="" itemtype="https://schema.org/WebPage">

		<div class="big-banner text-white" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(<?php echo get_the_post_thumbnail_url() ?>)">
			<div class="container banner-container">
				<div class="row banner-text">
					<div class="offset-lg-2 col-lg-8 text-center">
						<h1 itemprop="headline"><?php single_post_title() ?></h1>
						<div class="blog-meta mt-4">
							<span itemprop="dateCreated" class="post-date"><?php echo get_the_date(); ?></span>
							<span class="separator">/</span>

							<span itemprop="commentCount" class="post-comments"><?php echo get_comments_number(); ?> Comments</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
				<?php
				while ( have_posts() ) {
					the_post();	
					?>
					<div class="container blog-content">
						<div class="row blog-description">
							<div class="col-lg-12 mt-5 pb-3">
								<h4 itemprop="headline"><?php the_title();?></h4>
								<div itemprop="description"><?php the_content();?></div>
							</div>
						</div>
					</div>
					<hr/>
					<div class="row blog-tags">
						<div class="col-lg-12 pt-1 mt-4">
							<div class="tags">
								<span>
									<i class="fa fa-tags"></i> 
									<span itemprop="genre">Post Tags:</span>
								</span>
								<?php  									
									$get_tags = get_the_tags();
									if($get_tags){
										$tags = '';
										foreach($get_tags as $tag){
											$tags .= $tags?', ':'';
											$tags .= "<a itemprop='".get_category_link($tag->term_id)."' href='".get_category_link($tag->term_id)."'>$tag->name</a>";
										}
										echo $tags;
									}
								?>
							</div>
							<div class="tags">
								<span>
									<i class="fa fa-filter"></i> 
									<span itemprop="genre">Post Categories:</span>
								</span>
								<?php 
									$get_categories = get_the_category();
									if($get_categories){
										$cats = '';
										foreach($get_categories as $cat){
											$cats .= $cats?', ':'';
											$cats .= "<a itemprop='".get_category_link($cat->term_id)."' href='".get_category_link($cat->term_id)."'>$cat->name</a>";
										}
										echo $cats;
									}
								?>
							</div>
						</div>
					</div>

				<?php
					if ( comments_open() || get_comments_number() ) {
						?>
						<section id="collin" class="collin newtonCollin contentBlock bv4.6.0 freeSnip publicSite" itemscope="" itemtype="http://schema.org/WebPage">
							<div class="container blog-comments">
								<div class="row">
									<div class="col-lg-12 comment-list mt-4 mb-5">
										<h4 itemprop="headline" class="comment-title"><?php echo get_comments_number(); ?> comments</h4>
										<ul class="comments">
											<?php
											$comments = get_comments(
												array(
										        'post_id' => get_the_ID(),
										        //'number' => -1 
										    	)
											);
											if($comments) : 
												foreach($comments as $comment) :
													if(!$comment->comment_approved) continue;
											?>
												<li>
													<div class="comment-box">
														<div class="commenter-photo">
															<img itemprop="image" width="105" height="105" class="rounded-circle" alt="<?php echo $comment->comment_author; ?>" src="<?php echo esc_url( get_avatar_url( $comment->user_id) ); ?>">
														</div>
														<div class="commenter-meta">
															<div class="comment-titles">
																<h6 itemprop="author"><?php echo $comment->comment_author; ?></h6>
																<span itemprop="dateCreated"><?php echo $comment->comment_date; ?></span>
															</div>
															<p itemprop="comment"><?php echo $comment->comment_content; ?></p>
														 </div>
													</div>
												</li>
											<?php 
												endforeach;
											endif;
											?>
										</ul>
									</div>
								</div>
							</div>
						</section>
						<?php
					}
				}
				comment_form(); 

				?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
