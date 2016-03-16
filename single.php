
<?php get_header() ?>

<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>

<body class="Single">
	<main class="Single-main">
		<section class="Single-section">
			<h1 class="Single-h1"><?php wp_title(''); ?></h1>
			<section class="Single-article">
				<?php rewind_posts() ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<article>
					<figure>
						<?php the_post_thumbnail(Large); ?>
					</figure>
					<div class="Single-content">
						<?php the_content(); ?>
					</div>
				</article>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
				<div class="Single-sidebar">
					<?php dynamic_sidebar('unique-sidebar-id'); ?>
				</div>
			</section>
		</section>
	</main>
	<?php get_footer(); ?>
</body>
