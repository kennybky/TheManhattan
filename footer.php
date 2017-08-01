

    <footer class="blog-footer">
      <p> Copyright &copy; Kenny 2017</p>
      
	  <p class="blog-pages">
	  <a href="<?php bloginfo('wpurl');?>">Home</a>|
	  <?php  $mypages = get_pages( array('title_li='));
	foreach( $mypages as $page ) {		
	 echo '<a href="' . get_page_link( $page->ID ).'">' . $page->post_title . '</a>|';
	}	
	?>
	</p>
	<p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <?php wp_footer();?>
  </div><!-- /.container -->
  </body>
</html>