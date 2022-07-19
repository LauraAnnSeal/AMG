<?php 

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'context'
	);


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


            <!-- Begin: slide -->
            <div class="slick-single-slide">
                <div class="slick-inner">

                    <div class="context-image">
                            <img class="img-fluid" src="<?php the_field('image') ?>" alt="">
                    </div>
                    <div class="mb-3 p-2 search-result-context">
                        <div class="search-title">
                            <h5 class="mt-2 text-charcoal"><?php the_field('title') ?> </h5>
                            <h6>- <?php the_field('company_name') ?></h6>
                        </div>
                        <div class="search-description mt-4">
                            <?php echo get_field('article') ?>
                        </div>
                        <div class="col-12 row my-4 search-org">
                            <div class="col-6 col-lg-6 col-xxl-4">
                                <img class="img-fluid" src="<?php the_field('logo') ?>" alt="<?php echo esc_attr(get_field('logo')['alt']); ?>" />
                            </div>
                            <div class="col-6 col-lg-6 col-xxl-8 d-flex justify-content-end align-items-end">
                                <a href="<?php the_permalink(); ?>" class="btn btn-light">Read<i class="ms-2 fa-solid fa-arrow-right"></i></a>
                            </div>   
                        </div>
                    </div>

                </div>
            </div>
            <!-- End: slide -->


            <?php endwhile; ?>
            
<?php endif; ?>
        <!-- end of template part -->
