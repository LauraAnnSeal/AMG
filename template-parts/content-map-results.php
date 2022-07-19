<?php 

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'project'
	);


// query
$the_query = new WP_Query( $args );

?>


<?php if( $the_query->have_posts() ): ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="country-result-block country-result-actual d-none" data-country="<?php echo get_field('country') ?>">
                        <?php get_template_part('template-parts/content', 'key-issues-small') ?>
                        <p class="text-charcoal"><?php the_field('title') ?> </p>
                        <div class=" mt-2 search-description">
                            <small class="text-dark-grey"><?php echo get_field('about') ?></small>
                        </div>
                        
                        <div class="d-flex justify-content-end"><a href="<?php the_permalink(); ?>" class="read-map-btn ms-auto my-1 btn btn-sm btn-light">Read<i class="ms-2 fa-solid fa-arrow-right"></i></a></div>
                    </div>
                
                <?php endwhile; ?>

<?php endif; ?>