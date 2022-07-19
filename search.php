<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WAN-IFRA_AMG
 */

get_header();
?>

			<div class="container mt-3 d-lg-none">
				<div class="row">
					<div class="col-12 col-md-8 mx-auto" id="within-search">
					<?php echo do_shortcode('[ivory-search id="90" title="Default Search Form"]') ?>
					</div>
				</div>
			</div>

			<?php if(get_search_query())  :?>
				<div class="container-fluid px-3">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-10 col-xxl-6 offset-1 mx-auto px-lg-3">
							<div class="search-query w-auto text-center my-3 pt-2 pb-1 px-3 d-inline-flex">
								<h4><span class="text-light-grey">Your search query:</span> <?php echo get_search_query(); ?></h4>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="container-fluid px-3">
				<div class="row mb-5">
					<div class="col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 row">
						<?php if ( have_posts() && get_search_query() ) : ?>			
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */				
								if(get_post_type() == 'project'){
									get_template_part( 'template-parts/content', 'search-project' );
								} elseif(
									get_post_type() == 'context'){get_template_part('template-parts/content', 'search-context');
								} else{
									get_template_part('template-parts/content', 'search-general');
								}
								

							endwhile;

							the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
					</div>

					<?php get_template_part('template-parts/content', 'lg-menu') ?>

				</div>



			</div>

	

<?php
get_footer();
