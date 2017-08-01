<?php get_header(); ?>
 
<div class="col">
       
		
		<?php
		if( have_posts()) : while(have_posts()) :
		echo '<main class="grid" style="background:#efefef; margin:10px">'; the_post();
		get_template_part('content', get_post_format());
		echo '</main>';
		endwhile;
		endif;
		?>
		
          
		  <?php get_category_template?>
		</div>
		<nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
	  
	  <?php get_footer();?>
	  <?php get_sidebar();?>

    