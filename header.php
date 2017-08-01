<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name');?></title>


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?> /blog.css" rel="stylesheet">
		<script src="<?php bloginfo('template_directory');?>/scripts/jquery-3.1.1.js"></script>
	<script src="<?php bloginfo('template_directory');?>/scripts/scripts.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
  </head>

  <body>
	<div class="row">
    <header class="blog-masthead">
   
       <div class="masthead-side"></div>
		 <section class="blog-header">
        <h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>">
		<?php echo get_bloginfo('name');?></a></h1>
        <p class="lead blog-description"><?php echo get_bloginfo('description');?></p>
		
      </section>
	  
	  <div class="masthead-side">
			<a href="https://www.facebook.com/themanhattanpost/"><img src="<?php bloginfo('template_directory');?>/images/square-facebook.svg"/></a>
            <a href="https://twitter.com/manhattan_post"><img src="<?php bloginfo('template_directory');?>/images/square-twitter.svg"/></a>
            <a href="https://www.pinterest.com/manhattanpost/"><img src="<?php bloginfo('template_directory');?>/images/square-pinterest.svg"/></a>	
	  </div>
	  
    </header>
	<nav id="categories">
    <?php $categories = get_categories(array(
        'orderby'    => 'id',
        'show_count' => true,
		'hide_empty' => 0,
		'title_li' => '',
		'depth' => 10,
		'number' => 9
    ));
	foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo '<p>' . sprintf( esc_html__( ' %s', 'textdomain' ), $category_link ) . '</p> ';
} 
	?>
	<p><a href="<?php echo get_page_link(30); ?>">All Categories</a></p>
	<div id="side-bar-nav">
	<p class="menubar"><a href="#">&#10005; MENU</a></p>
	<p class="menubar"><a href="#">&#9776; MENU</a></p>
	  </div>
</nav>

</div>
    <div class="container">

     