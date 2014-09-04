<div class="contentpost">
<header class="title">	
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</header>

<div class="info">
	By <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a> 
	on <?php the_time('F j, Y'); ?>
	
</div>

<div class="excerpt">

	<?php if(is_single()): ?>
			<?php	// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('medium'); // This can be changed!
			} ?>

		<?php the_content(); ?>
		
		<?php comments_template(); ?>

	<?php else: ?>
		<?php	// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail'); // This can be changed!
			} ?>
		<?php the_excerpt(); ?>
		
		<p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>

	<?php endif; ?>
</div>
</div>