<?php get_header(); ?>

<div class="container">
<p>this is the single template</p>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'post' ); ?>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages yet!</p>

	<?php endif; ?>
</div>


<?php get_footer(); ?>