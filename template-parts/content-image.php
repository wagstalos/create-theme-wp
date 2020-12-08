<article>
    <?php the_post_thumbnail( array(275,275 ) ); ?>
    <h2><?php the_title(); ?> </h2>
    <?php the_content( ); ?>
    <p> by <?php the_author_posts_link(); ?></p>
    <!-- <p>Autor:  </p> -->
    <p>Categoria: <?php the_category( ' '   ); ?> </p>
    <p><?php the_tags( 'Tags: ' , ','); ?> </p>
</article>