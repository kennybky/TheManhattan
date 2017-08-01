<?php /* Template Name: categories */ ?>


<?php get_header(); ?>

<div class="col">
        <main class="col-sm-8 blog-main">
		<article class="blog-post">
		 <h2 class="blog-post-title"><?php the_title();?></h2>
	<section class="flex">	 
<?php $categories = get_categories(array(
        'orderby'    => 'name',
        'show_count' => true,
		'hide_empty' => 0,
		'title_li' => '',
		'depth' => 10,
    ));
	foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo sprintf( esc_html__( ' %s', 'textdomain' ), $category_link );
} 
	?>
	<section>
	</article>
		  <?php get_category_template?>
        </main><!-- /.blog-main -->
		</div>
	  
	  <?php get_footer();?>
	  <?php get_sidebar();?>