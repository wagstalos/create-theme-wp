<article>
<a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?> </h2>
    <p> by <?php the_author_posts_link(); ?></p>
    <!-- <p>Autor:  </p> -->
    <?php if(has_category()): ?>
        <p>Categoria: <?php the_category( ' '   ); ?> </p>
    <?php endif; ?>
    <p><?php the_tags( 'Tags: ' , ','); ?> </p>
    <?php the_excerpt( ); ?>
</a>
</article>