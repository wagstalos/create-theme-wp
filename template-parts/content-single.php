<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    
    <header>
       
		<div class="meta-info">
			<p class="badge badge-primary"><?php the_category( ' ' ); ?></p>
			<!-- <p><?php the_tags( 'Tags: ', ', ' ); ?></p>		 -->
        </div>
        <h2><?php the_title(); ?></h2>
        <p>
            <span><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 35); ?></span>
            <?php the_author_posts_link(); ?></p>
    </header>

    <div class="content">
        <?php the_content(); ?>
    </div>

</article>