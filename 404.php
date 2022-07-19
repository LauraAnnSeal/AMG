<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WAN-IFRA_AMG
 */

get_header();
?>
<div class="top-404 bg-indigo"></div>
	<div class="container-fluid bg-indigo" id="start-404">
		<div class="row">
			<div class="col-12 col-md-6 col-xl-3  mx-auto">
				<h1 id="heading-404">404</h1>
				<h1>Nothing here.</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-indigo" id="end-404">
		<div class="row">
			<div class="col-12 col-md-6 col-xl-3 mx-auto">
				<h1>Perhaps try a key issue</h1>
				<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Energy', 'id' => 128]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Land Degradation', 'id' => 129]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Water', 'id' => 130]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Conservation', 'id' => 131]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Responses', 'id' => 132]) ?> 
			</div>
		</div>
	</div>

<?php
get_footer();
