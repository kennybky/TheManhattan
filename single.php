<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="col">
        <main class="col-sm-8 blog-main">
		<?php
		if( have_posts()) : while(have_posts()) : the_post();
		get_template_part('content', get_post_format());
		endwhile;
		endif;
?>
	</main><!-- .site-main -->

	</div>
	  
	  <?php get_footer();?>
	  <?php get_sidebar();?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
