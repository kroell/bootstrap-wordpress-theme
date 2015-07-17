<!-- single.php -->

<?php get_header(); ?>

	<?php the_post(); ?>

	<h1><?php the_date() ?>, <?php the_time() ?> Uhr: <?php the_title(); ?></h1>

	<p><?php the_tags(); ?></p>
	<p>Kategorie: <?php the_category(); ?></p>

	<?php the_content(); ?>

<?php get_footer(); ?>