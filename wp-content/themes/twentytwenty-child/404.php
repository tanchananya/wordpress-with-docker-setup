<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="error404-archive" role="main">

	<div class="section-inner error404-content">
        <div class="content-box">
            <h1 class="heading">404 Error</h1>
            <h2 class="sub-heading">Page not found</h2>
            <p>This page you requested could not found.</p>
            <a href="<?php echo get_home_url(); ?>" class="btn btn-primary">Go Back To Homepage</a>
        </div>
        <div class="image-box">
            <img src="/wp-content/uploads/2022/11/search-404-vector.jpg" alt="search-404-vector" >
        </div>
	</div><!-- .section-inner -->

</main><!-- #error404-archive -->

<?php
get_footer();
