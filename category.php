<!-- category.php -->

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		HALLO DEVELOP
 
 HALLO JOCHEN

		<article class="category-item">
			<h1><?php the_title(); ?></h1>
			<h2>Geschrieben von: <?php the_author(); ?></h2>

			<?php the_excerpt(); ?>

			<a href="<?php the_permalink(); ?>" class="btn btn-primary">weiterlesen</a>
		</article>

	<?php endwhile; ?>

<?php get_footer(); ?>