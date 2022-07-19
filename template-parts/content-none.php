<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WAN-IFRA_AMG
 */

?>

<div class="col-12 col-md-8 col-lg-12 mx-auto mb-3 py-2 ">
	<h5 class="mt-2 text-charcoal">Sorry, nothing is here </h5>
	<h6>Take a look at some other links below, or try again in the search bar above.</h6>
</div>

<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'project'
));

if( $posts ): ?>
<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
	
	<div class="col-12 col-md-8 col-lg-12 mx-auto my-3 pt-2 search-result">
		<?php get_template_part('template-parts/content', 'location-btn-general', ucfirst(get_field('country'))) ?> 
		<?php get_template_part('template-parts/content', 'key-issues') ?>
		<h5 class="mt-2 text-charcoal"><?php the_field('title') ?> </h5>
		<h6>- <?php the_field('media_name') ?></h6>
		<p class="search-description mt-4">
			<?php echo get_field('about') ?>
		</p>
		<div class="col-12 row my-4">
			<div class="col-6">
				<img class="img-fluid" src="<?php echo esc_url(get_field('media_logo')['url']); ?>" alt="<?php echo esc_attr(get_field('media_logo')['alt']); ?>" />
			</div>
			<div class="col-6 d-flex justify-content-end align-items-end">
				<a href="<?php the_permalink(); ?>" class="btn btn-light">Read<i class="ms-2 fa-solid fa-arrow-right"></i></a>
			</div>   
		</div>
</div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

<?php endif; ?>