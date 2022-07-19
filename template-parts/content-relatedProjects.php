
 <?php 

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'project',
    'post__not_in' => array( $post->ID ),
	'meta_query'	=> array(
		'relation'		=> 'OR',
		array(
			'key'		=> 'location',
			'value'		=>  get_field('country'),
			'compare'	=> '='
		),
		array(
			'key'		=> 'energy',
			'value'		=> get_field('energy'),
			'compare'	=> '='
        ),
		array(
			'key'		=> 'land',
			'value'		=> get_field('land'),
			'compare'	=> '='
        ),
		array(
			'key'		=> 'water',
			'value'		=> get_field('water'),
			'compare'	=> '='
        ),
		array(
			'key'		=> 'conservation',
			'value'		=> get_field('conservation'),
			'compare'	=> '='
        ),
		array(
			'key'		=> 'responses',
			'value'		=> get_field('responses'),
			'compare'	=> '='
        )
	)
);


// query
$the_query = new WP_Query( $args );

?>


<?php if( $the_query->have_posts() ): ?>
	<div class="container-fluid bg-grey p-0 mt-5">
        <div class="col-md-8 col-lg-10 col-xxl-6 mx-auto related-heading bg-pale-grey mx-0 mb-4 text-center py-4">
            <h2>Related Projects</h2>
        </div>
        <div class="row px-4 px-lg-1 pb-5">
            <div class="col-12 col-lg-10 col-xxl-6 mx-auto row d-flex justify-content-between">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-6 row">
                        <?php get_template_part('template-parts/content', 'search-project') ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>