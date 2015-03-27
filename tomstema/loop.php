<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) :?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); ?>
			</a>
		<?php endif; ?>

		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>

		<span class="date"><?php the_time('j F, Y'); ?> <?php the_time('G:i'); ?></span>
		<span class="author">Publicerat av: <?php the_author_posts_link(); ?></span>
		<span class="comments-small"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( 'Inga kommentarer', '1 kommentar', '% kommentarer'); ?></span>

		<?php the_excerpt(); ?> 

		<?php edit_post_link(); ?>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2>Tyvärr, inget att visa.</h2>
	</article>

<?php endif; ?>
