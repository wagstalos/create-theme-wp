<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="slide">
            <?php  echo do_shortcode('
              [recent_post_slider 
              design="design-2" 
              limit="4" 
              show_date="false"
              autoplay_interval="3000"
              ]'); ?>
        </section>

        <section class="s-services" id="nossa-proposta">
            <div class="container">
                <!-- <h1>Nossos Serviços</h1> -->
                <div class="row">
                    <div class="col-12 p-100 text-center">
                        <?php 
                             if( is_active_sidebar('sub-title-section-1')){
                            dynamic_sidebar( 'sub-title-section-1' );
                        }
                        ?>
                        <?php 
                             if( is_active_sidebar('title-section-1')){
                            dynamic_sidebar( 'title-section-1' );
                        }
                        ?>

                    </div>
                </div>
                <div class="row flex align-items-md-center">
                    <div class="col-sm-6">
                        <div class="services-item img-fluid">
                            <?php 
                              if( is_active_sidebar('services-1')){
                                  dynamic_sidebar( 'services-1' );
                              }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
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
                    <div class="col-12 p-100 text-center">
                        <?php 
                             if( is_active_sidebar('sub-title-section-2')){
                            dynamic_sidebar( 'sub-title-section-2' );
                        }
                        ?>
                        <?php 
                            if( is_active_sidebar('title-section-2')){
                                dynamic_sidebar( 'title-section-2' );
                            }
                        ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php echo do_shortcode ('[pgaf_post_filter content_words_limit="20" show_date="true" extra_class=""]'); ?>
                    </div>

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

        <!-- contato -->
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <?php echo do_shortcode ('[contact-form-7 id="106" title="Formulário de contato 1"]'); ?>
                    </div>
                </div>

        </section>
    </main>
</div>
<?php get_footer(); ?>