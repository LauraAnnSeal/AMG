<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WAN-IFRA_AMG
 */

?>
<?php if(get_the_ID() == 68 || get_the_ID() == 74 || get_the_ID() == 76 || get_the_ID() == 78) : ?>
<div class="col-12 col-md-8 col-lg-12 mx-auto my-3  py-4 search-result">
	<h5 class="mt-2 text-charcoal"><?php the_title() ?> </h5>
	<p class="search-description mt-4">
		<?php echo get_field('excerpt') ?>
	</p>
	<div class="row">
		<div class="col-12 d-flex justify-content-end align-items-end">
			<a href="<?php the_permalink(); ?>" class="btn btn-light">Read<i class="ms-2 fa-solid fa-arrow-right"></i></a>
		</div>   
	</div>
</div>

<?php endif; ?>
