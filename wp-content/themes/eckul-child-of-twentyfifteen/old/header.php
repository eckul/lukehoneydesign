<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    
    
    
    <!--custom scripts-->
    
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/custom/custom.css"> 
      <link rel="stylesheet" href="<?php echo get_site_url(); ?>/custom/custom-media-queries.css "> 
   

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
</head>

<body <?php body_class(); ?>>


      	<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
	


<div class="custom-header-wrap">


<div class="custom-header">

<span class="custom-logo">

<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/custom/img/eckul.png" alt="Eckul - Producer and DJ from Melbourne Australia" title="Eckul - Producer and DJ from Melbourne Australia" /></a>



</span>


<ul class="contact-dets"> 

<li>

<a href="mailto:djeckul@gmail.com"><i class="fa fa-envelope-o"></i><span class="text">&nbsp;Contact / Bookings : djeckul@gmail.com</span></a>

</li>

<li>

<a href="https://pro.beatport.com/artist/eckul/274864" target="_blank"><span class = "beatport"><img src="<?php echo get_site_url(); ?>/custom/img/beatport.png" alt="Beatport" title="Beatport" /><span class="text">&nbsp;beatport.com/artist/eckul</span></span>




</a>

</li>

<li>


<a href="https://soundcloud.com/eckul" target="_blank"><span class="soundcloud"></span> <i class="fa fa-soundcloud"></i><span class="text">&nbsp;soundcloud.com/eckul</span></a>

</li>

<li>

<a href="https://twitter.com/eckul83" target="_blank"> <i class="fa fa-twitter"></i><span class="text">&nbsp;twitter.com/eckul83</span></a>

</li>

<li>

<a href="https://www.facebook.com/luke.honey.52" target="_blank"> <i class="fa fa-facebook"></i><span class="text">&nbsp;facebook.com/luke.honey.52</span></a>


</li>

</ul>

</div>


</div>





<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
            
         
   
           
 
           
            
            
		</header><!-- .site-header -->
        
        
        
        
        
        
        
        
   
        
        
        
        
        
        
        
        

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
