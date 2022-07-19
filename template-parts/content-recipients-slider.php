<?php 

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'project',
    'meta_key'			=> 'media_name',
	'orderby'			=> '_custom',
	'order'				=> 'ASC'
	);


// query
$the_query = new WP_Query( $args );

?>

<?php if( $the_query->have_posts() ): ?>

<?php $col = 1; ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php if($col == 1) echo "<div class='slick-single-slide'>"; ?>
            <div class="slick-inner">
                <img src="<?php echo esc_url(get_field('media_logo')['url']); ?>" alt="" class="img-fluid">
            </div>
        
        <?php 
            if($col != 3){ $col += 1 ;} else { $col = 1; };
        ?>
        <?php if($col == 1) echo "</div>"; ?>

    <?php endwhile; ?>
            
<?php endif; ?>

