<!-- page.php -->

<?php get_header(); ?>

	<?php the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>


<?php get_footer(); ?>