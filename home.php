<?php get_header(); ?>
<div class="grid-container"> 
<div class="grid-66">
This is the home template.
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'post' ); ?>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages yet!</p>

	<?php endif; ?>
</div>

<div class="grid-33">
	<?php if ( dynamic_sidebar('top_widget') ) : ?>					
	
				<?php endif; ?>					
			
				<?php if ( dynamic_sidebar('middle_widget') ) : ?>														
					
				<?php endif; ?>				
			
				<?php if ( dynamic_sidebar('bottom_widget') ) : ?>					
					
				<?php endif; ?>
			</div>
	</div>
<?php get_footer(); ?>