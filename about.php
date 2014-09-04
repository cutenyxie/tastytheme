<?php 

// Template Name: About Page

get_header(); ?>
<div class="container">
<p>This is the about page template.</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_field('about_page_text') ;?></h3>	
		<?php the_field('authors_title'); ?>
	

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>
</div>

<?php get_template_part( 'content', 'authors' ); ?>


<?php get_footer(); ?>