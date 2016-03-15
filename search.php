<?php if( have_posts() ) : ?>
	<div <?php layers_center_column_class(); ?>>
		<?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'partials/content' , 'list' ); ?>
		<?php endwhile; // while has_post(); ?>

		<?php the_posts_pagination(); ?>
         </div>
<?php else : ?>
	<div class="story">
		<h3><?php _e( 'No Posts Found', 'layerswp' ); ?></h3>
			<p><?php _e( 'There are no posts which match your query, please try a different search term.', 'layerswp' ); ?></p>
			<?php echo get_search_form(); ?>
	</div>
<?php endif; // if has_post() ?>