<!-- category.php -->

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article class="category-item">
			<h1><?php the_title(); ?></h1>
		

			<?php the_excerpt(); ?>

			<a href="<?php the_permalink(); ?>" class="btn btn-primary">weiterlesen</a>
		</article>

	<?php endwhile; ?>

<?php get_footer(); ?>