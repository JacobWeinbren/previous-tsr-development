<?php get_header(); ?>

<h1 class="header">Realities</h1>

<div class="divider"></div>

<?php 
$the_query = new WP_Query( array(
	'category_name' => 'Realities',
	'posts_per_page' => 3,
)); 
?>

<div class="section">

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="post">
				<?php the_post_thumbnail('medium'); ?>
				<?php the_title(); ?>
				<?php the_excerpt(); ?>
				<?php echo get_the_author(); ?>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php __('No News'); ?></p>
		<?php endif; ?>

	</div>

	<?php get_footer(); ?>
