<?php get_header() ?>


<!-- Search bar -->
<div class="container mt-3 d-lg-none">
    <div class="row">
        <div class="col-12 col-md-8 mx-auto" id="within-search">
        <?php echo do_shortcode('[ivory-search id="90" title="Default Search Form"]') ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row px-3">
        <div class="col-12 col-md-8 col-lg-10 col-xxl-6 offset-1 mx-auto px-lg-3">
            <div class="search-query w-auto text-center my-3 pt-2 pb-1 px-3 d-inline-flex">
                <h4><span class="text-light-grey">Key Issue:</span> <?php the_title() ?></h4>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row mb-3 px-3">
        <div class="col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 row">
            <?php 

                $cat = strtolower(get_the_title());
                if($cat == 'land degradation'){
                    $cat = 'land';
                }

                // args
                $args = array(
                    'numberposts'	=> -1,
                    'post_type'		=> 'project',
                    'meta_key'		=> $cat,
                    'meta_value'	=> 1
                );


                $the_query = new WP_Query( $args );

                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'search-project' ); ?>
                    <?php endwhile; ?>
                <?php  else : ?>
                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

            <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
        </div>
        <?php get_template_part('template-parts/content', 'lg-menu') ?>
    </div>
</div>

<?php get_footer() ?>