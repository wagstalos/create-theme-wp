<!-- page home -->
<article <?php post_class( array( 'class' => 'secondary shadow mb-5 bg-white rounded' ) ); ?>>
	
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
	</div>
	<div class="meta-info p-2">
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		<!-- <?php the_content(); ?> -->
		<div class="mt-2">
			<?php $excerpt = get_the_excerpt();
				  $end = ' ...';
				  $excerpt = substr( $excerpt, 0, 50 ); // Only display first 70 characters of excerpt
				  $result = substr( $excerpt, 0, strrpos( $excerpt, ' ') );
				  echo $result . $end; ?> 
		</div>
		<p class="mt-2">
			<span class="badge badge-primary"><?php the_category( ' ' ); ?></span>
		</p>
	
		<p>	
			<span><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 35); ?></span>
			<span><?php the_author_posts_link(); ?></span> <br>	
			<span class="badge badge-light"><?php the_tags(  ' Tags: <span>', ', ', '</span>' ); ?></span>
		</p>
	</div>
</article>
