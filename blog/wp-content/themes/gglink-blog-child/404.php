<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
    	<section id="edric" class="edric GGLinkEdric error bv4.6.0 freeSnip publicSite" itemscope="" itemtype="http://schema.org/WebPage">
            <!-- error page main wrapper -->
            <div class="error-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="error-text">
                                <h1 itemprop="headline">400 Error </h1>
                                <div class="im-sheep">
                                    <div class="top">
                                        <div class="body"></div>
                                        <div class="head">
                                            <div class="im-eye one"></div>
                                            <div class="im-eye two"></div>
                                            <div class="im-ear one"></div>
                                            <div class="im-ear two"></div>
                                        </div>
                                    </div>
                                    <div class="im-legs">
                                        <div class="im-leg"></div>
                                        <div class="im-leg"></div>
                                        <div class="im-leg"></div>
                                        <div class="im-leg"></div>
                                    </div>
                                </div>
                                <h4 itemprop="name">Oops! Bad Request Error!</h4>
                                <p itemprop="description" class="lead">Sorry your request is incorrect or corrupt, and the server can't understand it.</p>
                                <a itemprop="url" href="/blog" title="Go to homepage" class="btn btn-brand">Go to blog home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
