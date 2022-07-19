<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WAN-IFRA_AMG
 */

?>

<div class="col-12 col-md-8 col-lg-12 mx-auto mt-3 p-0">
	<div class="context-image">
		<img class="img-fluid" src="<?php the_field('image') ?>" alt="">
	</div>

	<div class=" mb-3 p-2 search-result-context">
		<h5 class="mt-2 text-charcoal"><?php the_field('title') ?> </h5>
		<h6>- <?php the_field('company_name') ?></h6>
		<div class="search-description mt-4">
		<?php echo get_field('article') ?>
		</div>
		<div class="col-12 row my-4">
			<div class="col-6 col-lg-4">
				<img class="img-fluid" src="<?php the_field('logo') ?>" alt="<?php echo esc_attr(get_field('logo')['alt']); ?>" />
			</div>
			<div class="col-6 col-lg-8 d-flex justify-content-end align-items-end">
				<a href="<?php the_permalink(); ?>" class="btn btn-light">Read<i class="ms-2 fa-solid fa-arrow-right"></i></a>
			</div>   
		</div>
	</div>
</div>



