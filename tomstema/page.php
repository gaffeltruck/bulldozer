<?php get_header(); ?>

	<main role="main">
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>

		<?php endwhile; ?>

		<?php else: ?>

			<article>

				<h2>Tyvärr, inget att visa.</h2>

			</article>

		<?php endif; ?>

		</section>
	</main>

<?php get_footer(); ?>
