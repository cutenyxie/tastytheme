<?php get_header(); ?>
<div class="container">
This is the page template.
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title() ;?></h3>	
		<?php the_content(); ?>
		<hr>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages yet!</p>

	<?php endif; ?>
</div>


<?php get_footer(); ?>