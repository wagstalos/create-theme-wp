<article class="card-post-default">
    <?php the_post_thumbnail( array(275,275 ) ); ?>
    <h2><?php the_title(); ?> </h2>
    <?php the_content( ); ?>
    <p>Publicado em: <?php echo get_the_date(); ?> </p>
    <!-- <p>Autor:  </p> -->
    <p>Categoria: <?php the_category( ' '   ); ?> </p>
    <p><?php the_tags( 'Tags: ' , ','); ?> </p>
</article>