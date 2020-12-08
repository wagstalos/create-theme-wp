<!-- criar um post destaque  -->
<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
	
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
	</div>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<div class="meta-info">
		<p>
			Categoria: <span><?php the_category( ' ' ); ?></span><br>
			Por <span><?php the_author_posts_link(); ?></span> 
			
			<?php the_tags( 'Tags: <span>', ', ', '</span>' ); ?>
		</p>
	</div>
	<!-- <?php the_content(); ?> -->
</article>