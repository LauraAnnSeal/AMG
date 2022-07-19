<?php /* Template Name: Projects Template */ ?>

<?php get_header() ?>


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
 <div class="container-fluid" id="page-type">
    <div class="col-8 col-lg-10 col-xxl-6 mx-auto">
        <span>All Projects</span>
    </div>
</div>
<div id="page-type-padding"></div>

<?php if( $the_query->have_posts() ): ?>
	<div class="container-fluid">
        <div class="row px-3">
            <div class="col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 row">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'search-project' ); ?>
                <?php endwhile; ?>
            </div>
            <?php get_template_part('template-parts/content', 'lg-menu') ?>
        </div>
    </div>
<?php endif; ?>

<div id="page-type-padding"></div>

<?php get_footer() ?>