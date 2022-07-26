

            <?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'with_thanks_to'
));

if( $posts ): ?>
	
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<!-- Begin: slide -->
        <div class="slick-single-slide">
            <div class="slick-inner">
                <?php $image = get_field('logo')?>
                <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
            </div>
        </div>
        <!-- End: slide -->
	
	<?php endforeach; ?>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>

