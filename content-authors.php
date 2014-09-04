<?php
	$args = array( 'post_type' => 'about' );
	$the_query = new WP_Query( $args );

?>

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php 

			$image = get_field('photo');

			if( !empty($image) ): 

			// vars
			$url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];

			// thumbnail
			$size = 'thumbnail';
			$thumb = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];

			?>


		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		<?php endif; ?> <br/>

		<?php the_field( 'authors_name' ); ?> <br/>
		<?php the_field( 'authors_bio' ); ?> <br/>
		<hr>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages yet!</p>

	<?php endif; ?>