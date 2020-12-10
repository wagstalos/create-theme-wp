<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(275,275 ) ); ?></a>
    <h2><?php the_title(); ?> </h2>
    <!-- <?php the_content(); ?> -->
    <p>Por: <?php the_author_posts_link(); ?></p>
    <p>Categoria: <?php the_category( ' '   ); ?> </p>
    <?php the_excerpt(); ?>
    <!-- <p>Publicado em: <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p> -->
    <!-- <p>Autor:  </p> -->

    <!-- <p><?php the_tags( 'Tags: ' , ','); ?> </p> -->
</article>