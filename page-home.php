<?php get_header(); ?>
  <div class="content-area">
      <main>
          <section class="slide">
              <?php  echo do_shortcode('
              [recent_post_slider 
              design="design-1" 
              limit="4" 
              show_date="false"
              autoplay_interval="3000"
              ]'); ?>
          </section>

          <section class="s-services" id="nossa-proposta">
            <div class="container">
                <!-- <h1>Nossos Serviços</h1> -->
                <div class="row flex align-items-md-center">
                      <div class="col-sm-7"> 
                          <div class="services-item img-fluid">
                            <?php 
                              if( is_active_sidebar('services-1')){
                                  dynamic_sidebar( 'services-1' );
                              }
                            ?>
                          </div>    
                    </div>
                      <div class="col-sm-5"> 
                          <div class="services-item">
                          <?php 
                              if( is_active_sidebar('services-2')){
                                  dynamic_sidebar( 'services-2' );
                              }
                            ?>
                          </div>    
                    </div>
              </div> <!-- fim row -->
             </div> <!-- fim container -->
          </section>

          <section class="middle-area" id="capacitacoes">
            <div class="container">
                <div class="row">
                   <!-- <?php get_sidebar( 'home' ); ?> -->
                    <div class="news">
                        <div class="container">
                                <h2 class="text-center p-100">Capacitações em Compliance</h2>
                                <div class="row mt-4">
                                  <?php 
                                      // Segundo Loop
                                      $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 20,
                                        // 'category__not_in' => array( 5 ),
                                        'category__in' => array(  ),
                                        // 'offset' => 1
                                      );

                                      $secondary = new WP_Query( $args );

                                      if( $secondary->have_posts() ):
                                        while( $secondary->have_posts() ): $secondary->the_post();
                                      ?>

                                      <div class="col-sm-6 col-md-3 ">
                                        <?php get_template_part( 'template-parts/content', 'secondary' ); ?>
                                      </div>

                                      <?php
                                        endwhile;
                                        wp_reset_postdata();
                                      endif;									
                                      ?>

                                </div><!-- row -->
                        </div><!-- container -->
                    </div><!-- news col-md-8 -->		
				</div><!-- row -->
             </div> <!-- container -->
          </section>

        <section class="s-featured">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php 
                            if( is_active_sidebar('featured-1')){
                                    dynamic_sidebar( 'featured-1' );
                                }
                            ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php 
                            if( is_active_sidebar('featured-2')){
                                    dynamic_sidebar( 'featured-2' );
                                }
                            ?>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class=" col-12 col-md-6">
                        <?php 
                            if( is_active_sidebar('featured-3')){
                                    dynamic_sidebar( 'featured-3' );
                                }
                            ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php 
                            if( is_active_sidebar('featured-4')){
                                    dynamic_sidebar( 'featured-4' );
                                }
                            ?>
                    </div>
                </div>
            </div>
        </section>

          <section class="map">
            <div class="container">

            </div>
          </section> 
      </main>
  </div>
<?php get_footer(); ?>

        
