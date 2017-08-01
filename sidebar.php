<aside class="blog-sidebar">
	<section class="sidebar-module">
             <?php get_search_form(); ?>
          </section>
          <section class="sidebar-module">
            <h4>About the Author</h4>
            <p><?php the_author_meta('description'); ?></p>
          </section>
		   <nav class="sidebar-module">
            <h4>Recent Posts</h4>
            <ol class="list-unstyled">
             <?php $args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query(); ?>
            </ol>
          </nav>
          <nav class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
             <?php wp_get_archives('type=monthly'); ?>
            </ol>
          </nav>
        </aside><!-- /.blog-sidebar -->