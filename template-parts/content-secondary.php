<article <?php post_class( array( 'class' => 'secondary shadow mb-5 bg-white rounded' ) ); ?>>
	
	<div class="thumbnail">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
	</div>
	<div class="meta-info p-2">
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		<p>
			Categoria: <span><?php the_category( ' ' ); ?></span><br>
			Por <span><?php the_author_posts_link(); ?></span> <br>
			
			<?php the_tags( 'Tags: <span>', ', ', '</span>' ); ?>
		</p>
	
	<!-- <?php the_content(); ?> -->
	<div class="mt-2">
	<?php $excerpt = get_the_excerpt();
		 $end = ' ...';
 			$excerpt = substr( $excerpt, 0, 70 ); // Only display first 70 characters of excerpt
 			$result = substr( $excerpt, 0, strrpos( $excerpt, ' ') );
			 echo $result . $end; ?> 

	 </div>
</div>
</article>
