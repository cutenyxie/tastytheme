<?php get_header(); ?>
<div class="grid-container">
This is the front-page template.
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title() ;?></h3>	
		<?php the_content(); ?>
		<hr>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages yet!</p>

	<?php endif; ?>

<div class="footer-left grid-33 mobile-grid-100 tablet-grid-50">
	<?php if ( dynamic_sidebar('footer_left') ) : ?>					
													
				<?php else: ?>				
					<h5>Left Widget</h5>	
					<p>Your left widget content displays here.</p>
				<?php endif; ?>					
			</div>
			<div class="footer-middle grid-33 mobile-grid-100 tablet-grid-50">
				<?php if ( dynamic_sidebar('footer_middle') ) : ?>					
													
				<?php else: ?>				
					<h5>Middle Widget</h5>
					<p>Your middle widget displays here.</p>
				<?php endif; ?>				
			</div>
			<div class="footer-right grid-33 mobile-grid-100 tablet-grid-50">
				<?php if ( dynamic_sidebar('footer_right') ) : ?>					
					
				<?php else: ?>					
					<h5>Right Widget</h5>
					<p>Your right widget displays here.</p>
				<?php endif; ?>
			</div>
</div>

<?php get_footer(); ?>