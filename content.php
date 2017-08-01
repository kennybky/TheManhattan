 <article class="blog-post">
	<p class="category"><?php 
	echo the_category();
			 ?>
			  </p>
            <h2 class="blog-post-title"><?php the_title();?></h2>
			<div  class="content">
			<p class="blog-post-meta"><?php the_date();?>  <a href="#"><?php if (!is_page()) {echo " " . by . " "; the_author();}
			?></a></p>
		<section class="the-content"><?php the_content();?></section>
		</div>
          </article>
		  <!-- /.blog-post -->
		  