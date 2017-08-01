<?php get_header(); ?>
<div class="col">
        <main class="col-sm-12 blog-main">
		
		<?php
		if( have_posts()) : while(have_posts()) : the_post();
		get_template_part('content', get_post_format());
		
		endwhile;
		endif;
		?>
		
          
        </main><!-- /.blog-main -->
	  </div>
	  <?php get_footer();?>
	  <aside class="blog-sidebar">
		<section class="sidebar-module">
            <p><?php get_search_form(); ?></p>
          </section>	
		</aside>

    