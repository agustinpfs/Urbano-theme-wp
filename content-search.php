<article <?php post_class( $tax . ' search-content' ); ?>>
					
	<h2 class="heading">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
     <?php if ( FALSE ) { ?>
	<div class="meta-info">						
	    <span class="meta-item meta-date">
		<?php _e( 'Last Updated:', 'layers-docs' ); ?> 
		<time title="<?php echo get_the_modified_date( 'U' ); ?>">
		    <?php echo human_time_diff( get_the_modified_date( 'U' ), current_time( 'timestamp' ) ).__( ' ago', 'layers-docs' ); ?>
		</time>
	    </span>
        <?php } ?>
        <?php if ( ! is_tax( 'section' ) ) { ?>
	   <span class="meta-item meta-ttr">
		<?php echo __(' Time to Read:').do_shortcode('[est_time] '); ?> 
	   </span>
        <?php } 
	if( ( is_search() || is_page() || is_home() ) && ( is_tax('topic') ) ){
	  _e('Topic:', 'layers-docs'); the_category(', ', $post->ID);
	}
      ?>
   </div>
</article>