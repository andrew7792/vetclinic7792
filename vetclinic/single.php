<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vetclinic
 */

get_header(); ?>
    <div class="container-fluid no-padding blog-list">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
    <div class="row">
    <!-- Blog Area -->
    <div class="col-md-9 col-sm-9 col-xs-12 blog-area single-post">



		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </div><!-- Blog Area/- -->
        <!-- Widget Area -->
        <div class="col-md-3 col-sm-3 col-xs-12 widget-area">

            <?php get_sidebar();?>
</div><!-- Widget Area /- -->
</div>
</div><!-- Container /- -->
<div class="section-padding"></div>
</div><!-- Blog List /- -->

<?php get_footer();?>
