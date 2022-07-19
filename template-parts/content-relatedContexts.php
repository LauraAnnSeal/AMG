
 <?php 

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'context',
    'post__not_in' => array( $post->ID )
	);


// query
$the_query = new WP_Query( $args );

?>


<?php if( $the_query->have_posts() ): ?>
	<div class="container-fluid bg-grey p-0 mt-5">
        <div class="col-md-8 col-lg-10 mx-auto related-heading bg-pale-grey mx-0 mb-4 text-center py-4">
            <h2>Related Contexts</h2>
        </div>
        <div class="row px-4 px-lg-1 pb-5">
            <div class="col-12 col-lg-10 mx-auto row d-flex justify-content-between">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-6 row">
                        <?php get_template_part('template-parts/content', 'search-context') ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>