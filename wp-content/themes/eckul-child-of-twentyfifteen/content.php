<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    
   <div class = "custom-post-wrap">
   
   <div class="left-col">
    
    <header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->
    
    
    
    
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
		
				
	
	?>

</div><!--left-col-end-->
	


<div class="right-col">


<div class="prev-next">

<?php previous_post('&laquo; %', 'Previous', 'no'); ?>
&nbsp;|&nbsp; <?php next_post('% &raquo; ', 'Next', 'no'); ?>



<a href="<?php echo get_site_url(); ?>">
  <div class="home-but">&#xf015;</div>
</a>


</div>







	<div class="entry-content">
    
    
    <?php //the_field('tasks'); ?>
    
    
    <h3>Tasks completed</h3>
    
   <?php 
   
   $tasks = get_field('tasks');
   
   
    
    echo '<ul>';
foreach($tasks as $t){
 echo '<li>'.$t.'</li>';
}
echo '</ul>';

?>
    


   
    
		<?php
			/* translators: %s: Name of current post */
			/*the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );*/
		?>
	</div><!-- .entry-content -->
    
    </div><!--right-col-end-->
    
    	<div class="entry-content">
    
 <?php
			/*translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
        
        	</div><!-- .entry-content -->
    
     </div><!--custom-post-wrap-end-->
    

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
